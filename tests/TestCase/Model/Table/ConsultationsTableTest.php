<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultationsTable Test Case
 */
class ConsultationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultationsTable
     */
    public $Consultations;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Consultations') ? [] : ['className' => 'App\Model\Table\ConsultationsTable'];
        $this->Consultations = TableRegistry::get('Consultations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultations);

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
