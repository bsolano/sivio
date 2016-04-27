<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Intervention Entity.
 *
 * @property int $id
 * @property bool $programa_capacitacion
 * @property bool $certificacion_tecnica
 * @property int $bisuteria_artesania
 * @property int $cuido_adultos
 * @property bool $cuido_menores
 * @property bool $computacion
 * @property bool $acrilico
 * @property bool $maquillaje
 * @property bool $corte_confeccion
 * @property bool $peluqueria
 * @property string $cursos_formacion
 * @property bool $desea_intervencion
 * @property string $resolucion_conflictos
 * @property string $egresos_tecnicos
 * @property int $valoracion_proceso
 * @property int $atencion_quejas
 * @property string $individual
 * @property int $grupal
 * @property string $talleres
 * @property string $coordinaciones
 * @property int $informes
 * @property int $referencias
 * @property int $acompanamiento_profesional
 * @property string $plan_seguridad
 * @property string $criterio_especializado
 * @property string $representacion_legal
 * @property string $consultorio_juridico
 * @property \App\Model\Entity\Person[] $people
 */
class Intervention extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
