<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * People Controller
 *
 * @property \App\Model\Table\PeopleTable $People
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
        $this->loadModel('Groups');
        $this->paginate = [
            'contain' => ['Histories']
        ];
        $people = $this->paginate($this->People);
        
        $session = $this->request->session();
        $user_group_id = $session->read('Auth.User.group_id');
        $group = $this->Groups->get($user_group_id);
        $this->set('group_name', $group->name);
        
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
        $this->loadModel('Groups');
        //Grupo actual
        $session = $this->request->session();
        $user_group_id = $session->read('Auth.User.group_id');
        $group = $this->Groups->get($user_group_id);
        $this->set('group_name', $group->name);
        $person = $this->People->get($id, [
            'contain' => ['Histories', /*'Interventions', 'Advocacies', 'Entries', 'Families',*/ 'Users', 'Transfers', 'Aggressors', 'Consultations', 'ExternalReferences', 'Followups', 'InternalReferences']
        ]);
        
        $person->adicciones = $this->StringManipulation->StringTokenedToArray($person->adicciones);
        $person->condicion_salud = $this->StringManipulation->StringTokenedToArray($person->condicion_salud);

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
            $data = $this->request->data;
            $data = $this->StringManipulation->transformarArrays($data,['fecha_de_nacimiento']);
            $person = $this->People->patchEntity($person, $data);
            $person->genero = 'F';
            $person->rol_familia = 'Agredida';
            if ($this->People->save($person)) {
                $this->Flash->success(__('La información ha sido guardada satisfactoriamente.'));
                return $this->redirect(['action' => 'view', $person->id]);
            } else {
                $this->Flash->error(__('No ha sido posible guardar la información, inténtelo nuevamente.'));
            }
        }
        // $histories = $this->People->Histories->find('list', ['limit' => 200]);
        // $interventions = $this->People->InterventionsPeople->find('list', ['limit' => 200]);
        // $advocacies = $this->People->PeopleAdvocacies->find('list', ['limit' => 200]);
        // $entries = $this->People->PeopleEntries->find('list', ['limit' => 200]);
        // //$families = $this->People->Families->find('list', ['limit' => 200]);
        // $users = $this->People->Users->find('list', ['limit' => 200]);
        $this->set(compact('person', 'histories', 'interventions_people', 'people_advocacies', 'people_entries', 'users'));
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
            'contain' => [ /*'Interventions', 'Advocacies', 'Entries', 'Families',*/ 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            $data = $this->StringManipulation->transformarArrays($data,['fecha_de_nacimiento']);
            $person = $this->People->patchEntity($person, $data);
            
            if ($person->direccion_oculta == 1) {
                $person->provincia = "Oculto";
                $person->canton = "Oculto";
                $person->direccion = "Oculto";
            }
            
            if ($this->People->save($person)) {
                $this->Flash->success(__('La información fue actualizada satisfactoriamente.'));
                return $this->redirect(['action' => 'view', $person->id]);
            } else {
                $this->Flash->error('No se pudo actualizar la información, inténtelo nuevamente.');
            /*    $this->Flash->success(__('Datos Actualizados.'));
                return $this->redirect(['controller' => 'Records','action' => 'index']);
            } else {
                $this->Flash->error(__('Error, por favor intente de nuevo.')); */
            }
        }
        
        $person->adicciones = $this->StringManipulation->StringTokenedToArray($person->adicciones);
        $person->condicion_salud = $this->StringManipulation->StringTokenedToArray($person->condicion_salud);
        
        $histories = $this->People->Histories->find('list', ['limit' => 200]);
        //$interventions = $this->People->Interventions->find('list', ['limit' => 200]);
        //$advocacies = $this->People->Advocacies->find('list', ['limit' => 200]);
        //$entries = $this->People->Entries->find('list', ['limit' => 200]);
        //$families = $this->People->Families->find('list', ['limit' => 200]);
        $users = $this->People->Users->find('list', ['limit' => 200]);
        $this->set(compact('person', /*'histories', 'interventions', 'advocacies', 'entries', 'families',*/ 'users'));
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
            $this->Flash->error('La persona fue eliminada');
        } else {
            $this->Flash->error('No se pudo eliminar la usuaria, inténtelo nuevamente.');
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
      * summaryview method
      * Busca las atenciones y evaluaciones de la persona solicitada, por medio del id enviado.
      * @param string|null $id Person id.
      * @return void
      * @author Brandon Madrigal B33906
      * @author Erick
      */ 
    public function summaryview($person = null){
        //$atentions = [1,2,3,4,5];
        $years = array();
        $this->loadModel('Evaluations'); //Carga el modelo Evaluation en la base
        $this->loadModel('Attentions'); //Carga el modelo Attention en la base
        $this->loadModel('Logs');

        $deOCe = $this->Attentions->find();
        $deOCe->matching('Logs', function ($q) use ($person) {
        return $q->where(['Logs.person_id' => $person]);
         });
        
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
        foreach ($deOCe as $dateDeOCe){
            if(!in_array($dateDeOCe->created->format('Y'), $years)){
                array_push($years,$dateDeOCe->created->format('Y'));
            }
        }
        arsort($years);
        $person_data = $this->People->get($person);
        $this->set(['atentions' => $eva]);
        $this->set(['years' => $years]);
        $this->set(['person' => $person_data]);
        $this->set(['deOCes' => $deOCe]);
    }
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
        $this->loadComponent('StringManipulation');
    }
    
}