<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleAdvocaciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleAdvocaciesTable Test Case
 */
class PeopleAdvocaciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleAdvocaciesTable
     */
    public $PeopleAdvocacies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_advocacies',
        'app.people',
        'app.aggressors',
        'app.attentions',
        'app.histories',
        'app.users',
        'app.groups',
        'app.locations',
        'app.internal_references',
        'app.consultations',
        'app.entries',
        'app.evaluations',
        'app.advocacies',
        'app.followups',
        'app.followups_users',
        'app.users_people',
        'app.logs',
        'app.interventions_people',
        'app.people_entries',
        'app.external_references',
        'app.transfers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleAdvocacies') ? [] : ['className' => 'App\Model\Table\PeopleAdvocaciesTable'];
        $this->PeopleAdvocacies = TableRegistry::get('PeopleAdvocacies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleAdvocacies);

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
