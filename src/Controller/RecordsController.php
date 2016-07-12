<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Records Controller
 *
 * @property \App\Model\Table\RecordsTable $Records
 */
class RecordsController extends AppController
{
     /**
      * Recuperar usuaria y mostrar datos asociados. 
      * 
      * Busca los datos de la usuaria y los muestra en el expediente.
      * @param string|null $id Person id.
      * @return datos usuaria
      * @author DavidHine
     
      */ 
    public function index($id = null)
    {
        $this->loadModel('People');
        $this->loadModel('Attentions');
        $this->loadModel('Consultations');
        $campos = array('People.id' => $id);
        
        // Elimina los campos en blanco del query
        $opciones = array_filter($campos);
        
        $conditions = array('conditions'=> (array($opciones)));
        //$c=array('conditions'=> (array(array('People.nacionalidad' => 'mexicana'))));
   
        //Se construye el query
        
        $query = $this->paginate($this->People->find('all',$conditions)); 
        $this->set('persona', $query);
        
        //Consulta atenciones 
        $atenciones = $this->Attentions->find('all',['conditions' => ['Attentions.person_id'    => $id]])->contain('Users');
        $this->set('atenciones', $atenciones);
        
        //Consulta consultations
        $consult = $this->Consultations->find('all',['conditions' => ['Consultations.person_id' => $id]]);
        $this->set('con', $consult);
    }
    /**
     * View method
     *
     * @param string|null $id Record id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => ['Transfers']
        ]);
        $this->set('record', $record);
        $this->set('_serialize', ['record']);
    }

      public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }
    
    
}