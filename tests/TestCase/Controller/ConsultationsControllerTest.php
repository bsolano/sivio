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
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.external_references',
        'app.followups',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.entries',
        'app.people_entries',
        'app.evaluations',
        'app.advocacies',
        'app.people_advocacies',
        'app.followups_users',
        'app.internal_references',
        'app.users_people',
        'app.interventions',
        'app.interventions_people',
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
