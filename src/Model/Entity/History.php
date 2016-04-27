<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity.
 *
 * @property string $motivo_regreso
 * @property string $antecedente_legal
 * @property string $antecedente_psiquiatrico
 * @property string $atencion_por_agresion
 * @property string $centro_salud
 * @property string $violencia_fisica
 * @property string $violencia_psicologica
 * @property string $violencia_sexual
 * @property string $violencia_patrimonial
 * @property string $impacto_violencia
 * @property string $riesgo
 * @property bool $programa_oapvd
 * @property string $proteccion
 * @property int $id
 * @property string $valoracion_riesgo
 * @property string $medida_proteccion
 * @property \Cake\I18n\Time $vencimiento_proteccion
 * @property string $situacion_enfrentada
 * @property \App\Model\Entity\Person[] $people
 */
class History extends Entity
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
