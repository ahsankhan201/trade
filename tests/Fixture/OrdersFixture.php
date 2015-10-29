<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 *
 */
class OrdersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'customer_id from user id', 'precision' => null, 'autoIncrement' => null],
        'orderName' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'orderPfiNumber' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'orderStatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '0=publishWaiting,1=publish,2=responseWaiting,3=accepted,4=completed', 'precision' => null, 'autoIncrement' => null],
        'orderType' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => 'direct order, commision base order', 'precision' => null, 'fixed' => null],
        'dateCreated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'orderCustomerId' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
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
            'user_id' => 1,
            'orderName' => 'Lorem ipsum dolor sit amet',
            'orderPfiNumber' => 'Lorem ipsum dolor sit amet',
            'orderStatus' => 1,
            'orderType' => 'Lorem ipsum dolor sit amet',
            'dateCreated' => '2015-09-22 06:19:24',
            'dateModified' => 1442902764
        ],
    ];
}
