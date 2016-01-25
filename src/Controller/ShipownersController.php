<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shipowners Controller
 *
 * @property \App\Model\Table\ShipownersTable $Shipowners
 */
class ShipownersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('shipowners', $this->paginate($this->Shipowners));
        $this->set('_serialize', ['shipowners']);
    }

    /**
     * View method
     *
     * @param string|null $id Shipowner id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shipowner = $this->Shipowners->get($id, [
            'contain' => ['Ents', 'Fixtures']
        ]);
        $this->set('shipowner', $shipowner);
        $this->set('_serialize', ['shipowner']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shipowner = $this->Shipowners->newEntity();
        if ($this->request->is('post')) {
            $shipowner = $this->Shipowners->patchEntity($shipowner, $this->request->data);
            if ($this->Shipowners->save($shipowner)) {
                $this->Flash->success(__('The shipowner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shipowner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('shipowner'));
        $this->set('_serialize', ['shipowner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipowner id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shipowner = $this->Shipowners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shipowner = $this->Shipowners->patchEntity($shipowner, $this->request->data);
            if ($this->Shipowners->save($shipowner)) {
                $this->Flash->success(__('The shipowner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shipowner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('shipowner'));
        $this->set('_serialize', ['shipowner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipowner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shipowner = $this->Shipowners->get($id);
        if ($this->Shipowners->delete($shipowner)) {
            $this->Flash->success(__('The shipowner has been deleted.'));
        } else {
            $this->Flash->error(__('The shipowner could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
