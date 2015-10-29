<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cunsignments Controller
 *
 * @property \App\Model\Table\CunsignmentsTable $Cunsignments
 */
class CunsignmentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offers', 'Orders']
        ];
        $this->set('cunsignments', $this->paginate($this->Cunsignments));
        $this->set('_serialize', ['cunsignments']);
    }

    /**
     * View method
     *
     * @param string|null $id Cunsignment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cunsignment = $this->Cunsignments->get($id, [
            'contain' => ['Offers', 'Orders']
        ]);
        $this->set('cunsignment', $cunsignment);
        $this->set('_serialize', ['cunsignment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cunsignment = $this->Cunsignments->newEntity();
        if ($this->request->is('post')) {
            $cunsignment = $this->Cunsignments->patchEntity($cunsignment, $this->request->data);
            if ($this->Cunsignments->save($cunsignment)) {
                $this->Flash->success(__('The cunsignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cunsignment could not be saved. Please, try again.'));
            }
        }
        $offers = $this->Cunsignments->Offers->find('list', ['limit' => 200]);
        $orders = $this->Cunsignments->Orders->find('list', ['limit' => 200]);
        $this->set(compact('cunsignment', 'offers', 'orders'));
        $this->set('_serialize', ['cunsignment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cunsignment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cunsignment = $this->Cunsignments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cunsignment = $this->Cunsignments->patchEntity($cunsignment, $this->request->data);
            if ($this->Cunsignments->save($cunsignment)) {
                $this->Flash->success(__('The cunsignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cunsignment could not be saved. Please, try again.'));
            }
        }
        $offers = $this->Cunsignments->Offers->find('list', ['limit' => 200]);
        $orders = $this->Cunsignments->Orders->find('list', ['limit' => 200]);
        $this->set(compact('cunsignment', 'offers', 'orders'));
        $this->set('_serialize', ['cunsignment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cunsignment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cunsignment = $this->Cunsignments->get($id);
        if ($this->Cunsignments->delete($cunsignment)) {
            $this->Flash->success(__('The cunsignment has been deleted.'));
        } else {
            $this->Flash->error(__('The cunsignment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
