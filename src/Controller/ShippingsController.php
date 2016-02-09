<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Shippings Controller
 *
 * @property \App\Model\Table\ShippingsTable $Shippings
 */
class ShippingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fixtures']
        ];
        $this->set('shippings', $this->paginate($this->Shippings));
        $this->set('_serialize', ['shippings']);
    }

    /**
     * View method
     *
     * @param string|null $id Shipping id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shipping = $this->Shippings->get($id, [
            'contain' => ['Fixtures', 'Commisions', 'Parcels']
        ]);
        $this->set('shipping', $shipping);
        $this->set('_serialize', ['shipping']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($fix = null)
    {
        $shipping = $this->Shippings->newEntity();
        if ($this->request->is('post')) {

            if ($this->request->data['laycan_com'] != null) 
            {
                $this->request->data['laycan_com'] = Time::createFromFormat('m/d/Y',$this->request->data['laycan_com'],'UTC');
                $this->request->data['laycan_end'] = Time::createFromFormat('m/d/Y',$this->request->data['laycan_end'],'UTC');
            }

            $shipping = $this->Shippings->patchEntity($shipping, $this->request->data);

            if ($this->Shippings->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));
                return $this->redirect(['controller' => 'Fixtures' , 'action' => 'view' , $fix]);
            } else {
                $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
            }
        }

        $fixtures = $this->Shippings->Fixtures->find('list', ['limit' => 200]);
        $this->set(compact('shipping', 'fixtures'));
        $this->set('_serialize', ['shipping']);
        $fixture = $this->Shippings->Fixtures->get($fix);
        $this->set('fixture', $fixture);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shipping = $this->Shippings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shipping = $this->Shippings->patchEntity($shipping, $this->request->data);
            if ($this->Shippings->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
            }
        }
        $fixtures = $this->Shippings->Fixtures->find('list', ['limit' => 200]);
        $this->set(compact('shipping', 'fixtures'));
        $this->set('_serialize', ['shipping']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shipping = $this->Shippings->get($id);
        if ($this->Shippings->delete($shipping)) {
            $this->Flash->success(__('The shipping has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
