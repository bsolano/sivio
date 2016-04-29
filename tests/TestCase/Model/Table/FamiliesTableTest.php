<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliesTable Test Case
 */
class FamiliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliesTable
     */
    public $Families;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.families',
        'app.people',
        'app.transfers',
        'app.aggressors',
        'app.histories',
        'app.consultations',
        'app.external_references',
        'app.followups',
        'app.internal_references',
        'app.interventions',
        'app.interventions_people',
        'app.advocacies',
        'app.evaluations',
        'app.users',
        'app.groups',
        'app.people_advocacies',
        'app.entries',
        'app.people_entries',
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
        $config = TableRegistry::exists('Families') ? [] : ['className' => 'App\Model\Table\FamiliesTable'];
        $this->Families = TableRegistry::get('Families', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Families);

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