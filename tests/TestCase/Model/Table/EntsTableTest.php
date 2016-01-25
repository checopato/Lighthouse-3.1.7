<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntsTable Test Case
 */
class EntsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ents',
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
        'app.terminals',
        'app.entpics',
        'app.entpics_ents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ents') ? [] : ['className' => 'App\Model\Table\EntsTable'];
        $this->Ents = TableRegistry::get('Ents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ents);

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
