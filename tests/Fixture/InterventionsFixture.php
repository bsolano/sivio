<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InterventionsFixture
 *
 */
class InterventionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'programa_capacitacion' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'certificacion_tecnica' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'bisuteria_artesania' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cuido_adultos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cuido_menores' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'computacion' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'acrilico' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'maquillaje' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'corte_confeccion' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'peluqueria' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cursos_formacion' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'desea_intervencion' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'resolucion_conflictos' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'egresos_tecnicos' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'valoracion_proceso' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'atencion_quejas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'individual' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'grupal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'talleres' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'coordinaciones' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'informes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencias' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acompanamiento_profesional' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'plan_seguridad' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '
', 'precision' => null, 'fixed' => null],
        'criterio_especializado' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'representacion_legal' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '
', 'precision' => null, 'fixed' => null],
        'consultorio_juridico' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
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
            'programa_capacitacion' => 1,
            'certificacion_tecnica' => 1,
            'bisuteria_artesania' => 1,
            'cuido_adultos' => 1,
            'cuido_menores' => 1,
            'computacion' => 1,
            'acrilico' => 1,
            'maquillaje' => 1,
            'corte_confeccion' => 1,
            'peluqueria' => 1,
            'cursos_formacion' => 'Lorem ipsum dolor sit amet',
            'desea_intervencion' => 1,
            'resolucion_conflictos' => 'Lorem ipsum dolor sit amet',
            'egresos_tecnicos' => 'Lorem ipsum dolor sit amet',
            'valoracion_proceso' => 1,
            'atencion_quejas' => 1,
            'individual' => 'Lorem ipsum dolor sit amet',
            'grupal' => 1,
            'talleres' => 'Lorem ipsum dolor sit amet',
            'coordinaciones' => 'Lorem ipsum dolor sit amet',
            'informes' => 1,
            'referencias' => 1,
            'acompanamiento_profesional' => 1,
            'plan_seguridad' => 'Lorem ipsum dolor sit amet',
            'criterio_especializado' => 'Lorem ipsum dolor sit amet',
            'representacion_legal' => 'Lorem ipsum dolor sit amet',
            'consultorio_juridico' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
