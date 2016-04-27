<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoriesTable Test Case
 */
class HistoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoriesTable
     */
    public $Histories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.histories',
        'app.people',
        'app.transfers',
        'app.aggressors',
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
        'app.people_families',
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
        $config = TableRegistry::exists('Histories') ? [] : ['className' => 'App\Model\Table\HistoriesTable'];
        $this->Histories = TableRegistry::get('Histories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Histories);

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
