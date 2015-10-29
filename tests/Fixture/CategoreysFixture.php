<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoreysFixture
 *
 */
class CategoreysFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'parent_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'catName' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'catLabel' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => 'label to show on top of dropdown', 'precision' => null, 'fixed' => null],
        'catStatus' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '1= active, 0 deactive', 'precision' => null, 'autoIncrement' => null],
        'catSortOrder' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '1,2,3 integer', 'precision' => null, 'autoIncrement' => null],
        'catImg' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'lft' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rght' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dateCreated' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'dateModified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'displayTop' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '1= show on front page, 0= hide from front listing, default 1', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'parent_id' => ['type' => 'index', 'columns' => ['parent_id'], 'length' => []],
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
            'parent_id' => 1,
            'catName' => 'Lorem ipsum dolor sit amet',
            'catLabel' => 'Lorem ipsum dolor sit amet',
            'catStatus' => 1,
            'catSortOrder' => 1,
            'catImg' => 'Lorem ipsum dolor sit amet',
            'lft' => 1,
            'rght' => 1,
            'dateCreated' => 1443217969,
            'dateModified' => 1443217969,
            'displayTop' => 1
        ],
    ];
}
