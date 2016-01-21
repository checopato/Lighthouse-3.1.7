<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChartererpicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChartererpicsTable Test Case
 */
class ChartererpicsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chartererpics',
        'app.charterers',
        'app.fixtures',
        'app.users',
        'app.pics',
        'app.shipowners',
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
        $config = TableRegistry::exists('Chartererpics') ? [] : ['className' => 'App\Model\Table\ChartererpicsTable'];
        $this->Chartererpics = TableRegistry::get('Chartererpics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chartererpics);

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
