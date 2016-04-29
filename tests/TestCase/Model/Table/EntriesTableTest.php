<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntriesTable Test Case
 */
class EntriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntriesTable
     */
    public $Entries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entries',
        'app.users',
        'app.groups',
        'app.consultations',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.external_references',
        'app.followups',
        'app.followups_users',
        'app.advocacies',
        'app.evaluations',
        'app.people_advocacies',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
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
        $config = TableRegistry::exists('Entries') ? [] : ['className' => 'App\Model\Table\EntriesTable'];
        $this->Entries = TableRegistry::get('Entries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entries);

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
