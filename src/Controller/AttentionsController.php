<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Person;
use App\Model\Entity\History;
use App\Model\Entity\Followup;

/**
 * Attentions Controller
 *
 * @property \App\Model\Table\AttentionsTable $Attentions
 */
class AttentionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $atenciones = $this->Attentions->find('all')->contain(['Logs', 'Users','Followups']);
        $attentions = $this->paginate($atenciones);
        $this->set(compact('attentions'));
        $this->set('_serialize', ['attentions']);
    }


    /** Metodo que realiza los seguimientos de una atención, si ya el seguimiento existe, 
     * edita sus datos, y de no ser así, crea el nuevo seguimiento según lo que sea necesario
     * 
     * @id ID de la persona
     * @atId ID de la atención a la que pertenece el followup
     * @fId ID del followup (en caso que exista uno)
    */
    public function followup($id, $atId = null, $fId = null){
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 
        
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('People');
        $this->loadModel('Followups');
        
        $peopleTable         = TableRegistry::get(  'People'         );
        $followTable         = TableRegistry::get(  'Followups'         );
        
        $advo = $this->PeopleAdvocacies->find(
            'all',['conditions' => ['person_id' => $id]])
            ->select(['PeopleAdvocacies.tipo','Advocacies.nombre' , 'Advocacies.telefono'])
            ->contain(['Advocacies']
        );
        
        $user = $this->Followups->newEntity();
        
        $per = $peopleTable->get($id);
        $this->set('persona',$per);
        
        $fol = new Followup();
        if($fId != null){
            $fol = $followTable->get($fId);
            $fol->apoyo_institucional = explode("&",$fol->apoyo_institucional,-1);
            $fol->enfrenta_violencia = explode("&",$fol->enfrenta_violencia,-1);
            $fol->hijos_atencion_especializada = explode("&",$fol->hijos_atencion_especializada,-1);
        }
        
        $this->set('seg',$fol);
        
        
        /*           On Post  ------------------------------------------------*/
        if ($this->request->is('post')) {
            $this->set('satanas',$this->request->data);
            $followup =  $this->request->data['Followup'];
            $followup['attention_id'] = $atId;
            
            if ( $followup['apoyo_institucional'] != '' ) {
                $followup['apoyo_institucional']  = array_filter($followup['apoyo_institucional']);
                $followup['apoyo_institucional']  = $this->StringManipulation->ArrayToTokenedString($followup['apoyo_institucional']);
            }
            
            if ( $followup['enfrenta_violencia'] != '' ) {
                $followup['enfrenta_violencia']  = array_filter($followup['enfrenta_violencia']);
                $followup['enfrenta_violencia']  = $this->StringManipulation->ArrayToTokenedString($followup['enfrenta_violencia']);
            }
            
            if ( $followup['hijos_atencion_especializada'] != '' ) {
                $followup['hijos_atencion_especializada'] = array_filter($followup['hijos_atencion_especializada']);
                $followup['hijos_atencion_especializada'] = $this->StringManipulation->ArrayToTokenedString($followup['hijos_atencion_especializada']);
            }

            $user = ($fId != null)? $this->Followups->get($fId): $user;
            $user = $this->Followups->patchEntity($user, $followup );
            $user->person_id = $id;
            
            
           
            if ( empty( $user->apoyo_institucional   ) ) { 
                $user->apoyo_institucional = null;
            }
                
            //debug($user);
            
            if ($this->Followups->save($user)) {
                $this->Flash->success(__('saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('could not be saved. Please, try again.'));
            }
        }

    }
    /**
     * Agrega las atenciones en la base de datos manipulando los resultados de acuerdo 
     * a las convenciones pre-establecidas. 
     * $id es el id de la persona en la base de datos
     */
    public function add($id, $atId = null)
    {
        
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 

        //se cargan los modelos que se necesiten
        $this->loadModel('People');
        $this->loadModel('Logs');
        $this->loadModel('Aggressors');
        $this->loadModel('Histories');
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('InterventionsPeople');
        $this->loadModel('Interventions');
        $this->loadModel('Entries');
        $this->loadModel('PeopleEntries');

        //se cargan las tablas
        $logsTable           = TableRegistry::get(  'Logs'           );
        $peopleTable         = TableRegistry::get(  'People'         );
        $aggressorsTable     = TableRegistry::get(  'Aggressors'     );
        $historiesTable      = TableRegistry::get(  'Histories'      );
        $attentionsTable     = TableRegistry::get(  'Attentions'     );
        $entriesTable        = TableRegistry::get(  'Entries'        );
        $peopleEntriesTable  = TableRegistry::get(  'PeopleEntries'  );

        //obtener una persona y dar formato a sus datos para llenar en el formulario
        $per = $peopleTable->get($id);
        $per->condicion_salud           = $this->StringManipulation->StringTokenedToArray($per->condicion_salud);
        $per->condicion_aseguramiento   = $this->StringManipulation->StringTokenedToArray($per->condicion_aseguramiento);
        $per->adicciones                = $this->StringManipulation->StringTokenedToArray($per->adicciones);
        $this->set('persona', $per);


        //para saber cuales redes de apoyo tiene actualmente una persona
        $advo = $this->PeopleAdvocacies->find('all',['conditions' => ['person_id' => $id]])
                                            ->select(['PeopleAdvocacies.tipo','Advocacies.nombre' , 'Advocacies.telefono'])->contain(['Advocacies']);
        $this->set('advo',$advo);
        
        //hijos 
        $iHijo = $this->People->find('all',['conditions' => ['num_familia' => $per->num_familia, 'rol_familia'=>'hijo' ]])->select('id');
        $iHijo = $iHijo->toArray();
        
        $agrs = new Person();
        $hist = new History();
        
        if($atId != null){
            $aten = $attentionsTable->get($atId);
            $agrsID = $aggressorsTable->get($aten->aggressor_id);
            
            //obtiene el agresor
            $agrs = $peopleTable->get($agrsID->person_id);
            //obtiene la historia de violencia
            $hist = $historiesTable->get($aten->history_id);
            $hist = $this->StringManipulation->transformarStrings($hist->toArray());
            $hist = new History($hist);
        }
        $this->set('histV',$hist);
        $this->set('agrsr',$agrs);

        if ($this->request->is('post')) {
            $this->set('data',$this->request->data);
            //se recupera todas las personas e historias
            $personas = $this->request->data['Person'];
            $historias = $this->request->data['History'];
            
            //cambio de todo en persona para poder guardarlo en la DB
            $persona = $personas[0]; //obtiene la persona
            $persona = $this->StringManipulation->transformarArrays($persona,['fecha_de_nacimiento']);//transforma todos los datos que sean arrays en string tokenizados, menos los que esten en el array del segundo parametro
            if($this->request->data['dconfidencial'] == 1){//si la direccion es confidencial
                $persona['provincia'] = "Confidencial/No indica";
                $persona['canton'   ] = "Confidencial/No indica";
                $persona['direccion'] = "Confidencial/No indica";
            }
            $per = $this->People->patchEntity($per,$persona);
            
            //cambio en agressors para formato DB
            $agresor = $personas[1];
            $agresor = $this->StringManipulation->transformarArrays($agresor,[]);
            $ag      = $this->People->newEntity($agresor);
            
            $ingresos  = $this->request->data['Entry'];
            $pingresos = $this->request->data['PeopleEntry'];

            /************************ GUARDAR DATOS ***************************/
            
            $aggressor_id; //id del agresor para los saves posteriores
            $attention_id; //id de atencino para los saves posteriores
            //guarda agredida, agresor (dos tablas) e historia
            $guardado = true; //condicion de parada para el mensaje de error
            // if ($guardado = $guardado && $peopleTable->save($per) && ($agrP = $peopleTable->save($ag))) {
            //     //datos de la tabla agresor
            //     $datosAgresor = ['person_id'=>$agrP->id];
            //     $agT = $this->Aggressors->newEntity($datosAgresor);
                
            //     if ($guardado = $guardado && ($agrA = $aggressorsTable->save($agT))) {
            //         $aggressor_id = $agrA->id;
                    
            //         $historiaViolencia = $historias[0];
            //         $historiaViolencia = $this->StringManipulation->transformarArrays($historiaViolencia,['vencimiento_proteccion']);
            //         $historiaViolencia['person_id'] = $id;
            //         $historiaViolencia['aggressor_id'] = $aggressor_id;
            //         $hv = $this->Histories->newEntity($historiaViolencia);
            //         //falta por salvar adecuadamente antecedentes legales******************************************
            //         if ($guardado = $guardado && $hstTabla = $historiesTable->save($hv)) {
            //             $datosAtencion = [ 'aggressor_id' => $aggressor_id, 'identificacion' => $persona['identificacion'],
            //                               'history_id' => $hstTabla->id, 'user_id' => $this->Auth->user('id'), 'tipo' => 'CEAAM']; 
            //             $atn = $this->Attentions->newEntity($datosAtencion);
            //             if ($guardado = $guardado && $atencion = $attentionsTable->save($atn) ) {
            //                 $attention_id = $atencion->id;
            //             }
            //         }
            //     }
            // } 
            
            // for($j = 0; $j < 2; $j++){
            //     //arreglar los datos para guardar en la base de datos, en las preguntas de llenar cual CEAAM
            //     if($j == 0){
            //         $ingresos[$j] = $this->StringManipulation->transformarArrays($ingresos[$j],[]);
            //         $strTipo = $ingresos[$j]['tipo_ing_eg'];
                    
            //         if($strTipo == "Traslado CEAAM"){
            //             $ingresos[$j]['tipo_ing_eg'] = $strTipo." ".$ingresos[$j]['ceaam_traslado'];
            //         }
                    
            //         elseif($strTipo == "Reingreso CEAAM"){
            //             $ingresos[$j]['tipo_ing_eg'] = $strTipo." ".$ingresos[$j]['ceaam_reingreso'];
            //         }
                    
            //         $pingresos[$j]['tipo_accion'] = 'Ingreso';
            //     }else{
            //         if($this->request->data['ddconfidencial']==1){
            //             $ingresos[$j]['provincia_destino' ] = "Confidencial/No indica";
            //             $ingresos[$j]['canton_destino'    ] = "Confidencial/No indica";
            //             $ingresos[$j]['destino_extranjero'] = "Confidencial/No indica";
            //         }
                    
            //         if($ingresos[$j]['tipo_ing_eg']=="Traslado CEAAM"){
            //             $ingresos[$j]['tipo_ing_eg'] = "Traslado CEAAM ".$ingresos[$j]['ceaam_traslado'];
            //         }
                    
            //         $pingresos[$j]['tipo_accion'] = 'Egreso';
            //     }
                
            //     $ingr = $this->Entries->newEntity($ingresos[$j]);
                
            //     if($guardado = $guardado && $in = $entriesTable->save($ingr)){
            //         $pingresos[$j]['attention_id']  = $attention_id;
            //         $pingresos[$j]['person_id'   ]  = $id;
            //         $pingresos[$j]['entry_id'    ]  = $in->id;
                    
            //         $pi = $this->PeopleEntries->newEntity($pingresos[$j]);
            //         ($guardado = $guardado && $peopleEntriesTable->save($pi));
            //     }
            // }
            
            
            // // //guarda los hijos y su historia de violencia
            // (int)$i = 1;
            // foreach($iHijo as $h){
            //     $datosHijo = $peopleTable->get($h->id);
            //     $hijo = $this->People->patchEntity($datosHijo, $personas['Hijo'.$i]);
            
            //     $historiaViolenciaHijo = $historias[('Hijo'.$i)];
            //     $historiaViolenciaHijo = $this->StringManipulation->transformarArrays($historiaViolenciaHijo,[]);
            //     $historiaViolenciaHijo['person_id']    = $h->id;
            //     $historiaViolenciaHijo['aggressor_id'] = $aggressor_id;
            //     $hstHijo = $this->Histories->newEntity($historiaViolenciaHijo);
            
            //     ($guardado = $guardado && $peopleTable->save($hijo) && $historiesTable->save($hstHijo));
            //     $i++;
            // }
            
            // $intervP = $this->request->data['InterventionsPerson'];
            // $interv  = $this->request->data['Interventions'];
            // (object)$intSaved = null; // podria no entrar al foreach si no se elige ninguna
            // foreach ($intervP as $iv) {
            //     if ( $iv['tipo_intervencion'] ) { // si el checkbox esta activo
            //         $iv = $this->InterventionsPeople->newEntity($iv);
            //         $iv->person_id         = $per->id;
            //         $iv->attention_id      = $attention_id;
            //         // 
            //         // el array de interv se indexa con 
            //         // { 'legal', 'trabsocial', ... } : los tipos de intervencion
            //         $intvn = $this->Interventions->newEntity(  $interv[$iv['tipo_intervencion' ]]  );
            //         $intSaved = $this->Interventions->save($intvn);
            //         // 
            //         $iv->intervention_id = $intSaved->id;
            //         $intPsaved = $this->InterventionsPeople->save($iv);
            //     }
            // }
            // // interdiscp
            // {
            //     $iv = $this->InterventionsPeople->newEntity( );
            //     $iv->tipo_intervencion = 'interdisciplinaria';
            //     $iv->person_id         = $per->id;
            //     $iv->attention_id      = $attention_id ;
            //     // 
            //     // 
            //     $intvn = $this->Interventions->newEntity(  $interv[ 'interdisciplinaria' ]  );
            //     $idspsv = $this->Interventions->save($intvn);
            //     // 
            //     $iv->intervention_id = $intSaved->id;
            //     $ipdspsv = $this->InterventionsPeople->save($iv);
            // }
            // // 
            // if ($intSaved && $intSaved && $intPsaved && $idspsv && $ipdspsv ) {
            //     $this->Flash->success(__('The person has been saved.'));
            //     //return $this->redirect(['action' => 'index']);
            // } else {
            //     $this->Flash->error(__('The attention could not be saved. Please, try again.'));
            // }
            
            if ($guardado) {
                $this->Flash->success(__('Guardado.'));
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error(__('Error al guardar datos.'));    
            }
             
        }
    }

    public function initialize(){
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }

    /**
     * Edit method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attention = $this->Attentions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attention = $this->Attentions->patchEntity($attention, $this->request->data);
            if ($this->Attentions->save($attention)) {
                $this->Flash->success(__('The attention has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attention could not be saved. Please, try again.'));
            }
        }
        $agressors = $this->Attentions->Agressors->find('list', ['limit' => 200]);
        $histories = $this->Attentions->Histories->find('list', ['limit' => 200]);
        $users = $this->Attentions->Users->find('list', ['limit' => 200]);
        $this->set(compact('attention', 'agressors', 'histories', 'users'));
        $this->set('_serialize', ['attention']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attention = $this->Attentions->get($id);
        if ($this->Attentions->delete($attention)) {
            $this->Flash->success(__('The attention has been deleted.'));
        } else {
            $this->Flash->error(__('The attention could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function getSeguimientos($id = null){
        $this->autoRender = false;
        $this->loadModel('Followups');
        $q = $this->Followups->find('all',['conditions' => ['attention_id'  => $id]]);
        $this->set('segs',$q->count());
        
    }

}
