<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OfferItems Controller
 *
 * @property \App\Model\Table\OfferItemsTable $OfferItems
 */
class OfferItemsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offers', 'OrderItems'=>['Products']]
        ];
        $this->set('offerItems', $this->paginate($this->OfferItems));
        $this->set('_serialize', ['offerItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Offer Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offerItem = $this->OfferItems->get($id, [
            'contain' => ['Offers', 'OrderItems']
        ]);
        $this->set('offerItem', $offerItem);
        $this->set('_serialize', ['offerItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offerItem = $this->OfferItems->newEntity();
        if ($this->request->is('post')) {
            $offerItem = $this->OfferItems->patchEntity($offerItem, $this->request->data);
            if ($this->OfferItems->save($offerItem)) {
                $this->Flash->success(__('The offer item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offer item could not be saved. Please, try again.'));
            }
        }
        $offers = $this->OfferItems->Offers->find('list', ['limit' => 200]);
        $orderItems = $this->OfferItems->OrderItems->find('list', ['limit' => 200]);
        $this->set(compact('offerItem', 'offers', 'orderItems'));
        $this->set('_serialize', ['offerItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offer Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offerItem = $this->OfferItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offerItem = $this->OfferItems->patchEntity($offerItem, $this->request->data);
            if ($this->OfferItems->save($offerItem)) {
                $this->Flash->success(__('The offer item has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offer item could not be saved. Please, try again.'));
            }
        }
        $offers = $this->OfferItems->Offers->find('list', ['limit' => 200]);
        $orderItems = $this->OfferItems->OrderItems->find('list', ['limit' => 200]);
        $this->set(compact('offerItem', 'offers', 'orderItems'));
        $this->set('_serialize', ['offerItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offer Item id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offerItem = $this->OfferItems->get($id);
        if ($this->OfferItems->delete($offerItem)) {
            $this->Flash->success(__('The offer item has been deleted.'));
        } else {
            $this->Flash->error(__('The offer item could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
