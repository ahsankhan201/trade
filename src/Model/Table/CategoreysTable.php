<?php
namespace App\Model\Table;

use App\Model\Entity\Categorey;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoreys Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentCategoreys
 * @property \Cake\ORM\Association\HasMany $ChildCategoreys
 */
class CategoreysTable extends Table
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
        $this->addBehavior('Tree');
        
        $this->table('categoreys');
        $this->displayField('catName');
        $this->primaryKey('id');

        $this->belongsTo('ParentCategoreys', [
            'className' => 'Categoreys',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildCategoreys', [
            'className' => 'Categoreys',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Products', [
            'className' => 'Products',
            'foreignKey' => 'categoreys_id'
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
            ->requirePresence('catName', 'create')
            ->notEmpty('catName');

        $validator
            ->requirePresence('catLabel', 'create')
            ->notEmpty('catLabel');

        $validator
            ->add('catStatus', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('catStatus');

        $validator
            ->add('catSortOrder', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('catSortOrder');

        $validator
            ->allowEmpty('catImg');

        $validator
            ->add('lft', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('lft');

        $validator
            ->add('rght', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rght');

        $validator
            ->allowEmpty('dateCreated');

        $validator
            ->allowEmpty('dateModified');

        $validator
            ->add('displayTop', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('displayTop');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentCategoreys'));
        return $rules;
    }
     
}
