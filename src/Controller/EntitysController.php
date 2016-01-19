<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entitys Controller
 *
 * @property \App\Model\Table\EntitysTable $Entitys
 */
class EntitysController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('entitys', $this->paginate($this->Entitys));
        $this->set('_serialize', ['entitys']);
    }

    /**
     * View method
     *
     * @param string|null $id Entity id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entity = $this->Entitys->get($id, [
            'contain' => ['Entitypics']
        ]);
        $this->set('entity', $entity);
        $this->set('_serialize', ['entity']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entity = $this->Entitys->newEntity();
        if ($this->request->is('post')) {
            $entity = $this->Entitys->patchEntity($entity, $this->request->data);
            if ($this->Entitys->save($entity)) {
                $this->Flash->success(__('The entity has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entity could not be saved. Please, try again.'));
            }
        }
        $entitypics = $this->Entitys->Entitypics->find('list', ['limit' => 200]);
        $this->set(compact('entity', 'entitypics'));
        $this->set('_serialize', ['entity']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entity id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entity = $this->Entitys->get($id, [
            'contain' => ['Entitypics']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entity = $this->Entitys->patchEntity($entity, $this->request->data);
            if ($this->Entitys->save($entity)) {
                $this->Flash->success(__('The entity has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entity could not be saved. Please, try again.'));
            }
        }
        $entitypics = $this->Entitys->Entitypics->find('list', ['limit' => 200]);
        $this->set(compact('entity', 'entitypics'));
        $this->set('_serialize', ['entity']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entity id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entity = $this->Entitys->get($id);
        if ($this->Entitys->delete($entity)) {
            $this->Flash->success(__('The entity has been deleted.'));
        } else {
            $this->Flash->error(__('The entity could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
