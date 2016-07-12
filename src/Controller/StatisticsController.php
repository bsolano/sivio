<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * 
 * Index de Reportes
 *
 * @category   
 * @package    
 * @author     David Hine
 * @author     José López
 * @author     Eduardo Solórzano
 * @copyright  
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    
 * @link       http://sivio-edsv.c9users.io/statistics
 * @see        
 * @since      Release 2
 */

/**
 * ExternalReferences Controller
 *
 * @property \App\Model\Table\ExternalReferencesTable $ExternalReferences
 */
 
 
 /**
 * Vista para reportes
 *
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     David Hine
 * @copyright  
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: 2
 * @link       http://sivio-edsv.c9users.io/statistics
 * @since      Disponible desde release 2
 */

 
class StatisticsController extends AppController
{
  
    /**
      * index method
      * Busca las atenciones de la persona en un rango de fecha.
      * @param string|null $id Person id.
      * @return datos usuarias
      * @author DavidHine
     
      */ 
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
            $data = array($s);
            
            $desde = $data[0]['desde'];
            $hasta = $data[0]['hasta'];
            $hasta = $hasta['year'].'-'.$hasta['month'].'-'.$hasta['day'];
            $desde = $desde['year'].'-'.$desde['month'].'-'.$desde['day'];
            $campos = array('date(Attentions.created) >=' => date($desde), 'date(Attentions.created) <=' => date($hasta),'Attentions.tipo'=>'CEAAM' );
            $opciones = array_filter($campos);
            $conditions=array('conditions'=> (array($opciones)));

            
            $personas = $this->Attentions->find('all',$conditions)->select('Attentions.person_id');
            $personas = array_unique($personas->toArray());
            
            $personIds = array();
            foreach($personas as $p){
                array_push($personIds, $p->person_id );
            }
            
            //$logs = $this->Attentions->find('all',$conditions)->select('Logs.person_id')->contain(['Logs']);
            // $personIds = array();
            // foreach($logs as $l){
            //     array_push($personIds, $l['Logs']['person_id'] );
            // }
            // $personIds = array_unique($personIds);
            
            
            
           
            // Carga el arreglo de datos
            
            
            
            // Saca los datos de los campos de texto en los que se escribió
            
            $nacionalidad = $data[0]['nacionalidad'];
            $edadLower = $data[0]['edadLower'];
            $edadUpper = $data[0]['edadUpper'];
            $escolaridad = $data[0]['escolaridad'];
            $estado_civil = $data[0]['estado_civil'];
            $ocupacion = $data[0]['ocupacion'];
          
            if (1) { // Si se ingresó algo en los campos
            
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