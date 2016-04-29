<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultations Controller
 *
 * @property \App\Model\Table\ConsultationsTable $Consultations
 */
class ConsultationsController extends AppController
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
        $consultations = $this->paginate($this->Consultations);

        $this->set(compact('consultations'));
        $this->set('_serialize', ['consultations']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultation = $this->Consultations->get($id, [
            'contain' => ['People', 'Users']
        ]);

        $this->set('consultation', $consultation);
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultation = $this->Consultations->newEntity();
        if ($this->request->is('post')) {
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The consultation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consultation could not be saved. Please, try again.'));
            }
        }
        $people = $this->Consultations->People->find('list', ['limit' => 200]);
        $users = $this->Consultations->Users->find('list', ['limit' => 200]);
        $this->set(compact('consultation', 'people', 'users'));
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultation = $this->Consultations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The consultation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consultation could not be saved. Please, try again.'));
            }
        }
        $people = $this->Consultations->People->find('list', ['limit' => 200]);
        $users = $this->Consultations->Users->find('list', ['limit' => 200]);
        $this->set(compact('consultation', 'people', 'users'));
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultation = $this->Consultations->get($id);
        if ($this->Consultations->delete($consultation)) {
            $this->Flash->success(__('The consultation has been deleted.'));
        } else {
            $this->Flash->error(__('The consultation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function initialize()
    {
        parent::initialize();
    
        $this->Auth->allow();
    }
    
    public function summary($person = null) {
        $this->paginate = [
            'contain' => ['People', 'Users']
        ];
        $this->set('prueba', $person);
        $consultations = $this->paginate($this->Consultations->find('all', [ 'conditions' => ['Consultations.user_id' => $person]]));
        $this->set(compact('consultations'));
        $this->set('_serialize', ['consultations']);
    }
}
