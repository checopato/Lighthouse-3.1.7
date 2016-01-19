<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commisions Controller
 *
 * @property \App\Model\Table\CommisionsTable $Commisions
 */
class CommisionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shippings']
        ];
        $this->set('commisions', $this->paginate($this->Commisions));
        $this->set('_serialize', ['commisions']);
    }

    /**
     * View method
     *
     * @param string|null $id Commision id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commision = $this->Commisions->get($id, [
            'contain' => ['Shippings']
        ]);
        $this->set('commision', $commision);
        $this->set('_serialize', ['commision']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commision = $this->Commisions->newEntity();
        if ($this->request->is('post')) {
            $commision = $this->Commisions->patchEntity($commision, $this->request->data);
            if ($this->Commisions->save($commision)) {
                $this->Flash->success(__('The commision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commision could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Commisions->Shippings->find('list', ['limit' => 200]);
        $this->set(compact('commision', 'shippings'));
        $this->set('_serialize', ['commision']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Commision id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commision = $this->Commisions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commision = $this->Commisions->patchEntity($commision, $this->request->data);
            if ($this->Commisions->save($commision)) {
                $this->Flash->success(__('The commision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commision could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Commisions->Shippings->find('list', ['limit' => 200]);
        $this->set(compact('commision', 'shippings'));
        $this->set('_serialize', ['commision']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Commision id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commision = $this->Commisions->get($id);
        if ($this->Commisions->delete($commision)) {
            $this->Flash->success(__('The commision has been deleted.'));
        } else {
            $this->Flash->error(__('The commision could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
