<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function login() {
        
        $locations = $this->loadModel('Locations')->find('list');
        
        $locations = $locations->toArray();
       //$locations = [];
        
        
        $this->set('locations', $locations);
        //$this->set(compact('locations'));
        //$this->set('_serialize', ['locations']);
        
        if($this->request->session()->read('Auth.User')) {
            // si ya esta loggeado, redirija a la pagina de expedientes
            return $this->redirect($this->Auth->redirectUrl());
		}
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            $loc = $this->request->data('location_id');
            print_r($loc);
            if ($user) {
                $this->Auth->setUser($user);
                $this->request->session()->write('Config.location', $loc);
                return $this->redirect($this->Auth->redirectUrl());
                
            }
            $this->Flash->error('Su nombre de usuario y clave son incorrectos.');
        }
    }
    
    public function logout() {
        $this->Flash->success('¡Hasta pronto!');
        $this->redirect($this->Auth->logout());
    }
    
    public function initialize()
    {
        parent::initialize();
    
        $this->Auth->allow();
    }
    
     public function pdf($id = null){
         
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
        //$this->layout='ajax';
        $this->viewBuilder()->layout('ajax');
        $this->response->type('pdf');
        
    }
    
    //Para generar los reportes
    
    public function reports($id = null){
         
        //$user = $this->Users->get($id, [
        //    'contain' => []
        //]);
        //$this->set('user', $user);
        //$this->set('_serialize', ['user']);
        //$this->layout='ajax';
        //$this->viewBuilder()->layout('ajax');
        //$this->response->type('pdf');
        
    } 
    
    
    
    /**
     * designees method
     * Por medio del id enviado, busca las personas asignadas al respesctivo usuario
     * @param string|null $id Person id.
     * @return void
     * @author Brandon Madrigal B33906
     */ 
    public function designees($user = null) {
        $uid = $this->request->session()->read('Auth.User.id');
        $userData = $this->Users->get($user); //Obtiene la información de la usuaria logueada.
        if ($uid == $user) {
        $this->loadModel('UsersPeople'); //Carga la tabla Users_People en en este controlador.
        $this->loadModel('People'); //Carga la tabla People en en este controlador.
        //$designeePeople = array();
        $designeesData = $this->UsersPeople->find('all', [
        'conditions' => ['UsersPeople.user_id' => $user]
        ]); //Obtiene el id de las personas asignadas al usuario logeado.
        $people = $this->People->find('all');
    
        $this->set(['designeesData' => $designeesData]); //Guarda en variable accesible desde la vista.
        $this->set(['people' => $people]); //Guarda en variable accesible desde la vista.
        }
        $this->set(['user' => $userData]); //Guarda en variable accesible desde la vista.
    }
}