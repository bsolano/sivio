<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Person;
use App\Model\Entity\History;
use App\Model\Entity\Followup;
use App\Model\Entity\Log;

/**
 * 
 * Controlador de atenciones
 *
 * @author     Juan Diego Araya
 * @author     Jason Anchía
 * @link       http://sivio-edsv.c9users.io/attentions/
*/

class AttentionsController extends AppController
{

    /**
     * Index de atenciones existentes
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
     * @param $id ID de la persona
     * @param $atId ID de la atención a la que pertenece el followup
     * @param $fId ID del followup (en caso que exista uno)
    */
    public function followup($id, $atId = null, $fId = null){
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 
        
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('People');
        $this->loadModel('Followups');
        
        $peopleTable         = TableRegistry::get(  'People'         );
        $followTable         = TableRegistry::get(  'Followups'         );
        
        $advo = $this->PeopleAdvocacies->
            find('all',['conditions' => ['person_id' => $id]])->
                select(['PeopleAdvocacies.tipo','PeopleAdvocacies.nombre' , 'PeopleAdvocacies.telefono']
        );
        
        $user = $this->Followups->newEntity();
        
        $per = $peopleTable->get($id);
        
        $this->set('persona',$per   );
        $this->set('advo'   ,$advo  );

        debug($fId );
        $fol = new Followup();
        if($fId != null){
            debug($fId );
            $fol = $followTable->get($fId);
            $fol->apoyo_institucional          = explode("&",$fol->apoyo_institucional         ,-1);
            $fol->enfrenta_violencia           = explode("&",$fol->enfrenta_violencia          ,-1);
            $fol->hijos_atencion_especializada = explode("&",$fol->hijos_atencion_especializada,-1);
        }
        debug( $fol );
        debug( $fol->apoyo_empleo );
        
        $this->set('seg',$fol);
        
        
        /*           On Post  ------------------------------------------------*/
        if ($this->request->is('post')) {
            $this->set('data',$this->request->data);
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
     * @param $id es el id de la persona en la base de datos
     * @param $atId id de la atencion ya existente
     */
    public function edit($id, $atId)
    { 
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 
 
        //se cargan los modelos que se necesiten
        $this->loadModel('People');
        $this->loadModel('Logs');        
        $this->loadModel('Users');
        $this->loadModel('Histories');
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('InterventionsPeople');
        $this->loadModel('Interventions');
        $this->loadModel('Entries');
        $this->loadModel('PeopleEntries');

        //se cargan las tablas
        $logsTable           = TableRegistry::get(  'Logs'           );
        $peopleTable         = TableRegistry::get(  'People'         );
        $historiesTable      = TableRegistry::get(  'Histories'      );
        $attentionsTable     = TableRegistry::get(  'Attentions'     );
        $entriesTable        = TableRegistry::get(  'Entries'        );
        $peopleEntriesTable  = TableRegistry::get(  'PeopleEntries'  );

        //atencion existente
        $atencion = $this->Attentions->get($atId, ['contain'=>['People', 'Histories']]);
        
        //persona
        $persona = $atencion['person'];
        $persona = $this->StringManipulation->transformarStrings($persona->toArray(),['fecha_de_nacimiento']);
        $persona = new Person($persona);
        //historia de violencia
        $historia = $atencion['history'];
        $id_agresor = $historia['aggressor_id'];
        $historia = $this->StringManipulation->transformarStrings($historia->toArray(),['vencimiento_proteccion']);
        $historia = new History($historia);
        //agresor
        $agresor = $this->People->get($id_agresor);
        $agresor = $this->StringManipulation->transformarStrings($agresor->toArray(),['fecha_de_nacimiento']);
        $agresor = new Person($agresor);

        //para saber cuales redes de apoyo tiene actualmente una persona
        $advo = $this->PeopleAdvocacies->find('all',['conditions' => ['person_id' => $id]])
                                            ->select(['PeopleAdvocacies.tipo','PeopleAdvocacies.nombre' , 'PeopleAdvocacies.telefono']);
        
        //hijos 
        $iHijo = $this->People->find('all',['conditions' => ['num_familia' => $persona->num_familia, 'rol_familia'=>'hijo' ]])
                                            ->select('id');
        $iHijo = $iHijo->toArray();
        
        $this->set('advo',$advo);
        $this->set('persona', $persona);
        $this->set('histV',$historia);
        $this->set('agrsr',$agresor);
        
        $this->set('at',$atencion);
        
        if ($this->request->is('post')) {
            
            // //se recupera todas las personas e historias
            // $personas  = $this->request->data['Person'];
            // $historias = $this->request->data['History'];
            
            // //Persona, en formato DB
            // $log = $personas[0]; //obtiene la persona
            // $log = $this->StringManipulation->transformarArrays($log,['fecha_de_nacimiento']);//transforma todos los datos que sean arrays en string tokenizados, menos los que esten en el array del segundo parametro
            // if($log['direccion_oculta'] == 1){//si la direccion es confidencial
            //     $log['provincia'] = "Confidencial/No indica";
            //     $log['canton'   ] = "Confidencial/No indica";
            //     $log['direccion'] = "Confidencial/No indica";
            // }
            // $log['person_id'] = $id; //LOG
            // $log['es_agresor'] = '0'; //LOG
            // $logFinal = $this->People->newEntity($log);

            // //Agresor final, formato DB
            // // $agresorFinal = $personas[1];
            // // $agresorFinal = $this->StringManipulation->transformarArrays($agresorFinal,[]);
            // // $aggressor_id;
            // // if($at->aggressor == null){
            // //     $ag = $this->People->newEntity($agresorFinal);
            // //     //guardar ag ***************************************************
            // //     $agrP = $peopleTable->save($ag);
            // //     $datosAgresor = ['person_id'=>$agrP->id];
            // //     $agT = $this->Aggressors->newEntity($datosAgresor);
            // //     $agF = $this->$aggressorsTable->save($agF);
            // //     $aggressor_id = $agF->id;
            // //     //**************************************************************
            // // }else{
            // //     $aggressor_id = $aggressor_id;
            // // }
            
            // $diferencia = array_diff((array)json_decode(json_encode($logFinal,true)),(array)json_decode(json_encode($atencion->log,true)));
            // if(!empty($diferencia)){
                
            // }
            
            
            // //Historia de violencia, formato DB
            // // $historiaViolencia = $historias[0];
            // // $historiaViolencia = $this->StringManipulation->transformarArrays($historiaViolencia,['vencimiento_proteccion']);
            // // $historiaViolencia['person_id'] = $id;
            // // $historiaViolencia['aggressor_id'] = $at->$aggressor_id;
            
            // // //Atencion producida, sin contar intervenciones, ingresos y egresos, redes de apoyo e hijos
            // // $atencionFinal = ['log' => $log, 'history' => $historia, 'aggressor' => $agresorFinal];
            // // $at = $this->Attentions->patchEntity($atencion, $atencionFinal);

        }
        
    } 
     
     
     
    /**
     * El método se utiliza para guardar los campos de la vista add.ctp en la base de datos, y mostrar los
     * campos ya existentes al usuario. 
     * 
     * @param $id id de la persona en la base de datos
     * @author Jason Anchía
     * @author Juan Diego Araya
     */ 
    public function add($id)
    {
        
        //concatenar y desconcatenar strings con &
        $this->loadComponent('StringManipulation'); 

        //se cargan los modelos que se necesiten
        $this->loadModel('People');
        $this->loadModel('Logs');        
        $this->loadModel('Users');
        $this->loadModel('Aggressors');
        $this->loadModel('Histories');
        $this->loadModel('PeopleAdvocacies');
        $this->loadModel('InterventionsPeople');
        $this->loadModel('PeopleEntries');


        //se cargan las tablas
        $logsTable              = TableRegistry::get(  'Logs'            );
        $peopleTable            = TableRegistry::get(  'People'          );
        $aggressorsTable        = TableRegistry::get(  'Aggressors'      );
        $historiesTable         = TableRegistry::get(  'Histories'       );
        $attentionsTable        = TableRegistry::get(  'Attentions'      );
        $peopleEntriesTable     = TableRegistry::get(  'PeopleEntries'   );
        $peopleAdvocaciesTable  = TableRegistry::get(  'PeopleAdvocacies');

        //obtener una persona y dar formato a sus datos para llenar en el formulario
        $per = $peopleTable->get($id);
        $per->condicion_salud           = $this->StringManipulation->StringTokenedToArray($per->condicion_salud         );
        $per->condicion_aseguramiento   = $this->StringManipulation->StringTokenedToArray($per->condicion_aseguramiento );
        $per->adicciones                = $this->StringManipulation->StringTokenedToArray($per->adicciones              );
        $this->set('persona', $per);


        //para saber cuales redes de apoyo tiene actualmente una persona
        $advo = $this->PeopleAdvocacies->find('all',['conditions' => ['person_id' => $id]])
                                            ->select(['PeopleAdvocacies.tipo','PeopleAdvocacies.nombre' , 'PeopleAdvocacies.telefono']);
        $this->set('advo',$advo);
        
        //hijos 
        $iHijo = $this->People->find('all',['conditions' => ['num_familia' => $per->num_familia, 'rol_familia'=>'hijo' ]])
                              ->select('id');
                              
        $iHijo = $iHijo->toArray();
        
        $this->set('histV',new History());
        $this->set('agrsr',new Person());

        if ($this->request->is('post')) {
            $this->set('data',$this->request->data);
            //se recupera todas las personas e historias
            $personas  = $this->request->data['Person' ];
            $historias = $this->request->data['History'];
            
            //cambio de todo en persona para poder guardarlo en la DB
            $persona = $personas[0]; //obtiene la persona
            $persona = $this->StringManipulation->transformarArrays($persona,['fecha_de_nacimiento']);//transforma todos los datos que sean arrays en string tokenizados, menos los que esten en el array del segundo parametro
            
            if($persona['direccion_oculta'] == 1){//si la direccion es confidencial
                $persona['provincia'] = "Confidencial/No indica";
                $persona['canton'   ] = "Confidencial/No indica";
                $persona['direccion'] = "Confidencial/No indica";
            }
            $persona['es_agresor'] = 0;
            $per = $this->People->patchEntity($per, $persona);
            
            //cambio en agressors para formato DB
            $agresor = $personas[1];
            $agresor = $this->StringManipulation->transformarArrays($agresor,[]);
            $agresor['es_agresor'] = 1;
            $ag      = $this->People->newEntity($agresor);
            
            $pingresos = $this->request->data['PeopleEntry'];
            
            //historia de violencia de la agredida
            $historiaViolencia = $historias[0];
            $historiaViolencia = $this->StringManipulation->transformarArrays($historiaViolencia,['vencimiento_proteccion']);
            $historiaViolencia['person_id'] = $id;
            if($historiaViolencia['antecedente_legal'] != 'Sí'){
                $historiaViolencia['antecedente_legal_cuales'] = '';
            }
            /************************ GUARDAR DATOS ***************************/
            
            
            $aggressor_id; //id del agresor para los saves posteriores
            $attention_id; //id de atencino para los saves posteriores
            //guarda agredida, agresor, historia y atencion
            $guardado = true; //condicion de parada para el mensaje de error
     
            if ($guardado = $guardado && ($pt = $peopleTable->save($per)) && ($agrP = $peopleTable->save($ag)) ) {
                //datos de la tabla agresor
                $aggressor_id = $agrP->id;
                $historiaViolencia['aggressor_id'] = $aggressor_id;
                $hv = $this->Histories->newEntity($historiaViolencia);

                if ($guardado = $guardado && $hstTabla = $historiesTable->save($hv)) {
                    $userID   = $this->Auth->user('id');
                    $location = $this->Users->find('all',['conditions' => ['Users.id' => $userID] ])
                                                ->select(['Locations.ubicacion'])->contain('Locations');
                    
                    $location = $location->toArray();
                    $location = $location[0]['Locations']['ubicacion'];
                    //datos de la atencion que se genera
                    $datosAtencion = [
                      'person_id'    => $pt->id      ,
                      'history_id'   => $hstTabla->id, 
                      'user_id'      => $userID      , 
                      'tipo'         => $location    ,
                    ]; 
                    
                    $atn = $this->Attentions->newEntity($datosAtencion);
                    if ($guardado = $guardado && $atencion = $attentionsTable->save($atn) ) {
                        $attention_id = $atencion->id;
                    }
                }
            } 
            
            for($j = 0; $j < 2; $j++){
                $strTipo = $pingresos[$j]['tipo_ing_eg'];
                if($j == 0){
                    $pingresos[$j] = $this->StringManipulation->transformarArrays($pingresos[$j],['fecha_accion']);
                    
                    if($strTipo == "Traslado CEAAM"){
                        $pingresos[$j]['tipo_ing_eg'] = $strTipo." ".$pingresos[$j]['ceaam_traslado'];
                    }
                    else if($strTipo == "Reingreso CEAAM"){
                        $pingresos[$j]['tipo_ing_eg'] = $strTipo." ".$pingresos[$j]['ceaam_reingreso'];
                    }
                    $pingresos[$j]['tipo_accion'] = 'Ingreso';
                
                }else{
                    if($this->request->data['dextranjero'] == 1){
                        $pingresos[$j]['provincia_destino' ] = "Extranjero";
                        $pingresos[$j]['canton_destino'    ] = "Extranjero";
                    }
                    
                    if($pingresos[$j]['direccion_oculta'] == 1){
                        $pingresos[$j]['provincia_destino' ] = "Confidencial/No indica";
                        $pingresos[$j]['canton_destino'    ] = "Confidencial/No indica";
                        $pingresos[$j]['destino_extranjero'] = "Confidencial/No indica";
                    }
                    if($strTipo == "Traslado CEAAM"){
                        $pingresos[$j]['tipo_ing_eg'] = $strTipo." ".$pingresos[$j]['ceaam_traslado'];
                    }
                    $pingresos[$j]['tipo_accion'] = 'Egreso';
                }
                $pingresos[$j]['attention_id']  = $attention_id;
                $pingresos[$j]['person_id'   ]  = $id;
                $pi = $this->PeopleEntries->newEntity($pingresos[$j]);
                ($guardado = $guardado && $peopleEntriesTable->save($pi));
            }
            
            //Guardar redes de apoyo
            $redes = $this->request->data['PeopleAdvocacy'];
            $redes = array_slice($redes, $advo->count());
            if(!empty($redes)){
                foreach ($redes as $r) {
                    $r['person_id'] = $id;
                    $r['attention_id'] = $attention_id;
                    $redA = $this->PeopleAdvocacies->newEntity($r);
                    ($guardado = $guardado && $peopleAdvocaciesTable->save($redA));
                }
            }

            
            //guarda los hijos y su historia de violencia
            $i = 1;
            foreach($iHijo as $h){
                $datosHijo = $peopleTable->get($h->id);
                if ( $datosHijo == null ) {
                    debug("sail hatan");
                }
                
                $hijo = $this->People->patchEntity($datosHijo, $personas['Hijo'.$i]);
            // 
                $historiaViolenciaHijo = $historias[('Hijo'.$i)];
                $historiaViolenciaHijo = $this->StringManipulation->transformarArrays($historiaViolenciaHijo,[]);
                $historiaViolenciaHijo['person_id']    = $h->id;
                $historiaViolenciaHijo['aggressor_id'] = $aggressor_id;
                $hstHijo = $this->Histories->newEntity($historiaViolenciaHijo);
            // 
                ($guardado = $guardado && $peopleTable->save($hijo) && $historiesTable->save($hstHijo));
                $i++;
            }
            
            // --------------------------------------------------
            $intervP = $this->request->data['InterventionsPerson'];
            //$interv  = $this->request->data['Interventions'];

            foreach ($intervP as $iv) { 
                if ($iv['options'] != '' ) {

                    $iv = $this->StringManipulation->transformarArrays($iv,[]);

                    $itv = $this->InterventionsPeople->newEntity(  );
                    $itv->person_id         = $per->id;
                    //$itv->attention_id      = $attention_id ; // AYAYYAYAYAAYYAYAYYAYAYYAYAYAYA
                    $itv = $this->InterventionsPeople->patchEntity($itv, $iv );
                    // $this->InterventionsPeople->save($itv);
                    //debug($iv);
                }
            }

            
            if ($guardado) {
                $this->Flash->success(__('Guardado.'));
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error(__('Error al guardar datos.'));    
            }
             
        }
    }

    /**
     * Configuration for components in general is 
     * usually done via loadComponent()
     * Some examples of components requiring configuration are Authentication and Cookie. 
     */ 
    public function initialize(){
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }

   
    

}
