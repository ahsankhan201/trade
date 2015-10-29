<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CunsignmentItems Controller
 *
 * @property \App\Model\Table\CunsignmentItemsTable $CunsignmentItems
 */
class CunsignmentItemsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
    'contain' => ['Cunsignments', 'OfferItems'=> ['OrderItems'=> ['Products']]]
        ];
        $this->set('cunsignmentItems', $this->paginate($this->CunsignmentItems));
        $this->set('_serialize', ['cunsignmentItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Cunsignment Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cunsignmentItem = $this->CunsignmentItems->get($id, [
            'contain' => ['Cunsignments', 'OfferItems']
        ]);
        $this->set('cunsignmentItem', $cunsignmentItem);
        $this->set('_serialize', ['cunsignmentItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cunsignmentItem = $this->CunsignmentItems->newEntity();
        if ($this->request->is('post')) {
            $cunsignmentItem = $this->CunsignmentItems->patchEntity($cunsignmentItem, $this->request->data);
            if ($this->CunsignmentItems->save($cunsignmentItem)) {
                $this->Flash->success(__('The cunsignment item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cunsignment item could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->CunsignmentItems->Cunsignments->find('list', ['limit' => 200]);
        $offerItems = $this->CunsignmentItems->get_product_list(); //OfferItems->find('list', ['limit' => 200]);
        $this->set(compact('cunsignmentItem', 'cunsignments', 'offerItems'));
        $this->set('_serialize', ['cunsignmentItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cunsignment Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cunsignmentItem = $this->CunsignmentItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cunsignmentItem = $this->CunsignmentItems->patchEntity($cunsignmentItem, $this->request->data);
            if ($this->CunsignmentItems->save($cunsignmentItem)) {
                $this->Flash->success(__('The cunsignment item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cunsignment item could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->CunsignmentItems->Cunsignments->find('list', ['limit' => 200]);
        $offerItems = $this->CunsignmentItems->OfferItems->find('list', ['limit' => 200]);
        $this->set(compact('cunsignmentItem', 'cunsignments', 'offerItems'));
        $this->set('_serialize', ['cunsignmentItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cunsignment Item id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cunsignmentItem = $this->CunsignmentItems->get($id);
        if ($this->CunsignmentItems->delete($cunsignmentItem)) {
            $this->Flash->success(__('The cunsignment item has been deleted.'));
        } else {
            $this->Flash->error(__('The cunsignment item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
