<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttentionsPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttentionsPeopleTable Test Case
 */
class AttentionsPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttentionsPeopleTable
     */
    public $AttentionsPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attentions_people',
        'app.attentions',
        'app.aggressors',
        'app.people',
        'app.consultations',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.locations',
        'app.internal_references',
        'app.entries',
        'app.people_entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.users_people',
        'app.external_references',
        'app.histories',
        'app.transfers',
        'app.interventions',
        'app.interventions_people',
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
        $config = TableRegistry::exists('AttentionsPeople') ? [] : ['className' => 'App\Model\Table\AttentionsPeopleTable'];
        $this->AttentionsPeople = TableRegistry::get('AttentionsPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AttentionsPeople);

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
