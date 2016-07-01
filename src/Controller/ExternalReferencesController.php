<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico

/**
 * ExternalReferences Controller
 *
 * @property \App\Model\Table\ExternalReferencesTable $ExternalReferences
 */
class ExternalReferencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People']
        ];
        $externalReferences = $this->paginate($this->ExternalReferences);

        $this->set(compact('externalReferences'));
        $this->set('_serialize', ['externalReferences']);
    }

 

    /**
      * index method
      * Busca las atenciones de la persona en un rango de fecha.
      * @param string|null $id Person id.
      * @return datos de la referencia externa
      * @author DavidHine
     
      */ 
    public function view($id = null,$Cid)
    {
        $externalReference = $this->ExternalReferences->get($id, [
            'contain' => ['People']
        ]);

        $this->set('externalReference', $externalReference);
        $this->set('_serialize', ['externalReference']);
        $this->set('Cid', $Cid);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id_p = null,$Cid)
    
    {
        
        
        $externalReference = $this->ExternalReferences->newEntity();
        
        
        
        if ($this->request->is('post')) {
            $externalReference = $this->ExternalReferences->patchEntity($externalReference, $this->request->data);
            if ($this->ExternalReferences->save($externalReference)) {
                $this->Flash->success(__('Referencia Externa guardada.'));
                return $this->redirect(['action' => 'view', $externalReference->id,$Cid]);
            } else {
                $this->Flash->error(__('The external reference could not be saved. Please, try again.'));
            }
        }
        $query = $this->ExternalReferences->People->find('all',['conditions' => ['People.identificacion'  => $id_p]]);
        $this->set('persona', $query);
        
        $people = $this->ExternalReferences->People->find('list', ['limit' => 200]);
        $this->set(compact('externalReference', 'people'));
        $this->set('_serialize', ['externalReference']);
        
    }

    /**
     * Edit method
     *
     * @param string|null $id External Reference id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $externalReference = $this->ExternalReferences->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $externalReference = $this->ExternalReferences->patchEntity($externalReference, $this->request->data);
            if ($this->ExternalReferences->save($externalReference)) {
                $this->Flash->success(__('The external reference has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The external reference could not be saved. Please, try again.'));
            }
        }
        $people = $this->ExternalReferences->People->find('list', ['limit' => 200]);
        $this->set(compact('externalReference', 'people'));
        $this->set('_serialize', ['externalReference']);
    }

    /**
     * Delete method
     *
     * @param string|null $id External Reference id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $externalReference = $this->ExternalReferences->get($id);
        if ($this->ExternalReferences->delete($externalReference)) {
            $this->Flash->success(__('The external reference has been deleted.'));
        } else {
            $this->Flash->error(__('The external reference could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Consultations', 'action' => 'view', $Cid]);
    }
    
    
    public function initialize()
    {
        parent::initialize();
    
        $this->Auth->allow();
      
    }
    /**
      * pdf method
      * genera un PDF con los datos de la consulta externa.
      * @param string|null $id Person id.
      * @return PDF
      * @author DavidHine
     
      */ 
     public function pdf($id = null){
         
        $externalReference = $this->ExternalReferences->get($id, [
            'contain' => ['People']
        ]);
        
        
        
        $this->set('externalReference', $externalReference);
        $this->set('_serialize', ['externalReference']);
        
        //$this->layout='ajax';
        $this->viewBuilder()->layout('ajax');
        $this->response->type('pdf');
        
         $this->Flash->success(__('PDF Generado correctamente'));
       
        
       
    } 
    
    
    public function continuar($Cid)
    
    {
        
         return $this->redirect(array("controller" => "Consultations", 
                          "action" => "view",
                          $Cid,
                          "redirect" => "True"));
        
        
    }
    
    /**
      * enviarcorreo method
      * envia correo al personal de la instituciòn externa.
      * @param string|null $id CID.
      * @return true
      * @author DavidHine
     
      */ 
    
    public function enviarCorreo($id = null,$Cid){
        
      $externalReference = $this->ExternalReferences->get($id, [
            'contain' => ['People']
        ]);  
        
      
      $id= $externalReference->id;
      $identificacion = $externalReference->identificacion;
      $nombre_referido = $externalReference->persona;
      $telefono = $externalReference->telefono;
      $receptor = $externalReference->receptor;
      $direccion = $externalReference->direccion;
      $institucion = $externalReference-> institucion;
      $telefono_receptor = $externalReference->telefono_receptor;
      $correo = ($externalReference->correo);
      $observacion = $externalReference->observacion;
    /*Para este ejemplo no necesito de renderizar
      una vista por lo que autorender lo pongo a false
     */
    $this->autoRender = false;
    
    /*configuramos las opciones para conectarnos al servidor
      smtp de Gmail
     */
    Email::configTransport('mail', [
      'host' => 'smtp.gmail.com', //servidor smtp con encriptacion ssl
      'port' => 587, //puerto de conexion
      'tls' => true, //true en caso de usar encriptacion tls
      
      //cuenta de correo gmail completa desde donde enviaran el correo
      'username' => 'hinedavid@gmail.com', 
      'password' => 'Vailima20*', //contrasena
      
      //Establecemos que vamos a utilizar el envio de correo por smtp
      'className' => 'Smtp', 
      
      //evitar verificacion de certificado ssl ---IMPORTANTE---
      /*'context' => [
        'ssl' => [
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        ]
      ]*/
    ]); 
    /*fin configuracion de smtp*/
    
    
    /*enviando el correo*/
    $enviarCorreo = new Email(); //instancia de correo
    $enviarCorreo
      ->transport('mail') //nombre del configTrasnport que acabamos de configurar
      ->template('correo_plantilla') //plantilla a utilizar
      ->emailFormat('html') //formato de correo
      ->to('david@hine.co.cr') //correo para
      ->from('hinedavid@gmail.com') //correo de
      ->subject('Correo de prueba en cakephp3') //asunto
      ->viewVars([ //enviar variables a la plantilla
        'id' => $id,
        'identificacion' => $identificacion,
        'nombre_referido' => $nombre_referido,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'receptor' => $receptor,
        'institucion' => $institucion,
        'telefono_receptor' => $telefono_receptor,
        'correo' => $correo,
        'observacion' => $observacion
      ]);
    
    if($enviarCorreo->send()){
         $this->Flash->success(__('Correo Enviado con Éxito'));
    }else{
        $this->Flash->error(__('Error al enviar el Correo.'));
    }
   return $this->redirect(['action' => 'view', $id,$Cid]);
  }
    
   
}
