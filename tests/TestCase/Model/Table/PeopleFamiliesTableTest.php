<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleFamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleFamiliesTable Test Case
 */
class PeopleFamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleFamiliesTable
     */
    public $PeopleFamilies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_families',
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
        'app.advocacies',
        'app.evaluations',
        'app.people_advocacies',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
        'app.entries',
        'app.people_entries',
        'app.families',
        'app.users_people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleFamilies') ? [] : ['className' => 'App\Model\Table\PeopleFamiliesTable'];
        $this->PeopleFamilies = TableRegistry::get('PeopleFamilies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleFamilies);

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
