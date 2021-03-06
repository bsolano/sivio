<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExternalReferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExternalReferencesTable Test Case
 */
class ExternalReferencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExternalReferencesTable
     */
    public $ExternalReferences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.external_references',
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
        $config = TableRegistry::exists('ExternalReferences') ? [] : ['className' => 'App\Model\Table\ExternalReferencesTable'];
        $this->ExternalReferences = TableRegistry::get('ExternalReferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExternalReferences);

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
