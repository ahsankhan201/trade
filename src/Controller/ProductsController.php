<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function relatedProduct($id) {

        $product_cat_id = $this->Products->get($id, ['fields' => ['categoreys_id']]);
        $related_product = $this->Products->find('all', ['conditions' => ['products.categoreys_id =' => $product_cat_id->categoreys_id, 'products.id !=' => $id]]);

        if ($related_product->isEmpty()) {

            $related_product = $this->Products->get_related_products($product_cat_id->categoreys_id, $id);
            //debug($product);
        }
////$product = $this->Products->Categoreys->find('path', ['for' => $product->categoreys_id]);
        //$product =$this->Products->get_related_products($id);
        $this->set(compact('related_product'));

        $this->viewBuilder()->layout(false);
    }

    public function index() {
        $this->paginate = [
            'contain' => ['Categoreys']
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $product = $this->Products->get($id, [
            'contain' => ['Categoreys', 'Users']
        ]);
        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    public function viewPdf($id = null) {
        $product = $this->Products->get($id, [
            'contain' => ['Categoreys', 'Users']
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);

        $this->pdfConfig = array(
            'download' => true,
            'orientation' => 'portrait',
            'filename' => 'Invoice_' . $id
        );
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categoreys = $this->Products->Categoreys->find('list', ['limit' => 200]);
        $users = $this->Products->Users->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categoreys', 'users'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $product = $this->Products->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $categoreys = $this->Products->Categoreys->find('list', ['limit' => 200]);
        $users = $this->Products->Users->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categoreys', 'users'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
