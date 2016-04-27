<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InterventionsPeople Controller
 *
 * @property \App\Model\Table\InterventionsPeopleTable $InterventionsPeople
 */
class InterventionsPeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Interventions', 'People']
        ];
        $interventionsPeople = $this->paginate($this->InterventionsPeople);

        $this->set(compact('interventionsPeople'));
        $this->set('_serialize', ['interventionsPeople']);
    }

    /**
     * View method
     *
     * @param string|null $id Interventions Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interventionsPerson = $this->InterventionsPeople->get($id, [
            'contain' => ['Interventions', 'People']
        ]);

        $this->set('interventionsPerson', $interventionsPerson);
        $this->set('_serialize', ['interventionsPerson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interventionsPerson = $this->InterventionsPeople->newEntity();
        if ($this->request->is('post')) {
            $interventionsPerson = $this->InterventionsPeople->patchEntity($interventionsPerson, $this->request->data);
            if ($this->InterventionsPeople->save($interventionsPerson)) {
                $this->Flash->success(__('The interventions person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The interventions person could not be saved. Please, try again.'));
            }
        }
        $interventions = $this->InterventionsPeople->Interventions->find('list', ['limit' => 200]);
        $people = $this->InterventionsPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('interventionsPerson', 'interventions', 'people'));
        $this->set('_serialize', ['interventionsPerson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Interventions Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interventionsPerson = $this->InterventionsPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interventionsPerson = $this->InterventionsPeople->patchEntity($interventionsPerson, $this->request->data);
            if ($this->InterventionsPeople->save($interventionsPerson)) {
                $this->Flash->success(__('The interventions person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The interventions person could not be saved. Please, try again.'));
            }
        }
        $interventions = $this->InterventionsPeople->Interventions->find('list', ['limit' => 200]);
        $people = $this->InterventionsPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('interventionsPerson', 'interventions', 'people'));
        $this->set('_serialize', ['interventionsPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Interventions Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interventionsPerson = $this->InterventionsPeople->get($id);
        if ($this->InterventionsPeople->delete($interventionsPerson)) {
            $this->Flash->success(__('The interventions person has been deleted.'));
        } else {
            $this->Flash->error(__('The interventions person could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
