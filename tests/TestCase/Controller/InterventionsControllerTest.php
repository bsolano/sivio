<?php
namespace App\Test\TestCase\Controller;

use App\Controller\InterventionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\InterventionsController Test Case
 */
class InterventionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.interventions',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.consultations',
        'app.external_references',
        'app.followups',
        'app.users',
        'app.groups',
        'app.followups_users',
        'app.users_people',
        'app.advocacies',
        'app.evaluations',
        'app.people_advocacies',
        'app.internal_references',
        'app.interventions_people',
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
