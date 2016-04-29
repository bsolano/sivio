<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InterventionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InterventionsTable Test Case
 */
class InterventionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InterventionsTable
     */
    public $Interventions;

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
        'app.users',
        'app.groups',
        'app.entries',
        'app.people_entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.internal_references',
        'app.users_people',
        'app.external_references',
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
        $config = TableRegistry::exists('Interventions') ? [] : ['className' => 'App\Model\Table\InterventionsTable'];
        $this->Interventions = TableRegistry::get('Interventions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Interventions);

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
}
