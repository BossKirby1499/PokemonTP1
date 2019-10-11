<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Attacks Controller
 *
 * @property \App\Model\Table\AttacksTable $Attacks
 *
 * @method \App\Model\Entity\Attack[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttacksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow(['add','edit','delete']);
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pokemon']
        ];
        $attacks = $this->paginate($this->Attacks);

        $this->set(compact('attacks'));

    }

    /**
     * View method
     *
     * @param string|null $id Attack id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attack = $this->Attacks->get($id, [
            'contain' => ['Pokemon']
        ]);

        $this->set('attack', $attack);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attack = $this->Attacks->newEntity();
        if ($this->request->is('post')) {
            $attack = $this->Attacks->patchEntity($attack, $this->request->getData());
            if ($this->Attacks->save($attack)) {
                $this->Flash->success(__('The attack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attack could not be saved. Please, try again.'));
        }
        $pokemon = $this->Attacks->Pokemon->find('list', ['limit' => 200]);
        $this->set(compact('attack', 'pokemon'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attack id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attack = $this->Attacks->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $attack = $this->Attacks->patchEntity($attack, $this->request->getData());
            if ($this->Attacks->save($attack)) {
                $this->Flash->success(__('The attack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attack could not be saved. Please, try again.'));
        }
        $pokemon = $this->Attacks->Pokemon->find('list', ['limit' => 200]);
        $this->set(compact('attack', 'pokemon'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attack id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attack = $this->Attacks->get($id);
        if ($this->Attacks->delete($attack)) {
            $this->Flash->success(__('The attack has been deleted.'));
        } else {
            $this->Flash->error(__('The attack could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /*public function isAuthorized($user)
    {

        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add']) || $this->Auth->user('email') == 'admin@hotmail.com') {
            return true;
        }

        // All other actions require a slug.
        $id = $this->request->getParam('pass.0');
        if ($id == null) {
            return false;
        }

        // Check that the article belongs to the current user.
        $pokemon = $this->Attacks->Pokemon->get($id);

        return $pokemon->user_id === $this->Auth->user('id');
    }*/
    public function isAuthorized($user)
    {
        return true;
    }
}
