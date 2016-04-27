<?php
namespace App\Test\TestCase\Controller;

use App\Controller\FollowupsUsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\FollowupsUsersController Test Case
 */
class FollowupsUsersControllerTest extends IntegrationTestCase
{

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
        'app.external_references',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
        'app.advocacies',
        'app.evaluations',
        'app.users',
        'app.groups',
        'app.users_people',
        'app.people_advocacies',
        'app.entries',
        'app.people_entries',
        'app.families',
        'app.people_families'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
