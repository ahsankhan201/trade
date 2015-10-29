<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ShippingOffersFixture
 *
 */
class ShippingOffersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cunsignments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'member_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'member id user role will be shipper', 'precision' => null, 'autoIncrement' => null],
        'shipping_offerShippingCompany' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'shipping_offerRoutWayType' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'way= by air, by ship', 'precision' => null, 'fixed' => null],
        'shipping_offerTrackingNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'bill of lading number or awb number', 'precision' => null, 'fixed' => null],
        'shipping_offerEstimateTimeArrival' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'shipping_offerEstimateTimeDeparture' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'shipping_offerEstimateTransitTime' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'shipping_offerFreeTime' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'shipping_offerFreight' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'shipping_offerStatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '0=waiting for accept,1=accept', 'precision' => null, 'autoIncrement' => null],
        'dateCreated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'shipping_offerCunsignmentId' => ['type' => 'index', 'columns' => ['cunsignments_id'], 'length' => []],
            'shipping_offerShipperId' => ['type' => 'index', 'columns' => ['member_id'], 'length' => []],
            'shipping_offerShipperId_2' => ['type' => 'index', 'columns' => ['member_id'], 'length' => []],
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
            'cunsignments_id' => 1,
            'member_id' => 1,
            'shipping_offerShippingCompany' => 'Lorem ipsum dolor sit amet',
            'shipping_offerRoutWayType' => 'Lorem ipsum dolor sit amet',
            'shipping_offerTrackingNumber' => 'Lorem ipsum dolor sit amet',
            'shipping_offerEstimateTimeArrival' => 1,
            'shipping_offerEstimateTimeDeparture' => 1,
            'shipping_offerEstimateTransitTime' => 1,
            'shipping_offerFreeTime' => 1,
            'shipping_offerFreight' => 'Lorem ipsum dolor sit amet',
            'shipping_offerStatus' => 1,
            'dateCreated' => '2015-09-22 06:19:32',
            'dateModified' => 1442902772
        ],
    ];
}
