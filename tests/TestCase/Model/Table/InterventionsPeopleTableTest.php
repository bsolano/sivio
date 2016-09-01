<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InterventionsPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InterventionsPeopleTable Test Case
 */
class InterventionsPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InterventionsPeopleTable
     */
    public $InterventionsPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.interventions_people',
        'app.interventions',
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
        'app.people_entries',
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
        $config = TableRegistry::exists('InterventionsPeople') ? [] : ['className' => 'App\Model\Table\InterventionsPeopleTable'];
        $this->InterventionsPeople = TableRegistry::get('InterventionsPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InterventionsPeople);

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
