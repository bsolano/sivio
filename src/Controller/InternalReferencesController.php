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
        
        /*<p> <?= $referencias[0] ?> </p>*/
        
         $this->paginate = [
            'contain' => ['People', 'Users','Locations', 'Groups']
        ];
        
        $this->loadModel('Groups');
        
        $userLocation = $this->Auth->user('location_id');
        
        $groupNumber = $this->Auth->user('group_id');
        
        
        $groupName =  $this->Groups->find()->where(['Groups.id' => $groupNumber])->first(); 
        
        //$groupName = $groupName->toArray();
        
        if ( strcmp($groupName['name'], 'Admin') == 0){
            $referencias = $this->InternalReferences->find()->where(['InternalReferences.location_id' => $userLocation]);
        
        //$this->set(compact('referencias'));
        
        $internalReferences = $this->paginate($referencias);
        
        }
        else {
            $internalReferences = null;
        }
        
        $this->set(compact('internalReferences'));
        $this->set(compact('userLocation','groupName'));
        
        
        //$this->set('_serialize', ['internalReferences']);
        
    
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
    public function add()
    {
        
        $internalReference = $this->InternalReferences->newEntity();
        if ($this->request->is('post')) {
            $internalReference = $this->InternalReferences->patchEntity($internalReference, $this->request->data);
            if ($this->InternalReferences->save($internalReference)) {
                $this->Flash->success(__('The internal reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The internal reference could not be saved. Please, try again.'));
            }
        }
        
          /*
        Cambiar que no muestre todas las localizaciones. 
        */
        
        //['Locations.ubicacion LIKE' => '%Ovens%']
        $this->loadModel('Locations');
        $this->loadModel('Groups');
        $groupNumber = $this->Auth->user('group_id');
        $groupName =  $this->Groups->find()->where(['Groups.id' => $groupNumber])->first(); 
        
        //ER para groupName
        //if (strpos($groupName, 'EquipoEstrategico') !== false) {
        
        if (strpos($groupName['name'], 'Admin') !== false) {
            $groupCode = 1;
        }
        else if (strpos($groupName['name'], 'DelegacionDeLaMujer') !== false) {
            $groupCode = 2;
        }
        else if (strpos($groupName['name'], 'COAVIF') !== false) {
            $groupCode = 3;
        }
        
        switch($groupCode){
            case '1': //EquipoEstrategico
                $location_query = $this->Locations->find()->where(['OR' => [['Locations.ubicacion LIKE' => 'Albergue%'],['Locations.ubicacion' => 'DelegacionDeLaMujer']]]);
                //dele y albergues
                break;
            case '2': //DelegacionDeLaMujer
                 $location_query = $this->Locations->find()->where([['Locations.ubicacion LIKE' => 'Albergue%']]);
                break;
            case '3': //COAVIF
                 $location_query = $this->Locations->find()->where(['OR' => [['Locations.ubicacion' => 'DelegacionDeLaMujer'],['Locations.ubicacion' => 'OficinasCentrales']]]);
                break;
        }
        
        $locations = array();
        foreach ($location_query as $location) {
            array_push($locations, $location->id);
        }
        
        $people = $this->InternalReferences->People->find('list', ['limit' => 200]);
       // $users = $this->InternalReferences->Users->find('list', ['limit' => 200]);
       $users = $this->Auth->user('id');
       // $locations = $this->InternalReferences->Locations->find('list', ['limit' => 200]);
        $groups = [];// $this->InternalReferences->Groups->find('list', ['limit' => 200]);
        $this->set(compact('internalReference', 'people', 'users', 'locations', 'groups','groupName'));
        $this->set('_serialize', ['internalReference']);
        
    }
    
    public function groupsSearch(){
        
        $this->loadModel('Locations');
        $this->loadModel('Groups');
        
        $location_id = $this->request->query('keyword');
        
        if ($location_id != null){
        
        $locationName =  $this->Locations->find()->where(['Locations.id' => $location_id])->first(); 
        
        if (strpos($locationName['ubicacion'], 'OficinasCentrales') !== false) {
            $group_query = $this->Groups->find()->where(['Groups.name LIKE' => '%EquipoEstrategico']);
        }
        else if (strpos($locationName['ubicacion'], 'DelegacionDeLaMujer') !== false) {
            $group_query = $this->Groups->find()->where(['Groups.name LIKE' => '%DelegacionDeLaMujer']);
        }
        else if (strpos($locationName['ubicacion'], 'Albergue') !== false) {
            $group_query = $this->Groups->find()->where(['Groups.name LIKE' => '%Albergue']);
        }
        
        
        $groups = array();
        foreach ($group_query as $group) {
            array_push($groups, $group->id);
        }
        
        
        
        }
        else {
            $groups = [];
        }
        
        //$groups = $this->InternalReferences->Groups->find('list', ['limit' => 200]);
         $this->set(compact('groups'));
    
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
    }
}
