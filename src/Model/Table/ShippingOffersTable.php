<?php
namespace App\Model\Table;

use App\Model\Entity\ShippingOffer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShippingOffers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cunsignments
 * @property \Cake\ORM\Association\BelongsTo $Members
 */
class ShippingOffersTable extends Table
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

        $this->table('shipping_offers');
        $this->displayField('shipping_offerShippingCompany');
        $this->primaryKey('id');

        $this->belongsTo('Cunsignments', [
            'foreignKey' => 'cunsignments_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
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
            ->allowEmpty('shipping_offerShippingCompany');

        $validator
            ->allowEmpty('shipping_offerRoutWayType');

        $validator
            ->allowEmpty('shipping_offerTrackingNumber');

        $validator
            ->add('shipping_offerEstimateTimeArrival', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('shipping_offerEstimateTimeArrival');

        $validator
            ->add('shipping_offerEstimateTimeDeparture', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('shipping_offerEstimateTimeDeparture');

        $validator
            ->add('shipping_offerEstimateTransitTime', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('shipping_offerEstimateTransitTime');

        $validator
            ->add('shipping_offerFreeTime', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('shipping_offerFreeTime');

        $validator
            ->allowEmpty('shipping_offerFreight');

        $validator
            ->add('shipping_offerStatus', 'valid', ['rule' => 'numeric'])
            ->requirePresence('shipping_offerStatus', 'create')
            ->notEmpty('shipping_offerStatus');

        $validator
            ->add('dateCreated', 'valid', ['rule' => 'datetime'])
            ->requirePresence('dateCreated', 'create')
            ->notEmpty('dateCreated');

        $validator
            ->requirePresence('dateModified', 'create')
            ->notEmpty('dateModified');

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
        $rules->add($rules->existsIn(['cunsignments_id'], 'Cunsignments'));
        $rules->add($rules->existsIn(['member_id'], 'Members'));
        return $rules;
    }
}
