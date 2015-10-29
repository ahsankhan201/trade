<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MemberRoles Controller
 *
 * @property \App\Model\Table\MemberRolesTable $MemberRoles
 */
class MemberRolesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('memberRoles', $this->paginate($this->MemberRoles));
        $this->set('_serialize', ['memberRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Member Role id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $memberRole = $this->MemberRoles->get($id, [
            'contain' => []
        ]);
        $this->set('memberRole', $memberRole);
        $this->set('_serialize', ['memberRole']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $memberRole = $this->MemberRoles->newEntity();
        if ($this->request->is('post')) {
            $memberRole = $this->MemberRoles->patchEntity($memberRole, $this->request->data);
            if ($this->MemberRoles->save($memberRole)) {
                $this->Flash->success(__('The member role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The member role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('memberRole'));
        $this->set('_serialize', ['memberRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Member Role id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $memberRole = $this->MemberRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $memberRole = $this->MemberRoles->patchEntity($memberRole, $this->request->data);
            if ($this->MemberRoles->save($memberRole)) {
                $this->Flash->success(__('The member role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The member role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('memberRole'));
        $this->set('_serialize', ['memberRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Member Role id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $memberRole = $this->MemberRoles->get($id);
        if ($this->MemberRoles->delete($memberRole)) {
            $this->Flash->success(__('The member role has been deleted.'));
        } else {
            $this->Flash->error(__('The member role could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
