<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Consultations Controller
 * 
 * @property \App\Model\Table\ConsultationsTable $Consultations
 * @author Erick
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
            'contain' => ['Users', 'People']
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
     * @author Erick
     */
    public function view($id = null)
    {
        $this->loadModel('People');   
        $consultation = $this->Consultations->get($id, [
            'contain' => ['Users', 'People']
        ]);
        $references = $this->request->query('redirect');
        
        $person = $this->People->get($consultation->person_id);
        $consultation->situacion_enfrentada = $this->StringManipulation->StringTokenedToArray($consultation->situacion_enfrentada);
        $this->set('consultation', $consultation);
        $this->set('_serialize', ['consultation']);
        $this->set('person', $person);
        $this->set('references', $references);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     * @author Erick
     */
    public function add($id = null)
    {
        $consultation = $this->Consultations->newEntity();
        $session = $this->request->session();
        $person = $this->Consultations->People->get($id);
        if ($this->request->is('post')) {
            $user_id = $session->read('Auth.User.id');
            $consultation->user_id = $user_id;
            $consultation->person_id = $id;
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            /*Transforma el array del input a una string con el token & para ser guardada */
            $string_SituacionEnfrentada = $this->StringManipulation->ArrayToTokenedString($consultation->get('situacion-enfrentada'));
          
            
            
            $consultation->situacion_enfrentada = $string_SituacionEnfrentada;
        
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The consultation has been saved.'));
                return $this->redirect(array("controller" => "Consultations", 
                          "action" => "view",
                          $consultation->id,
                          "redirect" => "True"));

            } else {
                $this->Flash->error(__('The consultation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('consultation', 'users', 'people'));
        $this->set('person', $person);
        $this->set('_serialize', ['consultation']);
    }
    /**
     * Edit method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     * @author Erick
     */
    public function edit($id = null)
    {
        $consultation = $this->Consultations->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            /*Transforma el array del input a una string con el token & para ser guardada */
            $string_SituacionEnfrentada = $this->StringManipulation->ArrayToTokenedString($consultation->get('situacion-enfrentada'));
            $consultation->situacion_enfrentada = $string_SituacionEnfrentada;
             
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The consultation has been saved.'));
                return $this->redirect(['action' => 'view']);
            } else {
                $this->Flash->error(__('The consultation could not be saved. Please, try again.'));
            }
        }
        $users = $this->Consultations->Users->find('list', ['limit' => 200]);
        $people = $this->Consultations->People->find('list', ['limit' => 200]);
        $this->set(compact('consultation', 'users', 'people'));
        $this->set('_serialize', ['consultation']);
    }
    /**
     * Delete method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     * @author Erick
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
        
        // Json
        $this->loadComponent('RequestHandler');
        $this->loadComponent('StringManipulation');
    }
}