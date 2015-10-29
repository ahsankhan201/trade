<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Categoreys Controller
 *
 * @property \App\Model\Table\CategoreysTable $Categoreys
 */
class CategoreysController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->productModel = $this->loadModel('products');

        $this->loadComponent('Cookie', ['expiry' => '1 day']);
    }

    public function loadCategorey($parent_id = null) {
        $html_id = $parent_id;
        $childs = $this->Categoreys
                ->find('threaded')
                ->find('children', ['for' => $parent_id])
                ->toArray();
        if (empty($childs)) {
            $products = $this->productModel->find('all')->where(['products.categoreys_id' => $parent_id]);
        }
        $parents = $this->Categoreys->find('path', ['for' => $parent_id]);
        $this->set(compact('childs', 'products', 'html_id', 'parents'));
        //$this->layout = false;
        $this->viewBuilder()->layout(false);
    }

    public function index() {
        $this->paginate = [
            'contain' => ['ParentCategoreys']
        ];
        $this->set('categoreys', $this->paginate($this->Categoreys));
        $this->set('_serialize', ['categoreys']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorey id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $categorey = $this->Categoreys->get($id, [
            'contain' => ['ParentCategoreys', 'ChildCategoreys', 'Products']
        ]);
        //$parents = $this->Categoreys->getParentNode($id);
        $parents = $this->Categoreys->find('path', ['for' => $id]);

        $this->set('parents', $parents);
        $this->set('categorey', $categorey);
        $this->set('_serialize', ['categorey']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $categorey = $this->Categoreys->newEntity();
        if ($this->request->is('post')) {
            $categorey = $this->Categoreys->patchEntity($categorey, $this->request->data);
            if ($this->Categoreys->save($categorey)) {
                $this->Flash->success(__('The categorey has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categorey could not be saved. Please, try again.'));
            }
        }
        $parentCategoreys = $this->Categoreys->find('treeList');
        //$parentCategoreys = $this->Categoreys->ParentCategoreys->find('list', ['limit' => 200]);
        $this->set(compact('categorey', 'parentCategoreys'));
        $this->set('_serialize', ['categorey']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorey id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $categorey = $this->Categoreys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorey = $this->Categoreys->patchEntity($categorey, $this->request->data);
            if ($this->Categoreys->save($categorey)) {
                $this->Flash->success(__('The categorey has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categorey could not be saved. Please, try again.'));
            }
        }
        $parentCategoreys = $this->Categoreys->ParentCategoreys->find('list', ['limit' => 200]);
        $this->set(compact('categorey', 'parentCategoreys'));
        $this->set('_serialize', ['categorey']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorey id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $categorey = $this->Categoreys->get($id);
        if ($this->Categoreys->delete($categorey)) {
            $this->Flash->success(__('The categorey has been deleted.'));
        } else {
            $this->Flash->error(__('The categorey could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
