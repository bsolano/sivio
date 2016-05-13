<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ConsultationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ConsultationsController Test Case
 */
class ConsultationsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultations',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.entries',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.external_references',
        'app.followups',
        'app.followups_users',
        'app.advocacies',
        'app.evaluations',
        'app.people_advocacies',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
        'app.people_entries',
        'app.families',
        'app.people_families',
        'app.users_people'
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
