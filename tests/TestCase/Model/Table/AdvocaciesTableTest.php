<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdvocaciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdvocaciesTable Test Case
 */
class AdvocaciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdvocaciesTable
     */
    public $Advocacies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.advocacies',
        'app.evaluations',
        'app.followups',
        'app.people',
        'app.people_advocacies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Advocacies') ? [] : ['className' => 'App\Model\Table\AdvocaciesTable'];
        $this->Advocacies = TableRegistry::get('Advocacies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Advocacies);

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
