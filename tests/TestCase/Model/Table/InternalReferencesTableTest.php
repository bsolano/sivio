<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternalReferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternalReferencesTable Test Case
 */
class InternalReferencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternalReferencesTable
     */
    public $InternalReferences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internal_references',
        'app.people',
        'app.aggressors',
        'app.consultations',
        'app.users',
        'app.groups',
        'app.aros',
        'app.acos',
        'app.aros_acos',
        'app.locations',
        'app.entries',
        'app.people_entries',
        'app.attentions',
        'app.histories',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.people_advocacies',
        'app.users_people',
        'app.external_references',
        'app.transfers',
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
        $config = TableRegistry::exists('InternalReferences') ? [] : ['className' => 'App\Model\Table\InternalReferencesTable'];
        $this->InternalReferences = TableRegistry::get('InternalReferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternalReferences);

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
