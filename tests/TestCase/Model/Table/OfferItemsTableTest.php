<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfferItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfferItemsTable Test Case
 */
class OfferItemsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.offer_items',
        'app.offers',
        'app.orders',
        'app.users',
        'app.roles',
        'app.countries',
        'app.members',
        'app.shipping_offers',
        'app.cunsignments',
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
        $config = TableRegistry::exists('OfferItems') ? [] : ['className' => 'App\Model\Table\OfferItemsTable'];
        $this->OfferItems = TableRegistry::get('OfferItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfferItems);

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
