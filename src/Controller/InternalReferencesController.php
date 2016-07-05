<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternalReferences Controller
 *
 * @property \App\Model\Table\InternalReferencesTable $InternalReferences
 */
class InternalReferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
         $this->paginate = [
            'contain' => ['People', 'Users','Locations']
        ];
        
        $this->loadModel('Groups');
        
        //localizacion del usuario
        $userLocation = $this->Auth->user('location_id');
        
        //nombre del grupo al que pertenece
        $groupNumber = $this->Auth->user('group_id');
        $groupName =  $this->Groups->find()->where(['Groups.id' => $groupNumber])->first(); 
        
        //Solamente el administrador, las jefaturas o la recepcionista puede aceptar o rechazar la referencia interna
        if (strcmp($groupName['name'], 'Admin') == 0 || strpos($groupName['name'], 'Jefatura') !== false || strpos($groupName['name'], 'Recepcionista') !== false){
            //encontrar las referencias de mi ubicacion y que aun no hayan sido aceptadas o rechazadas => "estado == 0"
            $referencias = $this->InternalReferences->find()->where(['AND' => [['InternalReferences.location_id' => $userLocation],['InternalReferences.estado' => 0]]]);
        
        $internalReferences = $this->paginate($referencias);
        
        }
        else {
            $internalReferences = null;
        }
        
        $this->set(compact('internalReferences'));
        $this->set(compact('userLocation','groupName'));
    }

    /**
     * View method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internalReference = $this->InternalReferences->get($id, [
            'contain' => ['People', 'Users', 'Locations', 'Groups']
        ]);

        $this->set('internalReference', $internalReference);
        $this->set('_serialize', ['internalReference']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null, $consultation_id = null)
    {
        
        $internalReference = $this->InternalReferences->newEntity();
        if ($this->request->is('post')) {
            $internalReference = $this->InternalReferences->patchEntity($internalReference, $this->request->data);
            //Se le asiga un estado de 0 para la nueva referencia interna 
            $internalReference->estado = 0;
            if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('The internal reference has been saved.'));
                //Se retorna a la consulta que genero la referencia interna
                return $this->redirect(['controller' => 'Consultations' , 'action' => 'view', $internalReference->consultation_id, $internalReference->id]);
            } else {
                $this->Flash->error(__('The internal reference could not be saved. Please, try again.'));
            }
        }
        
          /*
        Cambiar que no muestre todas las localizaciones. 
        */
        
        $this->loadModel('Locations');
        $this->loadModel('Groups');
        $this->loadModel('Users');
        //nombre del grupo que pertenece el usuario que inicio sesion
        $groupNumber = $this->Auth->user('group_id');
        $groupName =  $this->Groups->find()->where(['Groups.id' => $groupNumber])->first(); 
        
        
        //Selecciona solamente a las instancias debidas a las que el profesional puede hacer la referencia interna
        if (strpos($groupName, 'EquipoEstrategico') !== false) {
        //if (strpos($groupName['name'], 'Admin') !== false) {
            $locations = $this->Locations->find('list', [
                'keyField' => 'id',
                'valueField' => 'ubicacion']
                )->where(['OR' => [['Locations.ubicacion LIKE' => 'Albergue%'],['Locations.ubicacion' => 'DelegacionDeLaMujer']]]);
                //dele y albergues
        }
        else if (strpos($groupName['name'], 'DelegacionDeLaMujer') !== false) {
            $locations = $this->Locations->find('list', [
                'keyField' => 'id',
                'valueField' => 'ubicacion'])->where(['Locations.ubicacion LIKE' => 'Albergue%']);
        }
        else if (strpos($groupName['name'], 'COAVIF') !== false) {
            $locations = $this->Locations->find('list', [
                'keyField' => 'id',
                'valueField' => 'ubicacion'])->where(['OR' => [['Locations.ubicacion' => 'DelegacionDeLaMujer'],['Locations.ubicacion' => 'OficinasCentrales']]]);
        }
        
        
        if ($consultation_id != null){
            $tipoProcedencia = 0; // 0 si proviene de una consulta
            $idProcedencia = $consultation_id;
        }
        /*else if (){
         Caso de que la referencia interna provenga de otro lado que no sea una consulta  
        }
        */
        
        //Opciones por la cual se deniega el acceso. 
        $accesoDenegado = ['No hay espacio en el CEEAM' => 'No hay espacio en el CEEAM', 'No hay recursos para para el traslado' => 'No hay recursos para para el traslado', 'Usuaria rechaza recurso' => 'Usuaria rechaza recurso'];
        //selecciona a las usuarias del sistema
        $people = $this->InternalReferences->People
        ->find('list', [
        'keyField' => 'id',
        'valueField' => 'concatenated'
        ]);
        $people
        ->select([
        'id',
        'concatenated' => $people->func()->concat([
            'id' => 'literal',
            ' ',
            'nombre' => 'literal',
            ' ',
            'apellidos' => 'literal'
        ])
    ])
    ->where(['People.id' => $id]);
       $user_id = $this->Auth->user('id');
        $users = $this->Users->find('list', [
                'keyField' => 'id',
                'valueField' => 'username'])->where(['Users.id' => $user_id ]);
        $groups = [];
        $this->set(compact('internalReference', 'people', 'users', 'locations', 'groups','groupName','idProcedencia','tipoProcedencia','accesoDenegado','consultation_id'));
        $this->set('_serialize', ['internalReference']);
    }
    
      /**
      * rechazarReferencia method
      * Busca la referencia interna relacionada con el id. Le cambia el estado a rechazada(1)
      * Verifica el grupo
      * @param string|null $id InternalReference id.
      * @return void
      */ 
    public function aceptarReferencia($id = null){
        
        $internalReference = $this->InternalReferences->find()->where(['InternalReferences.id' => $id])->first(); 
        $internalReference->estado = 1; //se acepta la referencia
        
        $this->loadModel('Groups');
        $this->loadModel('Users');
        //nombre del grupo que pertenece el usuario que inicio sesion
        $groupNumber = $this->Auth->user('group_id');
        $groupName =  $this->Groups->find()->where(['Groups.id' => $groupNumber])->first(); 
        
        //Selecciona solamente a las instancias debidas a las que el profesional puede hacer la referencia interna
        //if (strpos($groupName['name'], 'Admin') !== false) {
        if (strpos($groupName, 'EquipoEstrategico') !== false) {
            $redirectTo = ['controller' => 'Consultations', 'action' => 'add', $internalReference->person_id];
        }
        else if (strpos($groupName['name'], 'DelegacionDeLaMujer') !== false) {
            $redirectTo = ['controller' => 'Consultations', 'action' => 'add', $internalReference->person_id];
        }
        else if (strpos($groupName['name'], 'Albergue') !== false) {
            $redirectTo = ['controller' => 'Consultations', 'action' => 'add', $internalReference->person_id];
        }
        
        if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('Se aceptó la referencia interna.'));
                return $this->redirect($redirectTo);
        }
        
    }
    
     /**
      * rechazarReferencia method
      * Busca la referencia interna relacionada con el id. Le cambia el estado a rechazada(2)
      * @param string|null $id InternalReference id.
      * @return void
      */ 
    public function rechazarReferencia($id = null){
        $internalReference = $this->InternalReferences->find()->where(['InternalReferences.id' => $id])->first(); 
        $internalReference->estado = 2; //se cancela la referencia
        if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('Se canceló la referencia interna.'));
                return $this->redirect(['action' => 'index']);
        }
    }
    
     /**
      * groupsSearch method
      * Busca los grupos que pertenecen a la ubicacion que se envia como 'keyword'
      * Retorna los grupos pertenecientes a la ubicacion
      */
    public function groupsSearch(){
        
        $this->loadModel('Locations');
        $this->loadModel('Groups');
        
        $location_id = $this->request->query('keyword');
        
        if ($location_id != null){
        
        $locationName =  $this->Locations->find()->where(['Locations.id' => $location_id])->first(); 
        
        if (strpos($locationName['ubicacion'], 'OficinasCentrales') !== false) {
            $groups = $this->Groups->find('list', [
                'keyField' => 'id',
                'valueField' => 'name'])->where(['Groups.name LIKE' => '%Profesional%EquipoEstrategico']);
        }
        else if (strpos($locationName['ubicacion'], 'DelegacionDeLaMujer') !== false) {
            $groups = $this->Groups->find('list', [
                'keyField' => 'id',
                'valueField' => 'name'])->where(['Groups.name LIKE' => '%Profesional%DelegacionDeLaMujer']);
        }
        else if (strpos($locationName['ubicacion'], 'Albergue') !== false) {
            $groups = $this->Groups->find('list', [
                'keyField' => 'id',
                'valueField' => 'name'])->where(['Groups.name LIKE' => '%Profesional%Albergue']);
        }
        
        }
        else {
            $groups = [];
        }
        
         $this->set(compact('groups','location_id'));
    
    }

    /**
     * Edit method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internalReference = $this->InternalReferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internalReference = $this->InternalReferences->patchEntity($internalReference, $this->request->data);
            if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('The internal reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->InternalReferences->People->find('list', ['limit' => 200]);
        $users = $this->InternalReferences->Users->find('list', ['limit' => 200]);
        $locations = $this->InternalReferences->Locations->find('list', ['limit' => 200]);
        $groups = $this->InternalReferences->Groups->find('list', ['limit' => 200]);
        $this->set(compact('internalReference', 'people', 'users', 'locations', 'groups'));
        $this->set('_serialize', ['internalReference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internal Reference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internalReference = $this->InternalReferences->get($id);
        if ($this->InternalReferences->delete($internalReference)) {
            $this->Flash->success(__('The internal reference has been deleted.'));
        } else {
            $this->Flash->error(__('The internal reference could not be deleted. Please, try again.'));
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
