<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Records Controller
 *
 * @property \App\Model\Table\RecordsTable $Records
 */
class RecordsController extends AppController
{

     /**
      * index method
      * Busca los datos de la usuaria y los muestra en el expediente.
      * @param string|null $id Person id.
      * @return datos usuaria
      * @author DavidHine
     
      */ 
    public function index($id = null)
    {
        //acá recupero a la usuaria y envío los datos a la vista 
         $this->loadModel('People');
         $this->loadModel('Attentions');
         $this->loadModel('Consultations');
         $campos = array('People.id' => $id);
                // Elimina los campos en blanco del query
                
                $opciones= array_filter($campos);
                
                $conditions=array('conditions'=> (array($opciones)));
                //$c=array('conditions'=> (array(array('People.nacionalidad' => 'mexicana'))));
           
                //se construye el query
	            
	           // $query = $this->People->find('all',$conditions);
	            $query = $this->paginate($this->People->find('all',$conditions)); 
	            $this->set('persona', $query);


                //Consulta atenciones 
	            $logs = $this->Attentions->find('all')->select('Logs.person_id')->contain(['Logs']);
	            $this->set('logs', $logs);
	            
	            $consult = $this->Consultations->find('all');
	             $this->set('con', $consult);
	            
	            ///////////////////////////////////////////// 
	          //  $atenciones = $this->Attentions->find('all');   
	            
                $p_id = array();
                $arr = $logs->toArray();
             
                foreach($arr as $l){
                   if($l['Logs']['person_id'] == $id){
                        array_push($p_id, $l);
                   }
                }
                $p_id = array_unique($p_id);
                $this->set('pi', $id);
             //    $this->set('att', $atenciones);
         //415289720 satanas
    }

    /**
     * View method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => ['Transfers']
        ]);

        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $record = $this->Records->newEntity();
        if ($this->request->is('post')) {
            $record = $this->Records->patchEntity($record, $this->request->data);
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The record could not be saved. Please, try again.'));
            }
        }
        $transfers = $this->Records->Transfers->find('list', ['limit' => 200]);
        $this->set(compact('record', 'transfers'));
        $this->set('_serialize', ['record']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|void Redirige exitosamente a edit, si no renderiza view .
     * @throws \Cake\Network\Exception\NotFoundException When record not found
     * @author DavidHine
     */
     
    public function edit($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $record = $this->Records->patchEntity($record, $this->request->data);
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The record could not be saved. Please, try again.'));
            }
        }
        $transfers = $this->Records->Transfers->find('list', ['limit' => 200]);
        $this->set(compact('record', 'transfers'));
        $this->set('_serialize', ['record']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->Records->get($id);
        if ($this->Records->delete($record)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
      public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }
    
    
}
