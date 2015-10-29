<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductMakers Controller
 *
 * @property \App\Model\Table\ProductMakersTable $ProductMakers
 */
class ProductMakersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Users']
        ];
        $this->set('productMakers', $this->paginate($this->ProductMakers));
        $this->set('_serialize', ['productMakers']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Maker id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productMaker = $this->ProductMakers->get($id, [
            'contain' => ['Products', 'Users']
        ]);
        $this->set('productMaker', $productMaker);
        $this->set('_serialize', ['productMaker']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productMaker = $this->ProductMakers->newEntity();
        if ($this->request->is('post')) {
            $productMaker = $this->ProductMakers->patchEntity($productMaker, $this->request->data);
            if ($this->ProductMakers->save($productMaker)) {
                $this->Flash->success(__('The product maker has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product maker could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductMakers->Products->find('list', ['limit' => 200]);
        $users = $this->ProductMakers->Users->find('list', ['limit' => 200]);
        $this->set(compact('productMaker', 'products', 'users'));
        $this->set('_serialize', ['productMaker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Maker id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productMaker = $this->ProductMakers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productMaker = $this->ProductMakers->patchEntity($productMaker, $this->request->data);
            if ($this->ProductMakers->save($productMaker)) {
                $this->Flash->success(__('The product maker has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product maker could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductMakers->Products->find('list', ['limit' => 200]);
        $users = $this->ProductMakers->Users->find('list', ['limit' => 200]);
        $this->set(compact('productMaker', 'products', 'users'));
        $this->set('_serialize', ['productMaker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Maker id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productMaker = $this->ProductMakers->get($id);
        if ($this->ProductMakers->delete($productMaker)) {
            $this->Flash->success(__('The product maker has been deleted.'));
        } else {
            $this->Flash->error(__('The product maker could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
