<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleFamilies Controller
 *
 * @property \App\Model\Table\PeopleFamiliesTable $PeopleFamilies
 */
class PeopleFamiliesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Families']
        ];
        $peopleFamilies = $this->paginate($this->PeopleFamilies);

        $this->set(compact('peopleFamilies'));
        $this->set('_serialize', ['peopleFamilies']);
    }

    /**
     * View method
     *
     * @param string|null $id People Family id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleFamily = $this->PeopleFamilies->get($id, [
            'contain' => ['People', 'Families']
        ]);

        $this->set('peopleFamily', $peopleFamily);
        $this->set('_serialize', ['peopleFamily']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleFamily = $this->PeopleFamilies->newEntity();
        if ($this->request->is('post')) {
            $peopleFamily = $this->PeopleFamilies->patchEntity($peopleFamily, $this->request->data);
            if ($this->PeopleFamilies->save($peopleFamily)) {
                $this->Flash->success(__('The people family has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people family could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleFamilies->People->find('list', ['limit' => 200]);
        $families = $this->PeopleFamilies->Families->find('list', ['limit' => 200]);
        $this->set(compact('peopleFamily', 'people', 'families'));
        $this->set('_serialize', ['peopleFamily']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Family id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleFamily = $this->PeopleFamilies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleFamily = $this->PeopleFamilies->patchEntity($peopleFamily, $this->request->data);
            if ($this->PeopleFamilies->save($peopleFamily)) {
                $this->Flash->success(__('The people family has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people family could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleFamilies->People->find('list', ['limit' => 200]);
        $families = $this->PeopleFamilies->Families->find('list', ['limit' => 200]);
        $this->set(compact('peopleFamily', 'people', 'families'));
        $this->set('_serialize', ['peopleFamily']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Family id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleFamily = $this->PeopleFamilies->get($id);
        if ($this->PeopleFamilies->delete($peopleFamily)) {
            $this->Flash->success(__('The people family has been deleted.'));
        } else {
            $this->Flash->error(__('The people family could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
