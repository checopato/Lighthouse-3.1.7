<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entitypics Controller
 *
 * @property \App\Model\Table\EntitypicsTable $Entitypics
 */
class EntitypicsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('entitypics', $this->paginate($this->Entitypics));
        $this->set('_serialize', ['entitypics']);
    }

    /**
     * View method
     *
     * @param string|null $id Entitypic id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entitypic = $this->Entitypics->get($id, [
            'contain' => ['Entitys']
        ]);
        $this->set('entitypic', $entitypic);
        $this->set('_serialize', ['entitypic']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entitypic = $this->Entitypics->newEntity();
        if ($this->request->is('post')) {
            $entitypic = $this->Entitypics->patchEntity($entitypic, $this->request->data);
            if ($this->Entitypics->save($entitypic)) {
                $this->Flash->success(__('The entitypic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entitypic could not be saved. Please, try again.'));
            }
        }
        $entitys = $this->Entitypics->Entitys->find('list', ['limit' => 200]);
        $this->set(compact('entitypic', 'entitys'));
        $this->set('_serialize', ['entitypic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entitypic id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entitypic = $this->Entitypics->get($id, [
            'contain' => ['Entitys']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entitypic = $this->Entitypics->patchEntity($entitypic, $this->request->data);
            if ($this->Entitypics->save($entitypic)) {
                $this->Flash->success(__('The entitypic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entitypic could not be saved. Please, try again.'));
            }
        }
        $entitys = $this->Entitypics->Entitys->find('list', ['limit' => 200]);
        $this->set(compact('entitypic', 'entitys'));
        $this->set('_serialize', ['entitypic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entitypic id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entitypic = $this->Entitypics->get($id);
        if ($this->Entitypics->delete($entitypic)) {
            $this->Flash->success(__('The entitypic has been deleted.'));
        } else {
            $this->Flash->error(__('The entitypic could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
