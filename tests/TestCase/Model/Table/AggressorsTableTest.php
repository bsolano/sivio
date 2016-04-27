<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AggressorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AggressorsTable Test Case
 */
class AggressorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AggressorsTable
     */
    public $Aggressors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aggressors',
        'app.people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aggressors') ? [] : ['className' => 'App\Model\Table\AggressorsTable'];
        $this->Aggressors = TableRegistry::get('Aggressors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aggressors);

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
