<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransfersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransfersTable Test Case
 */
class TransfersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransfersTable
     */
    public $Transfers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transfers',
        'app.people',
        'app.aggressors',
        'app.histories',
        'app.consultations',
        'app.external_references',
        'app.followups',
        'app.users',
        'app.groups',
        'app.followups_users',
        'app.advocacies',
        'app.evaluations',
        'app.people_advocacies',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
        'app.entries',
        'app.people_entries',
        'app.families',
        'app.people_families',
        'app.users_people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Transfers') ? [] : ['className' => 'App\Model\Table\TransfersTable'];
        $this->Transfers = TableRegistry::get('Transfers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transfers);

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
