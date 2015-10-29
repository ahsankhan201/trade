<?php
namespace App\Model\Table;

use App\Model\Entity\Cunsignment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cunsignments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Offers
 * @property \Cake\ORM\Association\BelongsTo $Orders
 */
class CunsignmentsTable extends Table
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

        $this->table('cunsignments');
        $this->displayField('cunsignmentFileNumber');
        $this->primaryKey('id');

        $this->belongsTo('Offers', [
            'foreignKey' => 'offers_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'orders_id',
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
            ->allowEmpty('cunsignmentFileNumber');

        $validator
            ->allowEmpty('cunsignmentArrivalPort');

        $validator
            ->allowEmpty('cunsignmentDischargePort');

        $validator
            ->allowEmpty('cunsignmentFinalPort');

        $validator
            ->allowEmpty('cunsignmentSupplierInvoiceNumber');

        $validator
            ->allowEmpty('cunsignmentSupplierInvoiceAmount');

        $validator
            ->allowEmpty('cunsignmentAdminInvoiceNumber');

        $validator
            ->allowEmpty('cunsignmentAdminInvoiceAmount');

        $validator
            ->allowEmpty('cunsignmentSupplierPaymentProff');

        $validator
            ->allowEmpty('cunsignmentSupplierPaymentStatus');

        $validator
            ->requirePresence('cunsignmentAdminPaymentProof', 'create')
            ->notEmpty('cunsignmentAdminPaymentProof');

        $validator
            ->requirePresence('cunsignmentAdminPaymentStatus', 'create')
            ->notEmpty('cunsignmentAdminPaymentStatus');

        $validator
            ->allowEmpty('cunsignmentCrtManfufacture');

        $validator
            ->allowEmpty('cunsignmentCrtOrigion');

        $validator
            ->allowEmpty('cunsignmentCrtQualityControll');

        $validator
            ->allowEmpty('cunsignmentExportDocumentStatusAdmin');

        $validator
            ->allowEmpty('cunsignmentDocumentCorrierAdmin');

        $validator
            ->allowEmpty('cunsignmentdocumentTrackNumberAdmin');

        $validator
            ->allowEmpty('cunsignmentExportDocumentStatusSupplier');

        $validator
            ->allowEmpty('cunsignmentDocumentCorrierSupplier');

        $validator
            ->allowEmpty('cunsignmentdocumentTrackNumberSupplier');

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
        $rules->add($rules->existsIn(['orders_id'], 'Orders'));
        return $rules;
    }
}
