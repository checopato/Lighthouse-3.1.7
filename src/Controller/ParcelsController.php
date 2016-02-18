<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parcels Controller
 *
 * @property \App\Model\Table\ParcelsTable $Parcels
 */
class ParcelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shippings', 'Ports']
        ];
        $this->set('parcels', $this->paginate($this->Parcels));
        $this->set('_serialize', ['parcels']);
    }

    /**
     * View method
     *
     * @param string|null $id Parcel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parcel = $this->Parcels->get($id, [
            'contain' => ['Shippings', 'Ports']
        ]);
        $this->set('parcel', $parcel);
        $this->set('_serialize', ['parcel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($ship = null)
    {
        $parcel = $this->Parcels->newEntity();
        if ($this->request->is('post')) {
            $parcel = $this->Parcels->patchEntity($parcel, $this->request->data);
            if ($this->Parcels->save($parcel)) {
                $this->Flash->success(__('The parcel has been saved.'));
                return $this->redirect(['controller' => 'shippings', 'action' => 'view' , $ship]);
            } else {
                $this->Flash->error(__('The parcel could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Parcels->Shippings->find('list', ['limit' => 200]);
        $ports = $this->Parcels->Ports->find('list', ['limit' => 200]);
        $this->set(compact('parcel', 'shippings', 'ports'));
        $this->set('_serialize', ['parcel']);

        $shipping = $this->Parcels->Shippings->get($ship);
        $this->set('shipping', $shipping);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parcel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parcel = $this->Parcels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parcel = $this->Parcels->patchEntity($parcel, $this->request->data);
            if ($this->Parcels->save($parcel)) {
                $this->Flash->success(__('The parcel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The parcel could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Parcels->Shippings->find('list', ['limit' => 200]);
        $ports = $this->Parcels->Ports->find('list', ['limit' => 200]);
        $this->set(compact('parcel', 'shippings', 'ports'));
        $this->set('_serialize', ['parcel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parcel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parcel = $this->Parcels->get($id);
        if ($this->Parcels->delete($parcel)) {
            $this->Flash->success(__('The parcel has been deleted.'));
        } else {
            $this->Flash->error(__('The parcel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
