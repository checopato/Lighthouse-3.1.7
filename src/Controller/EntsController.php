<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ents Controller
 *
 * @property \App\Model\Table\EntsTable $Ents
 */
class EntsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shipowners']
        ];
        $this->set('ents', $this->paginate($this->Ents));
        $this->set('_serialize', ['ents']);
    }

    /**
     * View method
     *
     * @param string|null $id Ent id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ent = $this->Ents->get($id, [
            'contain' => ['Shipowners', 'Entpics']
        ]);
        $this->set('ent', $ent);
        $this->set('_serialize', ['ent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ent = $this->Ents->newEntity();
        if ($this->request->is('post')) {
            $ent = $this->Ents->patchEntity($ent, $this->request->data);
            if ($this->Ents->save($ent)) {
                $this->Flash->success(__('The ent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ent could not be saved. Please, try again.'));
            }
        }
        $shipowners = $this->Ents->Shipowners->find('list', ['limit' => 200]);
        $entpics = $this->Ents->Entpics->find('list', ['limit' => 200]);
        $this->set(compact('ent', 'shipowners', 'entpics'));
        $this->set('_serialize', ['ent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ent id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ent = $this->Ents->get($id, [
            'contain' => ['Entpics']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ent = $this->Ents->patchEntity($ent, $this->request->data);
            if ($this->Ents->save($ent)) {
                $this->Flash->success(__('The ent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ent could not be saved. Please, try again.'));
            }
        }
        $shipowners = $this->Ents->Shipowners->find('list', ['limit' => 200]);
        $entpics = $this->Ents->Entpics->find('list', ['limit' => 200]);
        $this->set(compact('ent', 'shipowners', 'entpics'));
        $this->set('_serialize', ['ent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ent id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ent = $this->Ents->get($id);
        if ($this->Ents->delete($ent)) {
            $this->Flash->success(__('The ent has been deleted.'));
        } else {
            $this->Flash->error(__('The ent could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
