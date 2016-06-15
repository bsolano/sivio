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
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        //acá recupero a la usuaria y envío los datos a la vista 
         $this->loadModel('People');
         $campos = array('People.identificacion' => $id);
                
                // Elimina los campos en blanco del query
                
                $opciones= array_filter($campos);
                
                $conditions=array('conditions'=> (array($opciones)));
                //$c=array('conditions'=> (array(array('People.nacionalidad' => 'mexicana'))));
           
                //se construye el query
	            
	           // $query = $this->People->find('all',$conditions);
	            $query = $this->paginate($this->People->find('all',$conditions)); 
	             $this->set('persona', $query);
	             
	             
        
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
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
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
