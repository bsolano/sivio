<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\View\View;
use Cake\ORM\TableRegistry;

class AllocationsController extends AppController
{

    //var $InternalReferences = array('InternalReferences');
    
    /** Actualiza el profesional asignado desde una llamada AJAX
     * 
    */
    public function updateProfessional() {
        /*debug($this->request->is('ajax'));
        debug($this->request->is('post'));
        debug($this->request->data);
        
        die();*/
        
        $irID = $this->request->data['userpeople_id'];
        $proID = $this->request->data['professional_id'];
        

       $irTable = TableRegistry::get('UsersPeople');
       /* $ir = $irTable->get($irID); // Return article with id 12
        
        $ir->professional_id = $proID;
        $irTable->save($ir);*/
        
        
        $ir = TableRegistry::get('UsersPeople');
        $query = $ir->query();
        $query->update()
            ->set(['user_id' => $proID])
            ->where(['id' => $irID])
            ->execute();
    
    
       // $this->setFlash('Su nombre de usuario y clave son incorrectos.');
        
       $result['code'] = 'OK'/*.print_r($ir, TRUE)*/;
        $this->set('result', $result);
        $this->set('_serialize', ['result']);
        
       // $this->redirect($this->request->here);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       $location = -1;
        $model = $this->loadModel('UsersPeople');
        
        // Obtiene la locacion del usuario activo, ejemplo: Delegacion de la Mujer.
        $loguser = $this->request->session()->read('Auth.User');
        
        if($loguser) {
            $location = $loguser['location_id'];
            $location = $this->request->session()->read('Config.location');
            //echo $location;
        }
            
        
        // Get all users for current user location_id
        $users = $this->loadModel('Users')->find()
            ->where([
                'Users.location_id' => $location
            ]);
        
        $this->paginate = [
            'contain' => ['People', 'Users'/* @@@ , 'Groups'*/]
        ];
        
        
        
        /*$this->InternalReferences */
        
        // Solo traemos users_people para la locacion del usuario activo.
        $usersPeople = $this->paginate(
            
            $this->UsersPeople->find()
            ->where([
                // @@@ enable these filters
                //'UsersPeople.location_id' => $location//,
                //'UsersPeople.professional_id IS' => null
            ])->contain(['Users', 'Users.Groups', 'Users.Locations'])
        );

        $this->set(compact('usersPeople'));
        $this->set('_serialize', ['usersPeople']);
        
        
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
