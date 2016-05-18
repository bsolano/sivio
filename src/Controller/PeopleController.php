<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * People Controller
 *
 * @property \App\Model\Table\PeopleTable $People
 * @property \App\Model\Table\GroupsTable $Groups
 */
class PeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Histories']
        ];
        $people = $this->paginate($this->People);
        
        $session = $this->request->session();
        $user_group_id = $session->read('Auth.User.group_id');
        $group_name = $this->Groups->get($user_group_id);
        $this->set('group_name', $group_name);
        
        $this->set(compact('people'));
        $this->set('_serialize', ['people']);
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['Histories', 'Interventions', 'Advocacies', 'Entries', 'Families', 'Users', 'Transfers', 'Aggressors', 'Consultations', 'ExternalReferences', 'Followups', 'InternalReferences']
        ]);

        $this->set('person', $person);
        $this->set('_serialize', ['person']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->People->newEntity();
        if ($this->request->is('post')) {
            $person = $this->People->patchEntity($person, $this->request->data);
            if ($this->People->save($person)) {
                $this->Flash->success(__('The person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $histories = $this->People->Histories->find('list', ['limit' => 200]);
        $interventions = $this->People->Interventions->find('list', ['limit' => 200]);
        $advocacies = $this->People->Advocacies->find('list', ['limit' => 200]);
        $entries = $this->People->Entries->find('list', ['limit' => 200]);
        $families = $this->People->Families->find('list', ['limit' => 200]);
        $users = $this->People->Users->find('list', ['limit' => 200]);
        $this->set(compact('person', 'histories', 'interventions', 'advocacies', 'entries', 'families', 'users'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['Interventions', 'Advocacies', 'Entries', 'Families', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $person = $this->People->patchEntity($person, $this->request->data);
            if ($this->People->save($person)) {
                $this->Flash->success(__('The person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $histories = $this->People->Histories->find('list', ['limit' => 200]);
        $interventions = $this->People->Interventions->find('list', ['limit' => 200]);
        $advocacies = $this->People->Advocacies->find('list', ['limit' => 200]);
        $entries = $this->People->Entries->find('list', ['limit' => 200]);
        $families = $this->People->Families->find('list', ['limit' => 200]);
        $users = $this->People->Users->find('list', ['limit' => 200]);
        $this->set(compact('person', 'histories', 'interventions', 'advocacies', 'entries', 'families', 'users'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->People->get($id);
        if ($this->People->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * records_search method
     * Devuelve los resultados encontrados dado un keyword para buscar
     */ 
    public function recordsSearch() {
        $keyword = $this->request->query('keyword');
        $people = $this->People->find_record($keyword);
        
        
        if($this->request->is('Ajax')) {
            //$this->disableCache(); // Como se hace en cake 3?
            $this->set(['people' => $people ]);
            //$this->render('records_search', 'ajax');
            //$this->RequestHandler->renderAs($this, 'html');

        } else { // Para que funcione la vista de HTML, JSON, etc.
         
            $this->set(['people' => $people ]);

            //$this->set(compact('people'));
            //$this->set('_serialize', ['people']);
        }
    }
    
    /*
    * action
    * Según la accion seleccionada cuando se tiene una usuaria se debe de enviar distintos datos.
    */ 
    public function action() {
        $keyword = $_POST['usuaria'];
        $person = $this->People->get($keyword);
        
        $this->set(['person' => $person]);
    }
    
     /**
     * records_search method
     * Busca las atenciones de la persona solicitada.
     */ 
    public function summaryview($person = null){
        //$atentions = [1,2,3,4,5];
        $years = array();
        $this->loadModel('Evaluations'); //Carga el modelo Evaluation en la base
        $eva = $this->Evaluations->find('all', [
        'conditions' => ['Evaluations.people_id' => $person] 
        ]); //Busca todas las evaluaciones con el id de la persona seleccionada anteriormente.
        $dates = $this->Evaluations->find('all', [
        'conditions' => ['Evaluations.people_id' => $person], 
        'fields' => ['fecha_inicio']
        ]);
        foreach ($dates as $date){
            if(!in_array($date->fecha_inicio->format('Y'), $years)){
                array_push($years,$date->fecha_inicio->format('Y'));
            }
        }
        
        $person_data = $this->People->get($person);
        $this->set(['atentions' => $eva]);
        $this->set(['years' => $years]);
        $this->set(['person' => $person_data]);
    }
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }
    
    public function atencion($id = null){
        $query = $this->People->find('all',['conditions' => ['People.id'  => $id]]);
        $this->set('persona', $query);
        
          if ($this->request->is('post')) {
        }
    }
}
