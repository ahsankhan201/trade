<?php

namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categoreys
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class ProductsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('products');
        $this->displayField('productName');
        $this->primaryKey('id');

        $this->belongsTo('Categoreys', [
            'foreignKey' => 'categoreys_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'products_id',
            'targetForeignKey' => 'users_id',
            'joinTable' => 'products_users'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('productName', 'create')
                ->notEmpty('productName');

        $validator
                ->add('productPrice', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('productPrice');

        $validator
                ->allowEmpty('productDetail');

        $validator
                ->add('productStatus', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('productStatus');

        $validator
                ->add('productSortOrder', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('productSortOrder');

        $validator
                ->add('displayTop', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('displayTop');

        $validator
                ->add('dateCreated', 'valid', ['rule' => 'datetime'])
                ->allowEmpty('dateCreated');

        $validator
                ->allowEmpty('dateModified');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['categoreys_id'], 'Categoreys'));
        return $rules;
    }

    public static function get_related_products($parent_id, $product_id) {
        ConnectionManager::config('default');
        $conn = ConnectionManager::get('default');

       /* $product_list = $conn->query("SELECT products.*, product_makers.products_id As ProdMakerId FROM products
            INNER JOIN
            product_makers ON product_makers.id = products.product_makers_id
            WHERE
            product_makers.users_id = (SELECT product_makers.users_id AS MakerID FROM products 
            LEFT JOIN 
            product_makers ON product_makers.id = products.product_makers_id 
            WHERE 
            products.id = '" . $product_id . "') AND products.id != '" . $product_id . "'"); */
        $product_list = $conn->query("SELECT products.* FROM products WHERE products.id != '".$product_id."'"
                . " AND products.categoreys_id IN(("
                . "SELECT categoreys.id FROM categoreys WHERE categoreys.parent_id =("
                . "SELECT categoreys.parent_id FROM categoreys WHERE categoreys.id= '".$parent_id ."')))");
        return $product_list;
    }

}
