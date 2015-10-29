<?php

namespace App\Model\Table;

use App\Model\Entity\CunsignmentItem;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

/**
 * CunsignmentItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cunsignments
 * @property \Cake\ORM\Association\BelongsTo $OfferItems
 */
class CunsignmentItemsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('cunsignment_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Cunsignments', [
            'foreignKey' => 'cunsignments_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OfferItems', [
            'foreignKey' => 'offer_items_id',
            'joinType' => 'INNER'
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
                ->allowEmpty('cunsignment_itemQuantity');

        $validator
                ->allowEmpty('cunsignment_itemPackingList');

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
        $rules->add($rules->existsIn(['cunsignments_id'], 'Cunsignments'));
        $rules->add($rules->existsIn(['offer_items_id'], 'OfferItems'));
        return $rules;
    }

    public function get_product_list() {
        // make array with value is offeritems_id and text show from product table
        ConnectionManager::config('default');
        $conn = ConnectionManager::get('default');
        $product_list = $conn->query("SELECT OfferItems.id AS `OfferItems__id`, Products.productName AS `Products__productName`"
                . " FROM offer_items OfferItems INNER JOIN order_items OrderItems ON OrderItems.id = (OfferItems.order_items_id)"
                . " INNER JOIN products Products ON Products.id = (OrderItems.products_id) LIMIT 20 OFFSET 0");
    
         $offerItem_product_list = [];
         foreach ($product_list as $prod){
             $offerItem_product_list[$prod['OfferItems__id']] = $prod['Products__productName'];
         }
         return $offerItem_product_list;
    }
   

}
