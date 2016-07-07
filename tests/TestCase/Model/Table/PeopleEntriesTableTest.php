<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleEntriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleEntriesTable Test Case
 */
class PeopleEntriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleEntriesTable
     */
    public $PeopleEntries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_entries',
        'app.people',
        'app.aggressors',
        'app.attentions',
        'app.histories',
        'app.users',
        'app.groups',
        'app.locations',
        'app.internal_references',
        'app.consultations',
        'app.entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.users_people',
        'app.logs',
        'app.interventions_people',
        'app.interventions',
        'app.external_references',
        'app.transfers',
        'app.attentions_people',
        'app.families',
        'app.people_families'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleEntries') ? [] : ['className' => 'App\Model\Table\PeopleEntriesTable'];
        $this->PeopleEntries = TableRegistry::get('PeopleEntries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleEntries);

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
