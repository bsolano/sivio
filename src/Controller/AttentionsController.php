<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
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

    /**
     * View method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attention = $this->Attentions->get($id, [
            'contain' => ['Aggressors', 'Histories', 'Users']
        ]);

        $this->set('attention', $attention);
        $this->set('_serialize', ['attention']);
    }
    
    /** metodo para realizar seguimientos a una atencion **/
    public function followup($id = null){
        $this->loadModel('PeopleAdvocacies');
        
        $advo = $this->PeopleAdvocacies->find('all',['conditions' => ['person_id' => $id]])->select(['PeopleAdvocacies.tipo','Advocacies.nombre' , 'Advocacies.telefono'])->contain(['Advocacies']);
        $this->set('advo',$advo);
        if($this->request->is('post')){
            
        }
    }
    /**
     * Agrega las atenciones en la base de datos manipulando los resultados de acuerdo 
     * a las convenciones pre-establecidas. 
     * $id es el id de la persona en la base de datos
     */
    public function add($id)
    {
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 

        //se cargan los modelos que se necesiten
        $this->loadModel('People');
        $this->loadModel('Aggressors');
        $this->loadModel('Histories');
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('InterventionsPeople');
        $this->loadModel('Interventions');
        $this->loadModel('Entries');
        $this->loadModel('PeopleEntries');

        //se cargan las tablas
        $peopleTable           = TableRegistry::get('People');
        $aggressorsTable       = TableRegistry::get('Aggressors');
        $historiesTable        = TableRegistry::get('Histories');
        $attentionsTable       = TableRegistry::get('Attentions');
        $entriesTable          = TableRegistry::get('Entries');
        $peopleEntriesTable    = TableRegistry::get('PeopleEntries');

        //obtener una persona y dar formato a sus datos para llenar en el formulario
        $per = $peopleTable->get($id);
        $per->condicion_salud           = $this->StringManipulation->StringTokenedToArray($per->condicion_salud);
        $per->condicion_aseguramiento   = $this->StringManipulation->StringTokenedToArray($per->condicion_aseguramiento);
        $per->adicciones                = $this->StringManipulation->StringTokenedToArray($per->adicciones);
        $this->set('persona', $per);

        //para saber cuales redes de apoyo tiene actualmente una persona
        $advo = $this->PeopleAdvocacies->find('all',['conditions' => ['person_id' => $id]])->select(['PeopleAdvocacies.tipo','Advocacies.nombre' , 'Advocacies.telefono'])->contain(['Advocacies']);
        $this->set('advo',$advo);
        
        //hijos 
        $iHijo = $this->People->find('all',['conditions' => ['num_familia' => $per->num_familia, 'rol_familia'=>'hijo' ]])->select('id');
        $iHijo = $iHijo->toArray();

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
            //                 $datosAtnP = ['attention_id'=>$attention_id,'person_id'=>$id];
            //                 $attnP = $this->AttentionsPeople->newEntity($datosAtnP);
            //                 ($guardado = $guardado && $attentionsPeopleTable->save($attnP));
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
