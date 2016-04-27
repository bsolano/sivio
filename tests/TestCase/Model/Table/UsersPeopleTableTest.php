<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersPeopleTable Test Case
 */
class UsersPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersPeopleTable
     */
    public $UsersPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_people',
        'app.users',
        'app.groups',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.consultations',
        'app.external_references',
        'app.followups',
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
        $config = TableRegistry::exists('UsersPeople') ? [] : ['className' => 'App\Model\Table\UsersPeopleTable'];
        $this->UsersPeople = TableRegistry::get('UsersPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersPeople);

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
