<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Followups Controller
 *
 * @property \App\Model\Table\FollowupsTable $Followups
 */
class FollowupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Advocacies']
        ];
        $followups = $this->paginate($this->Followups);

        $this->set(compact('followups'));
        $this->set('_serialize', ['followups']);
    }

    /**
     * View method
     *
     * @param string|null $id Followup id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $followup = $this->Followups->get($id, [
            'contain' => ['People', 'Advocacies', 'Users']
        ]);

        $this->set('followup', $followup);
        $this->set('_serialize', ['followup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $followup = $this->Followups->newEntity();
        if ($this->request->is('post')) {
            $followup = $this->Followups->patchEntity($followup, $this->request->data);
            if ($this->Followups->save($followup)) {
                $this->Flash->success(__('The followup has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The followup could not be saved. Please, try again.'));
            }
        }
        $people = $this->Followups->People->find('list', ['limit' => 200]);
        $advocacies = $this->Followups->Advocacies->find('list', ['limit' => 200]);
        $users = $this->Followups->Users->find('list', ['limit' => 200]);
        $this->set(compact('followup', 'people', 'advocacies', 'users'));
        $this->set('_serialize', ['followup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Followup id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $followup = $this->Followups->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $followup = $this->Followups->patchEntity($followup, $this->request->data);
            if ($this->Followups->save($followup)) {
                $this->Flash->success(__('The followup has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The followup could not be saved. Please, try again.'));
            }
        }
        $people = $this->Followups->People->find('list', ['limit' => 200]);
        $advocacies = $this->Followups->Advocacies->find('list', ['limit' => 200]);
        $users = $this->Followups->Users->find('list', ['limit' => 200]);
        $this->set(compact('followup', 'people', 'advocacies', 'users'));
        $this->set('_serialize', ['followup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Followup id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $followup = $this->Followups->get($id);
        if ($this->Followups->delete($followup)) {
            $this->Flash->success(__('The followup has been deleted.'));
        } else {
            $this->Flash->error(__('The followup could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
