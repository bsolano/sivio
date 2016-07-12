<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Log;

/**
 * 
 * Controlador de versiones (logs)
 *
 * @author     Juan Diego Araya
 * @link       http://sivio-edsv.c9users.io/logs/
*/
 
class LogsController extends AppController
{

    /**
     * Método que permite mostrar un único regitro de una persona. 
     *
     * @param  $id Log id.
     * @return Nada
     * @author Juan Diego Araya
     */
    public function view($id = null)
    {
        $this->loadComponent('StringManipulation'); 
        $log = $this->Logs->get($id);
        $log = $this->StringManipulation->transformarStringsConcatenadosaLectura($log->toArray(), ['fecha_de_nacimiento','created']);
        $this->set('log', new Log($log));//Devolviendolo a formato de lectura para el .ctp
        $this->set('_serialize', ['log']);
    }
    
    /**
     * Muestra todos los posibles registros de una persona en el sistema, y da la opción 
     * de elegir alguno para verlo más a fondo. 
     * 
     * @author Juan Diego Araya
     * @param $id Id de la persona.
     * @return Nada.
     */
    public function indicePersona($id){
        $this->loadModel('People');
        $persona = $this->People->get($id);
        
        $personas = $this->Logs->find('all',['conditions' => ['person_id' => $id] ]);
        
        $logs = $this->paginate($personas);
        $this->set(compact('logs'));
        $this->set('_serialize', ['logs']);
        $this->set('persona',$persona);
        if($this->request->is('post')){
            
        }
    }

    public function initialize(){
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }

   
}
