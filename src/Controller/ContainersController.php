<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Containers Controller
 *
 * @property \App\Model\Table\ContainersTable $Containers
 */
class ContainersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cunsignments', 'ShippingOffers']
        ];
        $this->set('containers', $this->paginate($this->Containers));
        $this->set('_serialize', ['containers']);
    }

    /**
     * View method
     *
     * @param string|null $id Container id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $container = $this->Containers->get($id, [
            'contain' => ['Cunsignments', 'ShippingOffers']
        ]);
        $this->set('container', $container);
        $this->set('_serialize', ['container']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $container = $this->Containers->newEntity();
        if ($this->request->is('post')) {
            $container = $this->Containers->patchEntity($container, $this->request->data);
            if ($this->Containers->save($container)) {
                $this->Flash->success(__('The container has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The container could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->Containers->Cunsignments->find('list', ['limit' => 200]);
        $shippingOffers = $this->Containers->ShippingOffers->find('list', ['limit' => 200]);
        $this->set(compact('container', 'cunsignments', 'shippingOffers'));
        $this->set('_serialize', ['container']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Container id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $container = $this->Containers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $container = $this->Containers->patchEntity($container, $this->request->data);
            if ($this->Containers->save($container)) {
                $this->Flash->success(__('The container has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The container could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->Containers->Cunsignments->find('list', ['limit' => 200]);
        $shippingOffers = $this->Containers->ShippingOffers->find('list', ['limit' => 200]);
        $this->set(compact('container', 'cunsignments', 'shippingOffers'));
        $this->set('_serialize', ['container']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Container id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $container = $this->Containers->get($id);
        if ($this->Containers->delete($container)) {
            $this->Flash->success(__('The container has been deleted.'));
        } else {
            $this->Flash->error(__('The container could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
