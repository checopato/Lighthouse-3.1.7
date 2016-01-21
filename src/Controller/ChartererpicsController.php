<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chartererpics Controller
 *
 * @property \App\Model\Table\ChartererpicsTable $Chartererpics
 */
class ChartererpicsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Charterers']
        ];
        $this->set('chartererpics', $this->paginate($this->Chartererpics));
        $this->set('_serialize', ['chartererpics']);
    }

    /**
     * View method
     *
     * @param string|null $id Chartererpic id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chartererpic = $this->Chartererpics->get($id, [
            'contain' => ['Charterers']
        ]);
        $this->set('chartererpic', $chartererpic);
        $this->set('_serialize', ['chartererpic']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chartererpic = $this->Chartererpics->newEntity();
        if ($this->request->is('post')) {
            $chartererpic = $this->Chartererpics->patchEntity($chartererpic, $this->request->data);
            if ($this->Chartererpics->save($chartererpic)) {
                $this->Flash->success(__('The chartererpic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chartererpic could not be saved. Please, try again.'));
            }
        }
        $charterers = $this->Chartererpics->Charterers->find('list', ['limit' => 200]);
        $this->set(compact('chartererpic', 'charterers'));
        $this->set('_serialize', ['chartererpic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chartererpic id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chartererpic = $this->Chartererpics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chartererpic = $this->Chartererpics->patchEntity($chartererpic, $this->request->data);
            if ($this->Chartererpics->save($chartererpic)) {
                $this->Flash->success(__('The chartererpic has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chartererpic could not be saved. Please, try again.'));
            }
        }
        $charterers = $this->Chartererpics->Charterers->find('list', ['limit' => 200]);
        $this->set(compact('chartererpic', 'charterers'));
        $this->set('_serialize', ['chartererpic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chartererpic id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chartererpic = $this->Chartererpics->get($id);
        if ($this->Chartererpics->delete($chartererpic)) {
            $this->Flash->success(__('The chartererpic has been deleted.'));
        } else {
            $this->Flash->error(__('The chartererpic could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
