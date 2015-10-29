<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderItems Controller
 *
 * @property \App\Model\Table\OrderItemsTable $OrderItems
 */
class OrderItemsController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->categoreyModel = $this->loadModel('categoreys');

        
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Products']
        ];
        $this->set('orderItems', $this->paginate($this->OrderItems));
        $this->set('_serialize', ['orderItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderItem = $this->OrderItems->get($id, [
            'contain' => ['Orders', 'Products']
        ]);
        $this->set('orderItem', $orderItem);
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderItem = $this->OrderItems->newEntity();
        if ($this->request->is('post')) {
            $orderItem = $this->OrderItems->patchEntity($orderItem, $this->request->data);
            debug($this->request->data);
            exit;
            if ($this->OrderItems->save($orderItem)) {
                $this->Flash->success(__('The order item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order item could not be saved. Please, try again.'));
            }
        }
        $parentCategoreys = $this->categoreyModel->find('list')->where(function ($exp, $q) {
            return $exp->isNull('categoreys.parent_id');
        });
        $orders = $this->OrderItems->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderItems->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderItem', 'orders', 'products','parentCategoreys'));
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderItem = $this->OrderItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderItem = $this->OrderItems->patchEntity($orderItem, $this->request->data);
            if ($this->OrderItems->save($orderItem)) {
                $this->Flash->success(__('The order item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order item could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderItems->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderItems->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderItem', 'orders', 'products'));
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Item id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderItem = $this->OrderItems->get($id);
        if ($this->OrderItems->delete($orderItem)) {
            $this->Flash->success(__('The order item has been deleted.'));
        } else {
            $this->Flash->error(__('The order item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
