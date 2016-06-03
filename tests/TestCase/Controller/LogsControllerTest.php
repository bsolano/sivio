<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LogsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LogsController Test Case
 */
class LogsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logs',
        'app.people',
        'app.aggressors',
        'app.attentions',
        'app.histories',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.locations',
        'app.internal_references',
        'app.consultations',
        'app.entries',
        'app.people_entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.users_people',
        'app.interventions_people',
        'app.interventions',
        'app.attentions_people',
        'app.external_references',
        'app.transfers',
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
