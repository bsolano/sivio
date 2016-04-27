<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FollowupsUsers Controller
 *
 * @property \App\Model\Table\FollowupsUsersTable $FollowupsUsers
 */
class FollowupsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Followups', 'Users']
        ];
        $followupsUsers = $this->paginate($this->FollowupsUsers);

        $this->set(compact('followupsUsers'));
        $this->set('_serialize', ['followupsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Followups User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $followupsUser = $this->FollowupsUsers->get($id, [
            'contain' => ['Followups', 'Users']
        ]);

        $this->set('followupsUser', $followupsUser);
        $this->set('_serialize', ['followupsUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $followupsUser = $this->FollowupsUsers->newEntity();
        if ($this->request->is('post')) {
            $followupsUser = $this->FollowupsUsers->patchEntity($followupsUser, $this->request->data);
            if ($this->FollowupsUsers->save($followupsUser)) {
                $this->Flash->success(__('The followups user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The followups user could not be saved. Please, try again.'));
            }
        }
        $followups = $this->FollowupsUsers->Followups->find('list', ['limit' => 200]);
        $users = $this->FollowupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('followupsUser', 'followups', 'users'));
        $this->set('_serialize', ['followupsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Followups User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $followupsUser = $this->FollowupsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $followupsUser = $this->FollowupsUsers->patchEntity($followupsUser, $this->request->data);
            if ($this->FollowupsUsers->save($followupsUser)) {
                $this->Flash->success(__('The followups user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The followups user could not be saved. Please, try again.'));
            }
        }
        $followups = $this->FollowupsUsers->Followups->find('list', ['limit' => 200]);
        $users = $this->FollowupsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('followupsUser', 'followups', 'users'));
        $this->set('_serialize', ['followupsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Followups User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $followupsUser = $this->FollowupsUsers->get($id);
        if ($this->FollowupsUsers->delete($followupsUser)) {
            $this->Flash->success(__('The followups user has been deleted.'));
        } else {
            $this->Flash->error(__('The followups user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
