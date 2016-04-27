<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Advocacies Controller
 *
 * @property \App\Model\Table\AdvocaciesTable $Advocacies
 */
class AdvocaciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $advocacies = $this->paginate($this->Advocacies);

        $this->set(compact('advocacies'));
        $this->set('_serialize', ['advocacies']);
    }

    /**
     * View method
     *
     * @param string|null $id Advocacy id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $advocacy = $this->Advocacies->get($id, [
            'contain' => ['People', 'Evaluations', 'Followups']
        ]);

        $this->set('advocacy', $advocacy);
        $this->set('_serialize', ['advocacy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $advocacy = $this->Advocacies->newEntity();
        if ($this->request->is('post')) {
            $advocacy = $this->Advocacies->patchEntity($advocacy, $this->request->data);
            if ($this->Advocacies->save($advocacy)) {
                $this->Flash->success(__('The advocacy has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The advocacy could not be saved. Please, try again.'));
            }
        }
        $people = $this->Advocacies->People->find('list', ['limit' => 200]);
        $this->set(compact('advocacy', 'people'));
        $this->set('_serialize', ['advocacy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Advocacy id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $advocacy = $this->Advocacies->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $advocacy = $this->Advocacies->patchEntity($advocacy, $this->request->data);
            if ($this->Advocacies->save($advocacy)) {
                $this->Flash->success(__('The advocacy has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The advocacy could not be saved. Please, try again.'));
            }
        }
        $people = $this->Advocacies->People->find('list', ['limit' => 200]);
        $this->set(compact('advocacy', 'people'));
        $this->set('_serialize', ['advocacy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Advocacy id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $advocacy = $this->Advocacies->get($id);
        if ($this->Advocacies->delete($advocacy)) {
            $this->Flash->success(__('The advocacy has been deleted.'));
        } else {
            $this->Flash->error(__('The advocacy could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
