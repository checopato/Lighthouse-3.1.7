<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntitiesTable Test Case
 */
class EntitiesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entities',
        'app.shipowners',
        'app.entitys',
        'app.fixtures',
        'app.users',
        'app.pics',
        'app.charterers',
        'app.chartererpics',
        'app.shippings',
        'app.commisions',
        'app.parcels',
        'app.ports',
        'app.terminals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Entities') ? [] : ['className' => 'App\Model\Table\EntitiesTable'];
        $this->Entities = TableRegistry::get('Entities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entities);

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
