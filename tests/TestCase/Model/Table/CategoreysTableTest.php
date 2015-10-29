<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoreysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoreysTable Test Case
 */
class CategoreysTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categoreys',
        'app.products',
        'app.product_makers',
        'app.users',
        'app.roles',
        'app.countries',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Categoreys') ? [] : ['className' => 'App\Model\Table\CategoreysTable'];
        $this->Categoreys = TableRegistry::get('Categoreys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categoreys);

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

    /**
     * Test getParentCategory method
     *
     * @return void
     */
    public function testGetParentCategory()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
