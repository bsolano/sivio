<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttentionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttentionsTable Test Case
 */
class AttentionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttentionsTable
     */
    public $Attentions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attentions',
        'app.aggressors',
        'app.people',
        'app.consultations',
        'app.users',
        'app.groups',
        'app.locations',
        'app.internal_references',
        'app.entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.people_advocacies',
        'app.followups_users',
        'app.users_people',
        'app.external_references',
        'app.histories',
        'app.logs',
        'app.transfers',
        'app.interventions',
        'app.interventions_people',
        'app.people_entries',
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
        $config = TableRegistry::exists('Attentions') ? [] : ['className' => 'App\Model\Table\AttentionsTable'];
        $this->Attentions = TableRegistry::get('Attentions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attentions);

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
