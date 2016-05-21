<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExternalReferences Controller
 *
 * @property \App\Model\Table\ExternalReferencesTable $ExternalReferences
 */
 
class StatisticsController extends AppController
{
  
    
      public function index()
    {
       // $this->Statistic->$useTable = '';
       //$this->loadModel('');
    
        //$statistic = $this->Statistics->newEntity();
        if ($this->request->is('post')) {
            
           //acá va el código para las consultas
           
            $s = $this->request->data;
            $data = array($s);
            //$data = $this->$s->toArray();
           echo $data[0]['nacionalidad'];
            if (1) {
                
                $this->Flash->success(__('The person has been saved.'));
                //echo $statistic;
                //return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Please, try again.'));
            }
        }
         //$this->set('statistic',$m);
         //$this->set('_serialize', ['statistic']);
        
    }
    
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }
    
    
    
    
}