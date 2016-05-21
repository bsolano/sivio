<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attentions Controller
 *
 * @property \App\Model\Table\AttentionsTable $Attentions
 */
class AttentionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Aggressors', 'Histories', 'Users']
        ];
        $attentions = $this->paginate($this->Attentions);

        $this->set(compact('attentions'));
        $this->set('_serialize', ['attentions']);
    }

    /**
     * View method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attention = $this->Attentions->get($id, [
            'contain' => ['Aggressors', 'Histories', 'Users']
        ]);

        $this->set('attention', $attention);
        $this->set('_serialize', ['attention']);
    }

    public function add($id = null)
    {
        $this->loadModel('People');
        $query = $this->People->find('all',['conditions' => ['People.id'  => $id]]);
        $this->set('persona', $query);
        
        $p = $query->toArray();
 
        $this->loadModel('Histories');
        $query3 = $this->Histories->find('all',['conditions' => ['id' => $p['0']['history_id']]]);
        $this->set('historia',$query3);
        
          if ($this->request->is('post')) {
              $data=$this->request->data;
              $this->set('data',$data);
        }
    }

    public function initialize(){
        parent::initialize();
        $this->Auth->allow();
        
        // Json
        $this->loadComponent('RequestHandler');
    }

    /**
     * Edit method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attention = $this->Attentions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attention = $this->Attentions->patchEntity($attention, $this->request->data);
            if ($this->Attentions->save($attention)) {
                $this->Flash->success(__('The attention has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The attention could not be saved. Please, try again.'));
            }
        }
        $agressors = $this->Attentions->Agressors->find('list', ['limit' => 200]);
        $histories = $this->Attentions->Histories->find('list', ['limit' => 200]);
        $users = $this->Attentions->Users->find('list', ['limit' => 200]);
        $this->set(compact('attention', 'agressors', 'histories', 'users'));
        $this->set('_serialize', ['attention']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Attention id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attention = $this->Attentions->get($id);
        if ($this->Attentions->delete($attention)) {
            $this->Flash->success(__('The attention has been deleted.'));
        } else {
            $this->Flash->error(__('The attention could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
