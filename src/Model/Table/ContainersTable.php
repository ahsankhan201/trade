<?php
namespace App\Model\Table;

use App\Model\Entity\Container;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Containers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Cunsignments
 * @property \Cake\ORM\Association\BelongsTo $ShippingOffers
 */
class ContainersTable extends Table
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

        $this->table('containers');
        $this->displayField('containerNumber');
        $this->primaryKey('id');

        $this->belongsTo('Cunsignments', [
            'foreignKey' => 'cunsignments_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ShippingOffers', [
            'foreignKey' => 'shipping_offers_id',
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
            ->allowEmpty('containerNumber');

        $validator
            ->allowEmpty('containerSize');

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
        $rules->add($rules->existsIn(['cunsignments_id'], 'Cunsignments'));
        $rules->add($rules->existsIn(['shipping_offers_id'], 'ShippingOffers'));
        return $rules;
    }
}
