<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfferItemsFixture
 *
 */
class OfferItemsFixture extends TestFixture
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
        'order_items_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'offer_itemQuantity' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offer_itemPrice' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offer_itemCommission' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => 'commission amount add for customer view', 'precision' => null, 'fixed' => null],
        'offer_itemFinalPrice' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'varantyDiscount' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'specialDiscount' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'offer_itemStatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '0=inactive, 1= active', 'precision' => null, 'autoIncrement' => null],
        'dateCreated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
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
            'order_items_id' => 1,
            'offer_itemQuantity' => 'Lorem ipsum dolor sit amet',
            'offer_itemPrice' => 'Lorem ipsum dolor ',
            'offer_itemCommission' => 'Lorem ipsum dolor ',
            'offer_itemFinalPrice' => 'Lorem ipsum dolor ',
            'varantyDiscount' => 'Lorem ipsum dolor ',
            'specialDiscount' => 'Lorem ipsum dolor ',
            'offer_itemStatus' => 1,
            'dateCreated' => '2015-09-22 06:19:20',
            'dateModified' => 1442902760
        ],
    ];
}
