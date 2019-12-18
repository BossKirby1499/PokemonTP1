<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PokemonAutocompletes Controller
 *
 * @property \App\Model\Table\PokemonAutocompletesTable $PokemonAutocompletes
 *
 * @method \App\Model\Entity\PokemonAutocomplete[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PokemonAutocompletesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow(['findPokemon']);
    }
    public function index()
    {
        $pokemonAutocompletes = $this->paginate($this->PokemonAutocompletes);

        $this->set(compact('pokemonAutocompletes'));
    }

    /**
     * View method
     *
     * @param string|null $id Pokemon Autocomplete id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pokemonAutocomplete = $this->PokemonAutocompletes->get($id, [
            'contain' => []
        ]);

        $this->set('pokemonAutocomplete', $pokemonAutocomplete);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pokemonAutocomplete = $this->PokemonAutocompletes->newEntity();
        if ($this->request->is('post')) {
            $pokemonAutocomplete = $this->PokemonAutocompletes->patchEntity($pokemonAutocomplete, $this->request->getData());
            if ($this->PokemonAutocompletes->save($pokemonAutocomplete)) {
                $this->Flash->success(__('The pokemon autocomplete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pokemon autocomplete could not be saved. Please, try again.'));
        }
        $this->set(compact('pokemonAutocomplete'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pokemon Autocomplete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pokemonAutocomplete = $this->PokemonAutocompletes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pokemonAutocomplete = $this->PokemonAutocompletes->patchEntity($pokemonAutocomplete, $this->request->getData());
            if ($this->PokemonAutocompletes->save($pokemonAutocomplete)) {
                $this->Flash->success(__('The pokemon autocomplete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pokemon autocomplete could not be saved. Please, try again.'));
        }
        $this->set(compact('pokemonAutocomplete'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pokemon Autocomplete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pokemonAutocomplete = $this->PokemonAutocompletes->get($id);
        if ($this->PokemonAutocompletes->delete($pokemonAutocomplete)) {
            $this->Flash->success(__('The pokemon autocomplete has been deleted.'));
        } else {
            $this->Flash->error(__('The pokemon autocomplete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function findPokemon() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];

            $results = $this->PokemonAutocompletes->find('all', array(
                'conditions' => array('PokemonAutocompletes.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['name']);

            }

            echo json_encode($resultArr);
        }
    }
    public function autocompletedemo() {

    }


}
