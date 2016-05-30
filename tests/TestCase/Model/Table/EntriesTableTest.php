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
        'app.people',
        'app.aggressors',
        'app.attentions',
        'app.histories',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.consultations',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.internal_references',
        'app.locations',
        'app.users_people',
        'app.interventions_people',
        'app.interventions',
        'app.people_entries',
        'app.external_references',
        'app.transfers',
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
}
