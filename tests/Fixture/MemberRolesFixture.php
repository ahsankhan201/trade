<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MemberRolesFixture
 *
 */
class MemberRolesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'member_roleId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'memberId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'roleId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'memberId' => ['type' => 'index', 'columns' => ['memberId'], 'length' => []],
            'roleId' => ['type' => 'index', 'columns' => ['roleId'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['member_roleId'], 'length' => []],
            'member_roles_ibfk_1' => ['type' => 'foreign', 'columns' => ['memberId'], 'references' => ['members', 'memberId'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'member_roles_ibfk_2' => ['type' => 'foreign', 'columns' => ['roleId'], 'references' => ['roles', 'roleId'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'member_roleId' => 1,
            'memberId' => 1,
            'roleId' => 1
        ],
    ];
}
