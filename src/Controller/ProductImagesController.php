<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductImages Controller
 *
 * @property \App\Model\Table\ProductImagesTable $ProductImages
 */
class ProductImagesController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $this->set('productImages', $this->paginate($this->ProductImages));
        $this->set('_serialize', ['productImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Image id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $productImage = $this->ProductImages->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('productImage', $productImage);
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $productImage = $this->ProductImages->newEntity();
        if ($this->request->is('post')) {


            if (!empty($this->request->data['img_path']['name'])) {
                $file = $this->request->data['img_path']; //put the data into a var for easy use

                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension

                $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                $setNewFileName = $this->request->data['img_name'] . "_" . rand(000000, 999999);
                debug($setNewFileName . '.' . $ext);

//only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is 
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/product/' . $setNewFileName . '.' . $ext);

                    //prepare the filename for database entry 
                    $this->request->data['img_path'] = $setNewFileName . '.' . $ext;
                }
            }


            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'products'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Image id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $productImage = $this->ProductImages->get($id, [
            'contain' => []
        ]);
        $old_img = $productImage->img_path;

        if ($this->request->is(['patch', 'post', 'put'])) {

            if (!empty($this->request->data['img_path']['name'])) {
                unlink(WWW_ROOT . '/product/' .$old_img);
                $file = $this->request->data['img_path']; //put the data into a var for easy use

                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension

                $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                $setNewFileName = $this->request->data['img_name'] . "_" . rand(000000, 999999);
                debug($setNewFileName . '.' . $ext);

//only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is 
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/product/' . $setNewFileName . '.' . $ext);

                    //prepare the filename for database entry 
                    $this->request->data['img_path'] = $setNewFileName . '.' . $ext;
                }
            }
            $productImage = $this->ProductImages->patchEntity($productImage, $this->request->data);
            if ($this->ProductImages->save($productImage)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productImage', 'products'));
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Image id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $productImage = $this->ProductImages->get($id);
        if ($this->ProductImages->delete($productImage)) {
            $this->Flash->success(__('The product image has been deleted.'));
        } else {
            $this->Flash->error(__('The product image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
