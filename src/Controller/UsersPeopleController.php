<?php
namespace App\Controller;
use Cake\View\View;
use Cake\ORM\TableRegistry;

use App\Controller\AppController;

/**
 * UsersPeople Controller
 *
 * @property \App\Model\Table\UsersPeopleTable $UsersPeople
 */
class UsersPeopleController extends AppController
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
        $usersPeople = $this->paginate($this->UsersPeople);

        $this->set(compact('usersPeople'));
        $this->set('_serialize', ['usersPeople']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersPerson = $this->UsersPeople->get($id, [
            'contain' => ['Users', 'People']
        ]);

        $this->set('usersPerson', $usersPerson);
        $this->set('_serialize', ['usersPerson']);
    }
    
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($person_id)
    {
        $usersPerson = $this->UsersPeople->newEntity();
        $peopleTable = TableRegistry::get('People');
        
        $query = $peopleTable->find()->where(['People.id' => $person_id]);
        $personas = array();
        foreach ($query as $q) {
            $personas['nombre']=$q->nombre." ".$q->apellidos;
            $personas['fechanac']=$q->fecha_de_nacimiento;
            $personas['nacionalidad']=$q->nacionalidad;
            $personas['identificacion']=$q->identificacion;
        }
        $this->set('nombres', $personas);
        
        //print_r($query);
        
        //$persona = $query.nombre;
        //$this->set('persona_nombre', $persona);
        
        $query2 = $this->UsersPeople->Users->find('all');
        $users = array();
        foreach ($query2 as $q) {
            // @@@ se debe contar con una columna extra en users para que relaciona con People y poder tener nombre y lastname? creo que antes se usaba users_people para esto pero ahora es asignaciones?
            $usuarios[$q->id]=$q->username;//." ".$q->apellidos;
        }
        $this->set('usuarios', $usuarios);

        
        if ($this->request->is('post')) {
            $usersPerson = $this->UsersPeople->patchEntity($usersPerson, $this->request->data);
            $usersPerson['user_id'] = $this->request->data('user_id');
            $usersPerson['person_id'] = $person_id;
            if ($this->UsersPeople->save($usersPerson)) {
                $this->Flash->success(__('Se ha guardado la asignación'));
                return $this->redirect(['controller' => 'Allocations','action' => 'index']);
            } else {
                $this->Flash->error(__('No se pudo guardar la asignación'));
            }
        }
        $users = $this->UsersPeople->Users->find('list', ['limit' => 200]);
        //$people = $this->UsersPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('usersPerson', 'users'/*, 'people'*/, 'personas'));
        $this->set('_serialize', ['usersPerson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    /*public function add()
    {
        $usersPerson = $this->UsersPeople->newEntity();
        
        $query = $this->UsersPeople->People->find('all');
        $personas = array();
        foreach ($query as $q) {
            $personas[$q->id]=$q->nombre." ".$q->apellidos;
        }
        $this->set('nombres', $personas);
        
        
        $query2 = $this->UsersPeople->Users->find('all');
        $users = array();
        foreach ($query2 as $q) {
            // @@@ se debe contar con una columna extra en users para que relaciona con People y poder tener nombre y lastname? creo que antes se usaba users_people para esto pero ahora es asignaciones?
            $usuarios[$q->id]=$q->username;//." ".$q->apellidos;
        }
        $this->set('usuarios', $usuarios);

        
        if ($this->request->is('post')) {
            $usersPerson = $this->UsersPeople->patchEntity($usersPerson, $this->request->data);
            $usersPerson['user_id'] = $this->Auth->user('id');
            if ($this->UsersPeople->save($usersPerson)) {
                $this->Flash->success(__('Se ha guardado la atención'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('No se pudo guardar la atención'));
            }
        }
        $users = $this->UsersPeople->Users->find('list', ['limit' => 200]);
        $people = $this->UsersPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('usersPerson', 'users', 'people'));
        $this->set('_serialize', ['usersPerson']);
    }*/

    /**
     * Edit method
     *
     * @param string|null $id Users Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersPerson = $this->UsersPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersPerson = $this->UsersPeople->patchEntity($usersPerson, $this->request->data);
            if ($this->UsersPeople->save($usersPerson)) {
                $this->Flash->success(__('El usuario fue guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no pudo ser guardado, por favor intente de nuevo.'));
            }
        }
        $users = $this->UsersPeople->Users->find('list', ['limit' => 200]);
        $people = $this->UsersPeople->People->find('list', ['limit' => 200]);
        $this->set(compact('usersPerson', 'users', 'people'));
        $this->set('_serialize', ['usersPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersPerson = $this->UsersPeople->get($id);
        if ($this->UsersPeople->delete($usersPerson)) {
            $this->Flash->success(__('The users person has been deleted.'));
        } else {
            $this->Flash->error(__('The users person could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
 

    
    public function historial(){
        if ($this->request->is('post')) {
            //$usersPerson = $this->UsersPeople->get($id, [
            //'contain' => ['Users', 'People']
            //]);
            //$this->set('usersPerson', $usersPerson);
            //$this->set('_serialize', ['usersPerson']);

        }    
    }
    
    public function initialize()
    {
        parent::initialize();
    
        $this->Auth->allow();
    }

}
