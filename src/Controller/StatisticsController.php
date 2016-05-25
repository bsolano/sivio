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
            
            // Código de las consultas
           
            $s = $this->request->data;

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
                
                // POR AHORA SE DEJA ESTO COMENTADO PARA HACER LA CONSULTA DE OTRA MANERA
                
                // Se declaran criterios de búsqueda para las consultas
                
                // $arreglo = array('People.edad >=' => '1','People.nacionalidad' => '' );
                
                // Elimina los campos en blanco del query
                
                //$opciones = array('conditions' => array('Personas.nombre' => "David"));
                
                // Establece criterios de consulta
                
               // $opciones = $this->People->find('all',array('conditions'=>array(array(
                   // 'People.edad BETWEEN ? AND ?' => array(10,20)))));
                
                /*
                
                $data = array($s); // Data es 
                //$data = $this->$s->toArray();
                // En $data[0]['nacionalidad'];
                echo $data[0]['nacionalidad']; // en data esta todo lo que devuelve la consulta
                if (1) {

                */
                
                // PROPUESTAS DE CONSULTAS
                
                /*
                
                $opciones = array(find('all', array('conditions'=>
                    array('People.edad >=' => 10, 'People.edad <=' => 20)
                )));
                
                */    
                
                
                // Ejecuta consulta    
                    
                //$personasEncontradas = $this->People->find('all', $opciones);
            
	            // Se recorre el resultado de la consulta
	            
                //foreach ($personasEncontradas as $row) {
                    //echo $row->nombre.' -> '.$row->nacionalidad;

                //se declaran los criterios de búsqueda
                
                 $campos = array('People.edad >=' => $edadLower, 'People.edad <=' => $edadUpper  ,'People.nacionalidad' => $nacionalidad,'People.escolaridad' => $escolaridad,'People.estado_civil' => $estado_civil,'People.ocupacion' => $ocupacion);
                
                //elimina los campos en blanco del query
                
                $opciones= array_filter($campos);
                
                $conditions=array('conditions'=> (array($opciones)));
               
                //print_r(($conditions));
           
                //se construye el query
	            
	            $query = $this->People->find('all',$conditions);
	           
	           //se recorre el resultado de la consulta
                foreach ($query as $row) {
                    echo $row->nombre.' -> '.$row->nacionalidad.' -> '.$row->estado_civil;
                    echo "<br>"; //* Esto es un salto de linea
                }

                
            
                //,array('conditions'=>array(array('People.edad BETWEEN ? AND ?' => array(15,45))))
                //int_r($personasFiltradas);
                
                $this->Flash->success(__('Éxito en consulta de estadísticas'));
                //echo $statistic;
                //return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Error, pruebe de nuevo.'));
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