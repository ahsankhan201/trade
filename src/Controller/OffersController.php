<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offers Controller
 *
 * @property \App\Model\Table\OffersTable $Offers
 */
class OffersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Members']
        ];
        $this->set('offers', $this->paginate($this->Offers));
        $this->set('_serialize', ['offers']);
    }

    /**
     * View method
     *
     * @param string|null $id Offer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offer = $this->Offers->get($id, [
            'contain' => ['Orders', 'Members']
        ]);
        $this->set('offer', $offer);
        $this->set('_serialize', ['offer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offer = $this->Offers->newEntity();
        if ($this->request->is('post')) {
            $offer = $this->Offers->patchEntity($offer, $this->request->data);
            if ($this->Offers->save($offer)) {
                $this->Flash->success(__('The offer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offer could not be saved. Please, try again.'));
            }
        }
        $orders = $this->Offers->Orders->find('list', ['limit' => 200]);
        $members = $this->Offers->Members->find('list', ['limit' => 200]);
        $this->set(compact('offer', 'orders', 'members'));
        $this->set('_serialize', ['offer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offer = $this->Offers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offer = $this->Offers->patchEntity($offer, $this->request->data);
            if ($this->Offers->save($offer)) {
                $this->Flash->success(__('The offer has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offer could not be saved. Please, try again.'));
            }
        }
        $orders = $this->Offers->Orders->find('list', ['limit' => 200]);
        $members = $this->Offers->Members->find('list', ['limit' => 200]);
        $this->set(compact('offer', 'orders', 'members'));
        $this->set('_serialize', ['offer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offer = $this->Offers->get($id);
        if ($this->Offers->delete($offer)) {
            $this->Flash->success(__('The offer has been deleted.'));
        } else {
            $this->Flash->error(__('The offer could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
