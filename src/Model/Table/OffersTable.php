<?php
namespace App\Model\Table;

use App\Model\Entity\Offer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Orders
 * @property \Cake\ORM\Association\BelongsTo $Members
 */
class OffersTable extends Table
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

        $this->table('offers');
        $this->displayField('offerPfiNumber');
        $this->primaryKey('id');

        $this->belongsTo('Orders', [
            'foreignKey' => 'orders_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Members', [
            'foreignKey' => 'members_id',
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
            ->allowEmpty('offerPfiNumber');

        $validator
            ->add('offerCompleteDate', 'valid', ['rule' => 'date'])
            ->requirePresence('offerCompleteDate', 'create')
            ->notEmpty('offerCompleteDate');

        $validator
            ->requirePresence('offerPaymentType', 'create')
            ->notEmpty('offerPaymentType');

        $validator
            ->add('offerStatus', 'valid', ['rule' => 'numeric'])
            ->requirePresence('offerStatus', 'create')
            ->notEmpty('offerStatus');

        $validator
            ->allowEmpty('offerDetailNote');

        $validator
            ->allowEmpty('offerCommissionType');

        $validator
            ->add('offerCommission', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('offerCommission');

        $validator
            ->allowEmpty('offerOtherCharges');

        $validator
            ->allowEmpty('offerFinanceCharges');

        $validator
            ->add('offerOtherDiscount', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('offerOtherDiscount');

        $validator
            ->allowEmpty('currencyCode');

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
        $rules->add($rules->existsIn(['orders_id'], 'Orders'));
        $rules->add($rules->existsIn(['members_id'], 'Members'));
        return $rules;
    }
}
