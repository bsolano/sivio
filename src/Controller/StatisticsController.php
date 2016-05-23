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
       $this->loadModel('People');
    
        $statistic = $this->Statistics->newEntity();
        if ($this->request->is('post')) {
            
           //acá va el código para las consultas
           
            $s = $this->request->data;
            $data = array($s);
            
           $nacionalidad = $data[0]['nacionalidad'];
           $edad = $data[0]['edad'];
           $escolaridad = $data[0]['escolaridad'];
           $estado_civil = $data[0]['estado_civil'];
           $ocupacion = $data[0]['ocupacion'];
           //print_r($data[0]);
           echo $edad;
           
            if ($data[0] != NULL) {
                
                //se declaran los criterios de búsqueda
               $opciones=array('conditions'=> array('People.edad >=' => $edad,'People.nacionalidad >=' => $nacionalidad ));
               
               //se construye el query
	           $query = $this->People->find('all',$opciones);
	           
	           //se recorre el resultado de la consulta
                foreach ($query as $row) {
                    echo $row->nombre.' -> '.$row->nacionalidad;
                
                }
                
                //,array('conditions'=>array(array('People.edad BETWEEN ? AND ?' => array(15,45))))
                //int_r($personasFiltradas);
                
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