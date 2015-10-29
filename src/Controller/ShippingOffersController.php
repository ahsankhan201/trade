<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShippingOffers Controller
 *
 * @property \App\Model\Table\ShippingOffersTable $ShippingOffers
 */
class ShippingOffersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cunsignments', 'Members']
        ];
        $this->set('shippingOffers', $this->paginate($this->ShippingOffers));
        $this->set('_serialize', ['shippingOffers']);
    }

    /**
     * View method
     *
     * @param string|null $id Shipping Offer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shippingOffer = $this->ShippingOffers->get($id, [
            'contain' => ['Cunsignments', 'Members']
        ]);
        $this->set('shippingOffer', $shippingOffer);
        $this->set('_serialize', ['shippingOffer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shippingOffer = $this->ShippingOffers->newEntity();
        if ($this->request->is('post')) {
            $shippingOffer = $this->ShippingOffers->patchEntity($shippingOffer, $this->request->data);
            if ($this->ShippingOffers->save($shippingOffer)) {
                $this->Flash->success(__('The shipping offer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shipping offer could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->ShippingOffers->Cunsignments->find('list', ['limit' => 200]);
        $members = $this->ShippingOffers->Members->find('list', ['limit' => 200]);
        $this->set(compact('shippingOffer', 'cunsignments', 'members'));
        $this->set('_serialize', ['shippingOffer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping Offer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shippingOffer = $this->ShippingOffers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shippingOffer = $this->ShippingOffers->patchEntity($shippingOffer, $this->request->data);
            if ($this->ShippingOffers->save($shippingOffer)) {
                $this->Flash->success(__('The shipping offer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shipping offer could not be saved. Please, try again.'));
            }
        }
        $cunsignments = $this->ShippingOffers->Cunsignments->find('list', ['limit' => 200]);
        $members = $this->ShippingOffers->Members->find('list', ['limit' => 200]);
        $this->set(compact('shippingOffer', 'cunsignments', 'members'));
        $this->set('_serialize', ['shippingOffer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping Offer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shippingOffer = $this->ShippingOffers->get($id);
        if ($this->ShippingOffers->delete($shippingOffer)) {
            $this->Flash->success(__('The shipping offer has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping offer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
