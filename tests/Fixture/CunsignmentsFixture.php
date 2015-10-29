<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CunsignmentsFixture
 *
 */
class CunsignmentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'offers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'orders_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cunsignmentFileNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentArrivalPort' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentDischargePort' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentFinalPort' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentSupplierInvoiceNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentSupplierInvoiceAmount' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentAdminInvoiceNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentAdminInvoiceAmount' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentSupplierPaymentProff' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentSupplierPaymentStatus' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentAdminPaymentProof' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentAdminPaymentStatus' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentCrtManfufacture' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentCrtOrigion' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentCrtQualityControll' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentExportDocumentStatusAdmin' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentDocumentCorrierAdmin' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentdocumentTrackNumberAdmin' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentExportDocumentStatusSupplier' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentDocumentCorrierSupplier' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cunsignmentdocumentTrackNumberSupplier' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'dateCreated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'cunsignmentOfferId' => ['type' => 'index', 'columns' => ['offers_id', 'orders_id'], 'length' => []],
            'cunsignmentOrderID' => ['type' => 'index', 'columns' => ['orders_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'offers_id' => 1,
            'orders_id' => 1,
            'cunsignmentFileNumber' => 'Lorem ipsum dolor sit amet',
            'cunsignmentArrivalPort' => 'Lorem ipsum dolor sit amet',
            'cunsignmentDischargePort' => 'Lorem ipsum dolor sit amet',
            'cunsignmentFinalPort' => 'Lorem ipsum dolor sit amet',
            'cunsignmentSupplierInvoiceNumber' => 'Lorem ipsum dolor sit amet',
            'cunsignmentSupplierInvoiceAmount' => 'Lorem ipsum dolor sit amet',
            'cunsignmentAdminInvoiceNumber' => 'Lorem ipsum dolor sit amet',
            'cunsignmentAdminInvoiceAmount' => 'Lorem ipsum dolor sit amet',
            'cunsignmentSupplierPaymentProff' => 'Lorem ipsum dolor sit amet',
            'cunsignmentSupplierPaymentStatus' => 'Lorem ipsum dolor sit amet',
            'cunsignmentAdminPaymentProof' => 'Lorem ipsum dolor sit amet',
            'cunsignmentAdminPaymentStatus' => 'Lorem ipsum dolor sit amet',
            'cunsignmentCrtManfufacture' => 'Lorem ipsum dolor sit amet',
            'cunsignmentCrtOrigion' => 'Lorem ipsum dolor sit amet',
            'cunsignmentCrtQualityControll' => 'Lorem ipsum dolor sit amet',
            'cunsignmentExportDocumentStatusAdmin' => 'Lorem ipsum dolor sit amet',
            'cunsignmentDocumentCorrierAdmin' => 'Lorem ipsum dolor sit amet',
            'cunsignmentdocumentTrackNumberAdmin' => 'Lorem ipsum dolor sit amet',
            'cunsignmentExportDocumentStatusSupplier' => 'Lorem ipsum dolor sit amet',
            'cunsignmentDocumentCorrierSupplier' => 'Lorem ipsum dolor sit amet',
            'cunsignmentdocumentTrackNumberSupplier' => 'Lorem ipsum dolor sit amet',
            'dateCreated' => '2015-09-22 06:19:17',
            'dateModified' => 1442902757
        ],
    ];
}
