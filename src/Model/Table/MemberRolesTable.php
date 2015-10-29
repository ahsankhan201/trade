<?php
namespace App\Model\Table;

use App\Model\Entity\MemberRole;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MemberRoles Model
 *
 */
class MemberRolesTable extends Table
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

        $this->table('member_roles');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->allowEmpty('member_roleId', 'create');

        $validator
            ->add('memberId', 'valid', ['rule' => 'numeric'])
            ->requirePresence('memberId', 'create')
            ->notEmpty('memberId');

        $validator
            ->add('roleId', 'valid', ['rule' => 'numeric'])
            ->requirePresence('roleId', 'create')
            ->notEmpty('roleId');

        return $validator;
    }
}
