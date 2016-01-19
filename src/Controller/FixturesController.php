<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fixtures Controller
 *
 * @property \App\Model\Table\FixturesTable $Fixtures
 */
class FixturesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Pics', 'Charterers', 'Shipowners']
        ];
        $this->set('fixtures', $this->paginate($this->Fixtures));
        $this->set('_serialize', ['fixtures']);
    }

    /**
     * View method
     *
     * @param string|null $id Fixture id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fixture = $this->Fixtures->get($id, [
            'contain' => ['Users', 'Pics', 'Charterers', 'Shipowners', 'Shippings']
        ]);
        $this->set('fixture', $fixture);
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fixture = $this->Fixtures->newEntity();
        if ($this->request->is('post')) {
            $fixture = $this->Fixtures->patchEntity($fixture, $this->request->data);
            if ($this->Fixtures->save($fixture)) {
                $this->Flash->success(__('The fixture has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fixture could not be saved. Please, try again.'));
            }
        }
        $users = $this->Fixtures->Users->find('list', ['limit' => 200]);
        $pics = $this->Fixtures->Pics->find('list', ['limit' => 200]);
        $charterers = $this->Fixtures->Charterers->find('list', ['limit' => 200]);
        $shipowners = $this->Fixtures->Shipowners->find('list', ['limit' => 200]);
        $this->set(compact('fixture', 'users', 'pics', 'charterers', 'shipowners'));
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fixture id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fixture = $this->Fixtures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fixture = $this->Fixtures->patchEntity($fixture, $this->request->data);
            if ($this->Fixtures->save($fixture)) {
                $this->Flash->success(__('The fixture has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fixture could not be saved. Please, try again.'));
            }
        }
        $users = $this->Fixtures->Users->find('list', ['limit' => 200]);
        $pics = $this->Fixtures->Pics->find('list', ['limit' => 200]);
        $charterers = $this->Fixtures->Charterers->find('list', ['limit' => 200]);
        $shipowners = $this->Fixtures->Shipowners->find('list', ['limit' => 200]);
        $this->set(compact('fixture', 'users', 'pics', 'charterers', 'shipowners'));
        $this->set('_serialize', ['fixture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fixture id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fixture = $this->Fixtures->get($id);
        if ($this->Fixtures->delete($fixture)) {
            $this->Flash->success(__('The fixture has been deleted.'));
        } else {
            $this->Flash->error(__('The fixture could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
