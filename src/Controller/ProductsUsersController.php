<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsUsers Controller
 *
 * @property \App\Model\Table\ProductsUsersTable $ProductsUsers
 */
class ProductsUsersController extends AppController
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
        $this->set('productsUsers', $this->paginate($this->ProductsUsers));
        $this->set('_serialize', ['productsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Products User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsUser = $this->ProductsUsers->get($id, [
            'contain' => ['Products', 'Users']
        ]);
        $this->set('productsUser', $productsUser);
        $this->set('_serialize', ['productsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsUser = $this->ProductsUsers->newEntity();
        if ($this->request->is('post')) {
            $productsUser = $this->ProductsUsers->patchEntity($productsUser, $this->request->data);
            if ($this->ProductsUsers->save($productsUser)) {
                $this->Flash->success(__('The products user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products user could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsUsers->Products->find('list', ['limit' => 200]);
        $users = $this->ProductsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('productsUser', 'products', 'users'));
        $this->set('_serialize', ['productsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsUser = $this->ProductsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsUser = $this->ProductsUsers->patchEntity($productsUser, $this->request->data);
            if ($this->ProductsUsers->save($productsUser)) {
                $this->Flash->success(__('The products user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products user could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsUsers->Products->find('list', ['limit' => 200]);
        $users = $this->ProductsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('productsUser', 'products', 'users'));
        $this->set('_serialize', ['productsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsUser = $this->ProductsUsers->get($id);
        if ($this->ProductsUsers->delete($productsUser)) {
            $this->Flash->success(__('The products user has been deleted.'));
        } else {
            $this->Flash->error(__('The products user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
