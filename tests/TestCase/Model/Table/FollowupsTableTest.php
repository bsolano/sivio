<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FollowupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FollowupsTable Test Case
 */
class FollowupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FollowupsTable
     */
    public $Followups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.followups',
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
        'app.people_advocacies',
        'app.followups_users',
        'app.users_people',
        'app.logs',
        'app.interventions_people',
        'app.people_entries',
        'app.external_references',
        'app.transfers',
        'app.interventions',
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
        $config = TableRegistry::exists('Followups') ? [] : ['className' => 'App\Model\Table\FollowupsTable'];
        $this->Followups = TableRegistry::get('Followups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Followups);

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
