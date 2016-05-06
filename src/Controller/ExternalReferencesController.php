<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExternalReferences Controller
 *
 * @property \App\Model\Table\ExternalReferencesTable $ExternalReferences
 */
class ExternalReferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People']
        ];
        $externalReferences = $this->paginate($this->ExternalReferences);

        $this->set(compact('externalReferences'));
        $this->set('_serialize', ['externalReferences']);
    }

 

    /**
     * View method
     *
     * @param string|null $id External Reference id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $externalReference = $this->ExternalReferences->get($id, [
            'contain' => ['People']
        ]);

        $this->set('externalReference', $externalReference);
        $this->set('_serialize', ['externalReference']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $externalReference = $this->ExternalReferences->newEntity();
        if ($this->request->is('post')) {
            $externalReference = $this->ExternalReferences->patchEntity($externalReference, $this->request->data);
            if ($this->ExternalReferences->save($externalReference)) {
                $this->Flash->success(__('The external reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The external reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->ExternalReferences->People->find('list', ['limit' => 200]);
        $this->set(compact('externalReference', 'people'));
        $this->set('_serialize', ['externalReference']);
    }

    /**
     * Edit method
     *
     * @param string|null $id External Reference id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $externalReference = $this->ExternalReferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $externalReference = $this->ExternalReferences->patchEntity($externalReference, $this->request->data);
            if ($this->ExternalReferences->save($externalReference)) {
                $this->Flash->success(__('The external reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The external reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->ExternalReferences->People->find('list', ['limit' => 200]);
        $this->set(compact('externalReference', 'people'));
        $this->set('_serialize', ['externalReference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id External Reference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $externalReference = $this->ExternalReferences->get($id);
        if ($this->ExternalReferences->delete($externalReference)) {
            $this->Flash->success(__('The external reference has been deleted.'));
        } else {
            $this->Flash->error(__('The external reference could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    
    public function initialize()
    {
        parent::initialize();
    
        $this->Auth->allow();
      
    }
    
     public function pdf(){
        //$this->layout='ajax';
        $this->viewBuilder()->layout('ajax');
        $this->response->type('pdf');
        
    } 
      // class to test pdf
    public function test()
    {

    }
   
}
