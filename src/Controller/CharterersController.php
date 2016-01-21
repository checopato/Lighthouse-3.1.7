<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Charterers Controller
 *
 * @property \App\Model\Table\CharterersTable $Charterers
 */
class CharterersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('charterers', $this->paginate($this->Charterers));
        $this->set('_serialize', ['charterers']);
    }

    /**
     * View method
     *
     * @param string|null $id Charterer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $charterer = $this->Charterers->get($id, [
            'contain' => ['Chartererpics', 'Fixtures']
        ]);
        $this->set('charterer', $charterer);
        $this->set('_serialize', ['charterer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $charterer = $this->Charterers->newEntity();
        if ($this->request->is('post')) {
            $charterer = $this->Charterers->patchEntity($charterer, $this->request->data);
            if ($this->Charterers->save($charterer)) {
                $this->Flash->success(__('The charterer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The charterer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('charterer'));
        $this->set('_serialize', ['charterer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Charterer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $charterer = $this->Charterers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $charterer = $this->Charterers->patchEntity($charterer, $this->request->data);
            if ($this->Charterers->save($charterer)) {
                $this->Flash->success(__('The charterer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The charterer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('charterer'));
        $this->set('_serialize', ['charterer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Charterer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $charterer = $this->Charterers->get($id);
        if ($this->Charterers->delete($charterer)) {
            $this->Flash->success(__('The charterer has been deleted.'));
        } else {
            $this->Flash->error(__('The charterer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
