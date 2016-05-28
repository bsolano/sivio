<?php
namespace App\Controller;

use App\Controller\AppController;



class AllocationsController extends AppController
{

    //var $InternalReferences = array('InternalReferences');
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $location = -1;
        $model = $this->loadModel('InternalReferences');
        

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
                'InternalReferences.location_id' => $location
            ])
        );

        $this->set(compact('internalReferences'));
        $this->set('_serialize', ['internalReferences']);
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
