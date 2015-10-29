<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OffersFixture
 *
 */
class OffersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'orders_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'offerPfiNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'members_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'offerCompleteDate' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'offerPaymentType' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offerStatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0=publishWaiting,1=publish,2=responseWaiting,3=accepted,4=ready for deliver, 5=deliver to cargo company', 'precision' => null, 'autoIncrement' => null],
        'offerDetailNote' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offerCommissionType' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'commission percentage on all items, seprate commission on each item', 'precision' => null, 'fixed' => null],
        'offerCommission' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'if percentage then insert how much percent'],
        'offerOtherCharges' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offerFinanceCharges' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offerOtherDiscount' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'currencyCode' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'dateCreated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'offerOrderId' => ['type' => 'index', 'columns' => ['orders_id'], 'length' => []],
            'offerMemberId' => ['type' => 'index', 'columns' => ['members_id'], 'length' => []],
            'offerCurrencyId' => ['type' => 'index', 'columns' => ['currencyCode'], 'length' => []],
            'offerCurrencyId_2' => ['type' => 'index', 'columns' => ['currencyCode'], 'length' => []],
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
            'orders_id' => 1,
            'offerPfiNumber' => 'Lorem ipsum dolor sit amet',
            'members_id' => 1,
            'offerCompleteDate' => '2015-09-22',
            'offerPaymentType' => 'Lorem ipsum dolor sit amet',
            'offerStatus' => 1,
            'offerDetailNote' => 'Lorem ipsum dolor sit amet',
            'offerCommissionType' => 'Lorem ipsum dolor sit amet',
            'offerCommission' => 1,
            'offerOtherCharges' => 'Lorem ipsum dolor sit amet',
            'offerFinanceCharges' => 'Lorem ipsum dolor sit amet',
            'offerOtherDiscount' => 1,
            'currencyCode' => 'Lorem ip',
            'dateCreated' => '2015-09-22 06:19:21',
            'dateModified' => 1442902761
        ],
    ];
}
