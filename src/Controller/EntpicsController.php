<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entpics Controller
 *
 * @property \App\Model\Table\EntpicsTable $Entpics
 */
class EntpicsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('entpics', $this->paginate($this->Entpics));
        $this->set('_serialize', ['entpics']);
    }

    /**
     * View method
     *
     * @param string|null $id Entpic id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entpic = $this->Entpics->get($id, [
            'contain' => ['Ents']
        ]);
        $this->set('entpic', $entpic);
        $this->set('_serialize', ['entpic']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entpic = $this->Entpics->newEntity();
        if ($this->request->is('post')) {
            $entpic = $this->Entpics->patchEntity($entpic, $this->request->data);
            if ($this->Entpics->save($entpic)) {
                $this->Flash->success(__('The entpic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entpic could not be saved. Please, try again.'));
            }
        }
        $ents = $this->Entpics->Ents->find('list', ['limit' => 200]);
        $this->set(compact('entpic', 'ents'));
        $this->set('_serialize', ['entpic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entpic id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entpic = $this->Entpics->get($id, [
            'contain' => ['Ents']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entpic = $this->Entpics->patchEntity($entpic, $this->request->data);
            if ($this->Entpics->save($entpic)) {
                $this->Flash->success(__('The entpic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entpic could not be saved. Please, try again.'));
            }
        }
        $ents = $this->Entpics->Ents->find('list', ['limit' => 200]);
        $this->set(compact('entpic', 'ents'));
        $this->set('_serialize', ['entpic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entpic id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entpic = $this->Entpics->get($id);
        if ($this->Entpics->delete($entpic)) {
            $this->Flash->success(__('The entpic has been deleted.'));
        } else {
            $this->Flash->error(__('The entpic could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
