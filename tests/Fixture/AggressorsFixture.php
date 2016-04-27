<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AggressorsFixture
 *
 */
class AggressorsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'vinculo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tiempo_relacion' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tiempo_agresion' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'num_separaciones' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'people_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'people_aggressors_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_aggressors_people1_idx' => ['type' => 'index', 'columns' => ['people_id', 'people_aggressors_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'people_id', 'people_aggressors_id'], 'length' => []],
            'fk_aggressors_people1' => ['type' => 'foreign', 'columns' => ['people_id', 'people_aggressors_id'], 'references' => ['people', '1' => ['id', 'aggressors_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'person_id' => 1,
            'id' => 1,
            'vinculo' => 'Lorem ipsum dolor sit amet',
            'tiempo_relacion' => 'Lorem ipsum dolor sit amet',
            'tiempo_agresion' => 'Lorem ipsum dolor sit amet',
            'num_separaciones' => 'Lor',
            'people_id' => 1,
            'people_aggressors_id' => 1
        ],
    ];
}
