<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\View\View;
use Cake\ORM\TableRegistry;

class AllocationsController extends AppController
{

    //var $InternalReferences = array('InternalReferences');
    
    
    public function updateProfessional() {
        /*debug($this->request->is('ajax'));
        debug($this->request->is('post'));
        debug($this->request->data);
        
        die();*/
        
        $irID = $this->request->data['internalreference_id'];
        $proID = $this->request->data['professional_id'];
        

       $irTable = TableRegistry::get('InternalReferences');
       /* $ir = $irTable->get($irID); // Return article with id 12
        
        $ir->professional_id = $proID;
        $irTable->save($ir);*/
        
        
        $ir = TableRegistry::get('InternalReferences');
        $query = $ir->query();
        $query->update()
            ->set(['professional_id' => $proID])
            ->where(['id' => $irID])
            ->execute();
    
    
        
       $result['code'] = 'OK'/*.print_r($ir, TRUE)*/;
        $this->set('result', $result);
        $this->set('_serialize', ['result']);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $location = -1;
        $model = $this->loadModel('InternalReferences');
        
         
         // Get all users for current user location_id
        $users = $this->loadModel('Users')->find()
            ->where([
                'Users.location_id' => 2
            ]);
            

        // Obtiene la locacion del usuario activo, ejemplo: Delegacion de la Mujer.
        $loguser = $this->request->session()->read('Auth.User');
        
        if($loguser) {
            $location = $loguser['location_id'];
            //echo $location;
        }
            
        
        
        $this->paginate = [
            'contain' => ['People', 'Users', 'Groups']
        ];
        
        
        
        /*$this->InternalReferences */
        
        // Solo traemos referencias internas para la locacion del usuario activo.
        $internalReferences = $this->paginate(
            
            $this->InternalReferences->find()
            ->where([
                'InternalReferences.location_id' => $location,
                'InternalReferences.professional_id IS' => null
            ])
        );

        $this->set(compact('internalReferences'));
        $this->set('_serialize', ['internalReferences']);
        
        
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
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
