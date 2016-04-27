<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleAdvocacies Controller
 *
 * @property \App\Model\Table\PeopleAdvocaciesTable $PeopleAdvocacies
 */
class PeopleAdvocaciesController extends AppController
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
        $peopleAdvocacies = $this->paginate($this->PeopleAdvocacies);

        $this->set(compact('peopleAdvocacies'));
        $this->set('_serialize', ['peopleAdvocacies']);
    }

    /**
     * View method
     *
     * @param string|null $id People Advocacy id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleAdvocacy = $this->PeopleAdvocacies->get($id, [
            'contain' => ['People', 'Advocacies']
        ]);

        $this->set('peopleAdvocacy', $peopleAdvocacy);
        $this->set('_serialize', ['peopleAdvocacy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleAdvocacy = $this->PeopleAdvocacies->newEntity();
        if ($this->request->is('post')) {
            $peopleAdvocacy = $this->PeopleAdvocacies->patchEntity($peopleAdvocacy, $this->request->data);
            if ($this->PeopleAdvocacies->save($peopleAdvocacy)) {
                $this->Flash->success(__('The people advocacy has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people advocacy could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleAdvocacies->People->find('list', ['limit' => 200]);
        $advocacies = $this->PeopleAdvocacies->Advocacies->find('list', ['limit' => 200]);
        $this->set(compact('peopleAdvocacy', 'people', 'advocacies'));
        $this->set('_serialize', ['peopleAdvocacy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Advocacy id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleAdvocacy = $this->PeopleAdvocacies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleAdvocacy = $this->PeopleAdvocacies->patchEntity($peopleAdvocacy, $this->request->data);
            if ($this->PeopleAdvocacies->save($peopleAdvocacy)) {
                $this->Flash->success(__('The people advocacy has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people advocacy could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleAdvocacies->People->find('list', ['limit' => 200]);
        $advocacies = $this->PeopleAdvocacies->Advocacies->find('list', ['limit' => 200]);
        $this->set(compact('peopleAdvocacy', 'people', 'advocacies'));
        $this->set('_serialize', ['peopleAdvocacy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Advocacy id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleAdvocacy = $this->PeopleAdvocacies->get($id);
        if ($this->PeopleAdvocacies->delete($peopleAdvocacy)) {
            $this->Flash->success(__('The people advocacy has been deleted.'));
        } else {
            $this->Flash->error(__('The people advocacy could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
