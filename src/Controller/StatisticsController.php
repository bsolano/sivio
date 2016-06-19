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
       $this->loadModel('Attentions');
       $query = $this->paginate($this->Attentions->find('all'));
        $this->set('result',$query);
        $statistic = $this->Statistics->newEntity();

        if ($this->request->is('post')) {
            
            // Código de las consultas
           
            $s = $this->request->data;

            $desde = $s['desde'];
            $hasta = $s['hasta'];
            
            $logs = $this->Attentions->find('all')->select('Logs.person_id')->contain(['Logs']);
            //$this->set('logs', $logs);
            
            $personIds = array();
            foreach($logs as $l){
                array_push($personIds, $l['Logs']['person_id'] );
                
            }
            
            $personIds = array_unique($personIds);
            debug($personIds);
            echo $personIds[0];
            // Carga el arreglo de datos
            
            $data = array($s);
            
            // Saca los datos de los campos de texto en los que se escribió
            
            $nacionalidad = $data[0]['nacionalidad'];
            $edadLower = $data[0]['edadLower'];
            $edadUpper = $data[0]['edadUpper'];
            $escolaridad = $data[0]['escolaridad'];
            $estado_civil = $data[0]['estado_civil'];
            $ocupacion = $data[0]['ocupacion'];
          
            if ($data[0] != NULL) { // Si se ingresó algo en los campos
            
                // Se declaran los criterios de búsqueda
                
                $campos = array('People.edad >=' => $edadLower, 'People.edad <=' => $edadUpper  ,'People.nacionalidad' => $nacionalidad,'People.escolaridad' => $escolaridad,'People.estado_civil' => $estado_civil,'People.ocupacion' => $ocupacion);
                
                // Elimina los campos en blanco del query
                
                $opciones = array_filter($campos);
                
                $conditions=array('conditions'=> (array($opciones)));
                //$c=array('conditions'=> (array(array('People.nacionalidad' => 'mexicana'))));
           
                //se construye el query

	           // $query = $this->People->find('all',$conditions);
	            $personas = $this->People->find('all',$conditions);
	            $query = $this->paginate($personas); 
	            
	            $resultado = array();
	            
	            foreach($personIds as $ids){
	                foreach($query as $row){
	                   if ($ids == $row ->id)
                         array_push($resultado, $row );
	                }     
                
              }
	            
	            
	            
                $this->set('result',$resultado);

                $this->Flash->success(__('Éxito en consulta de estadísticas'));

            } else {
                $this->Flash->error(__('Error, pruebe de nuevo.'));
            }
            
        }
    }
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }
    
    
    
        
            

    
}