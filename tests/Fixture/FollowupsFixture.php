<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FollowupsFixture
 *
 */
class FollowupsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'medio_comunicacion' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'apoyo_institucional' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'seguimiento_plan_seguridad' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'seguimiento_kit' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'lugar_atencion' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'enfrenta_violencia' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'convive_agresor' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'atencion_especializada' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'attention_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'al_xtiempo_del_egreso' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'seguimiento_referencia_social' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'seguimiento_referencia_legal' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'seguimiento_referencia_psicologico' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'medidas_protec_vig' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'audiencia_pendiente' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'seguimientoOAPVD' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'incump_medidas' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'apoyo_empleo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'situacion_riesgo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hijos_atencion_especializada' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'hijo_seguimiento_plan_seguridad' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hijos_situacion_riesgo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'id' => 1,
            'person_id' => 1,
            'created' => '2016-07-07 23:13:13',
            'medio_comunicacion' => 'Lorem ipsum dolor ',
            'apoyo_institucional' => 'Lorem ipsum dolor sit amet',
            'seguimiento_plan_seguridad' => 1,
            'seguimiento_kit' => 'Lorem ipsum dolor sit amet',
            'lugar_atencion' => 'Lorem ipsum dolor sit amet',
            'enfrenta_violencia' => 'Lorem ipsum dolor sit amet',
            'convive_agresor' => 1,
            'atencion_especializada' => 1,
            'attention_id' => 1,
            'al_xtiempo_del_egreso' => 'Lorem ipsum dolor sit amet',
            'seguimiento_referencia_social' => 'Lorem ipsum dolor sit amet',
            'seguimiento_referencia_legal' => 'Lorem ipsum dolor sit amet',
            'seguimiento_referencia_psicologico' => 'Lorem ipsum dolor sit amet',
            'medidas_protec_vig' => 1,
            'audiencia_pendiente' => 1,
            'seguimientoOAPVD' => 1,
            'incump_medidas' => 'Lorem ipsum dolor sit amet',
            'apoyo_empleo' => 1,
            'situacion_riesgo' => 1,
            'hijos_atencion_especializada' => 'Lorem ipsum dolor sit amet',
            'hijo_seguimiento_plan_seguridad' => 1,
            'hijos_situacion_riesgo' => 1
        ],
    ];
}
