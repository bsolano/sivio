<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Interventions Controller
 *
 * @property \App\Model\Table\InterventionsTable $Interventions
 */
class InterventionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $interventions = $this->paginate($this->Interventions);

        $this->set(compact('interventions'));
        $this->set('_serialize', ['interventions']);
    }

    /**
     * View method
     *
     * @param string|null $id Intervention id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $intervention = $this->Interventions->get($id, [
            'contain' => ['People']
        ]);

        $this->set('intervention', $intervention);
        $this->set('_serialize', ['intervention']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $intervention = $this->Interventions->newEntity();
        if ($this->request->is('post')) {
            $intervention = $this->Interventions->patchEntity($intervention, $this->request->data);
            if ($this->Interventions->save($intervention)) {
                $this->Flash->success(__('The intervention has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The intervention could not be saved. Please, try again.'));
            }
        }
        $people = $this->Interventions->People->find('list', ['limit' => 200]);
        $this->set(compact('intervention', 'people'));
        $this->set('_serialize', ['intervention']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Intervention id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $intervention = $this->Interventions->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intervention = $this->Interventions->patchEntity($intervention, $this->request->data);
            if ($this->Interventions->save($intervention)) {
                $this->Flash->success(__('The intervention has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The intervention could not be saved. Please, try again.'));
            }
        }
        $people = $this->Interventions->People->find('list', ['limit' => 200]);
        $this->set(compact('intervention', 'people'));
        $this->set('_serialize', ['intervention']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Intervention id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $intervention = $this->Interventions->get($id);
        if ($this->Interventions->delete($intervention)) {
            $this->Flash->success(__('The intervention has been deleted.'));
        } else {
            $this->Flash->error(__('The intervention could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
