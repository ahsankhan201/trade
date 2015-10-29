<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Roles
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\HasMany $Orders
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('firstName');
        $this->primaryKey('id');

        $this->belongsTo('Roles', [
            'foreignKey' => 'roles_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'countries_id'
        ]);
        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'users_id',
            'targetForeignKey' => 'products_id',
            'joinTable' => 'products_users',           
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
            ->requirePresence('userEmail', 'create')
            ->notEmpty('userEmail');

        $validator
            ->requirePresence('firstName', 'create')
            ->notEmpty('firstName');

        $validator
            ->requirePresence('lastName', 'create')
            ->notEmpty('lastName');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->allowEmpty('companyName');

        $validator
            ->allowEmpty('companyAdress');

        $validator
            ->allowEmpty('companyWebAdress');

        $validator
            ->allowEmpty('userImg');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->add('userAuthUrl', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userAuthUrl');

        $validator
            ->add('userStatus', 'valid', ['rule' => 'numeric'])
            ->requirePresence('userStatus', 'create')
            ->notEmpty('userStatus');

        $validator
            ->add('lastLoginOn', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('lastLoginOn');

        $validator
            ->add('admin', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('admin');

        $validator
            ->add('dateCreated', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('dateCreated');

        $validator
            ->allowEmpty('dateModified');

        $validator
            ->allowEmpty('salt');

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
        $rules->add($rules->existsIn(['roles_id'], 'Roles'));
        $rules->add($rules->existsIn(['countries_id'], 'Countries'));
        return $rules;
    }
}
