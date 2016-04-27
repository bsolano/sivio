<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternalReferences Controller
 *
 * @property \App\Model\Table\InternalReferencesTable $InternalReferences
 */
class InternalReferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Users']
        ];
        $internalReferences = $this->paginate($this->InternalReferences);

        $this->set(compact('internalReferences'));
        $this->set('_serialize', ['internalReferences']);
    }

    /**
     * View method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internalReference = $this->InternalReferences->get($id, [
            'contain' => ['People', 'Users']
        ]);

        $this->set('internalReference', $internalReference);
        $this->set('_serialize', ['internalReference']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internalReference = $this->InternalReferences->newEntity();
        if ($this->request->is('post')) {
            $internalReference = $this->InternalReferences->patchEntity($internalReference, $this->request->data);
            if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('The internal reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->InternalReferences->People->find('list', ['limit' => 200]);
        $users = $this->InternalReferences->Users->find('list', ['limit' => 200]);
        $this->set(compact('internalReference', 'people', 'users'));
        $this->set('_serialize', ['internalReference']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internalReference = $this->InternalReferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internalReference = $this->InternalReferences->patchEntity($internalReference, $this->request->data);
            if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('The internal reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->InternalReferences->People->find('list', ['limit' => 200]);
        $users = $this->InternalReferences->Users->find('list', ['limit' => 200]);
        $this->set(compact('internalReference', 'people', 'users'));
        $this->set('_serialize', ['internalReference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internalReference = $this->InternalReferences->get($id);
        if ($this->InternalReferences->delete($internalReference)) {
            $this->Flash->success(__('The internal reference has been deleted.'));
        } else {
            $this->Flash->error(__('The internal reference could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
