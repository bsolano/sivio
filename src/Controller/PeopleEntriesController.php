<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleEntries Controller
 *
 * @property \App\Model\Table\PeopleEntriesTable $PeopleEntries
 */
class PeopleEntriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Entries']
        ];
        $peopleEntries = $this->paginate($this->PeopleEntries);

        $this->set(compact('peopleEntries'));
        $this->set('_serialize', ['peopleEntries']);
    }

    /**
     * View method
     *
     * @param string|null $id People Entry id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleEntry = $this->PeopleEntries->get($id, [
            'contain' => ['People', 'Entries']
        ]);

        $this->set('peopleEntry', $peopleEntry);
        $this->set('_serialize', ['peopleEntry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleEntry = $this->PeopleEntries->newEntity();
        if ($this->request->is('post')) {
            $peopleEntry = $this->PeopleEntries->patchEntity($peopleEntry, $this->request->data);
            if ($this->PeopleEntries->save($peopleEntry)) {
                $this->Flash->success(__('The people entry has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people entry could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleEntries->People->find('list', ['limit' => 200]);
        $entries = $this->PeopleEntries->Entries->find('list', ['limit' => 200]);
        $this->set(compact('peopleEntry', 'people', 'entries'));
        $this->set('_serialize', ['peopleEntry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Entry id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleEntry = $this->PeopleEntries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleEntry = $this->PeopleEntries->patchEntity($peopleEntry, $this->request->data);
            if ($this->PeopleEntries->save($peopleEntry)) {
                $this->Flash->success(__('The people entry has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people entry could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleEntries->People->find('list', ['limit' => 200]);
        $entries = $this->PeopleEntries->Entries->find('list', ['limit' => 200]);
        $this->set(compact('peopleEntry', 'people', 'entries'));
        $this->set('_serialize', ['peopleEntry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Entry id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleEntry = $this->PeopleEntries->get($id);
        if ($this->PeopleEntries->delete($peopleEntry)) {
            $this->Flash->success(__('The people entry has been deleted.'));
        } else {
            $this->Flash->error(__('The people entry could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
