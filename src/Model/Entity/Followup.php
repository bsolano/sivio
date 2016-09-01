<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Followup Entity
 *
 * @property int $id
 * @property int $person_id
 * @property \Cake\I18n\Time $created
 * @property string $medio_comunicacion
 * @property string $apoyo_institucional
 * @property bool $seguimiento_plan_seguridad
 * @property string $seguimiento_kit
 * @property string $lugar_atencion
 * @property string $enfrenta_violencia
 * @property bool $convive_agresor
 * @property bool $atencion_especializada
 * @property int $attention_id
 * @property string $al_xtiempo_del_egreso
 * @property string $seguimiento_referencia_social
 * @property string $seguimiento_referencia_legal
 * @property string $seguimiento_referencia_psicologico
 * @property bool $medidas_protec_vig
 * @property bool $audiencia_pendiente
 * @property bool $seguimientoOAPVD
 * @property string $incump_medidas
 * @property bool $apoyo_empleo
 * @property bool $situacion_riesgo
 * @property string $hijos_atencion_especializada
 * @property bool $hijo_seguimiento_plan_seguridad
 * @property bool $hijos_situacion_riesgo
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Attention $attention
 */
class Followup extends Entity
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
        'id' => false
    ];
}
