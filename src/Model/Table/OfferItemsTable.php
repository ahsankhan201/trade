<?php
namespace App\Model\Table;

use App\Model\Entity\OfferItem;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OfferItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Offers
 * @property \Cake\ORM\Association\BelongsTo $OrderItems
 */
class OfferItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('offer_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Offers', [
            'foreignKey' => 'offers_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('OrderItems', [
            'foreignKey' => 'order_items_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('offer_itemQuantity');

        $validator
            ->requirePresence('offer_itemPrice', 'create')
            ->notEmpty('offer_itemPrice');

        $validator
            ->allowEmpty('offer_itemCommission');

        $validator
            ->allowEmpty('offer_itemFinalPrice');

        $validator
            ->allowEmpty('varantyDiscount');

        $validator
            ->allowEmpty('specialDiscount');

        $validator
            ->add('offer_itemStatus', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('offer_itemStatus');

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
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['offers_id'], 'Offers'));
        $rules->add($rules->existsIn(['order_items_id'], 'OrderItems'));
        return $rules;
    }
}
