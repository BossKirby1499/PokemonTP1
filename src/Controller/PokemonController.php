<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pokemon Controller
 *
 * @property \App\Model\Table\PokemonTable $Pokemon
 *
 * @method \App\Model\Entity\Pokemon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PokemonController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $pokemon = $this->paginate($this->Pokemon);

        $this->set(compact('pokemon'));
    }

    /**
     * View method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pokemon = $this->Pokemon->get($id, [
            'contain' => ['Users', 'Types','Attacks', 'Files']
        ]);

        $this->set('pokemon', $pokemon);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pokemon = $this->Pokemon->newEntity();
        if ($this->request->is('post')) {
            $pokemon = $this->Pokemon->patchEntity($pokemon, $this->request->getData());
            $pokemon->user_id = $this->Auth->user('id');
            if ($this->Pokemon->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
        }
        $users = $this->Pokemon->Users->find('list', ['limit' => 200]);
        $types = $this->Pokemon->Types->find('list', ['limit' => 200]);
        $files = $this->Pokemon->Files->find('list', ['limit' => 200]);
        $this->set(compact('pokemon', 'users', 'types','files'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pokemon = $this->Pokemon->get($id, [
            'contain' => ['Types']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pokemon = $this->Pokemon->patchEntity($pokemon, $this->request->getData());
            $pokemon->user_id = $this->Auth->user('id');
            if ($this->Pokemon->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
        }
        $users = $this->Pokemon->Users->find('list', ['limit' => 200]);
        $types = $this->Pokemon->Types->find('list', ['limit' => 200]);
        $files = $this->Pokemon->Files->find('list', ['limit' => 200]);
        $this->set(compact('pokemon', 'users', 'types','files'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pokemon = $this->Pokemon->get($id);
        if ($this->Pokemon->delete($pokemon)) {
            $this->Flash->success(__('The pokemon has been deleted.'));
        } else {
            $this->Flash->error(__('The pokemon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['view'])) {

            return true;
        }else if( $this->Auth->user('email') == 'admin@hotmail.com' && $this->Auth->user('actif')){

            return true;
        }else if(in_array($this->request->getParam('action'), ['add'] ) && $this->Auth->user('actif')){

            return true;

        }



        // All other actions require a slug.
        $id = $this->request->getParam('pass.0');
        if ($id == null ) {
            return false;
        }

        // Check that the article belongs to the current user.

            $pokemon = $this->Pokemon->get($id);

            return $pokemon->user_id === $user['id'];





    }
}
