<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BusesTable Test Case
 */
class BusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BusesTable
     */
    public $Buses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Buses',
        'app.Tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Buses') ? [] : ['className' => BusesTable::class];
        $this->Buses = TableRegistry::getTableLocator()->get('Buses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Buses);

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
}
