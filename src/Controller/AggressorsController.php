<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aggressors Controller
 *
 * @property \App\Model\Table\AggressorsTable $Aggressors
 */
class AggressorsController extends AppController
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
        $aggressors = $this->paginate($this->Aggressors);

        $this->set(compact('aggressors'));
        $this->set('_serialize', ['aggressors']);
    }

    /**
     * View method
     *
     * @param string|null $id Aggressor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aggressor = $this->Aggressors->get($id, [
            'contain' => ['People']
        ]);

        $this->set('aggressor', $aggressor);
        $this->set('_serialize', ['aggressor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aggressor = $this->Aggressors->newEntity();
        if ($this->request->is('post')) {
            $aggressor = $this->Aggressors->patchEntity($aggressor, $this->request->data);
            if ($this->Aggressors->save($aggressor)) {
                $this->Flash->success(__('The aggressor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aggressor could not be saved. Please, try again.'));
            }
        }
        $people = $this->Aggressors->People->find('list', ['limit' => 200]);
        $this->set(compact('aggressor', 'people'));
        $this->set('_serialize', ['aggressor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aggressor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aggressor = $this->Aggressors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aggressor = $this->Aggressors->patchEntity($aggressor, $this->request->data);
            if ($this->Aggressors->save($aggressor)) {
                $this->Flash->success(__('The aggressor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aggressor could not be saved. Please, try again.'));
            }
        }
        $people = $this->Aggressors->People->find('list', ['limit' => 200]);
        $this->set(compact('aggressor', 'people'));
        $this->set('_serialize', ['aggressor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aggressor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aggressor = $this->Aggressors->get($id);
        if ($this->Aggressors->delete($aggressor)) {
            $this->Flash->success(__('The aggressor has been deleted.'));
        } else {
            $this->Flash->error(__('The aggressor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
