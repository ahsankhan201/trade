<?php
namespace App\Model\Table;

use App\Model\Entity\Country;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 */
class CountriesTable extends Table
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

        $this->table('countries');
        $this->displayField('name');
        $this->primaryKey('id_countries');

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
            ->add('id_countries', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_countries', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->allowEmpty('iso_alpha2');

        $validator
            ->allowEmpty('iso_alpha3');

        $validator
            ->add('iso_numeric', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iso_numeric');

        $validator
            ->allowEmpty('currency_code');

        $validator
            ->allowEmpty('currency_name');

        $validator
            ->allowEmpty('currrency_symbol');

        $validator
            ->allowEmpty('flag');

        return $validator;
    }
}
