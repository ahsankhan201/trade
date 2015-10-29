<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CunsignmentItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CunsignmentItemsTable Test Case
 */
class CunsignmentItemsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cunsignment_items',
        'app.cunsignments',
        'app.offers',
        'app.orders',
        'app.users',
        'app.roles',
        'app.countries',
        'app.members',
        'app.shipping_offers',
        'app.offer_items',
        'app.order_items',
        'app.products',
        'app.categoreys',
        'app.product_makers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CunsignmentItems') ? [] : ['className' => 'App\Model\Table\CunsignmentItemsTable'];
        $this->CunsignmentItems = TableRegistry::get('CunsignmentItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CunsignmentItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
