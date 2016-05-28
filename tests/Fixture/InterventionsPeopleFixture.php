<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterventionsPeopleFixture
 *
 */
class InterventionsPeopleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'interventions_people';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'intervention_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'attention_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_intervencion' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_interventions_has_people_people1_idx' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
            'fk_interventions_has_people_interventions1_idx' => ['type' => 'index', 'columns' => ['intervention_id', 'id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'intervention_id', 'person_id'], 'length' => []],
            'fk_interventions_has_people_interventions1' => ['type' => 'foreign', 'columns' => ['intervention_id'], 'references' => ['interventions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_interventions_has_people_people1' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['people', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'intervention_id' => 1,
            'id' => 1,
            'attention_id' => 1,
            'person_id' => 1,
            'tipo_intervencion' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
