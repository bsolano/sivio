<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FollowupsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FollowupsUsersTable Test Case
 */
class FollowupsUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FollowupsUsersTable
     */
    public $FollowupsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.followups_users',
        'app.followups',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.consultations',
        'app.users',
        'app.groups',
        'app.entries',
        'app.people_entries',
        'app.evaluations',
        'app.advocacies',
        'app.people_advocacies',
        'app.internal_references',
        'app.users_people',
        'app.external_references',
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
        $config = TableRegistry::exists('FollowupsUsers') ? [] : ['className' => 'App\Model\Table\FollowupsUsersTable'];
        $this->FollowupsUsers = TableRegistry::get('FollowupsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FollowupsUsers);

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
