<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity
 *
 * @property string $motivo_regreso
 * @property string $antecedente_legal
 * @property string $antecedente_legal_cuales
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
 * @property int $person_id
 * @property string $vinculo_usuaria
 * @property string $tiempo_relacion
 * @property string $tiempo_agresion
 * @property string $num_separaciones
 * @property string $familiares_en_riesgo
 * @property bool $familiar_requiere_proteccion
 * @property int $aggressor_id
 * @property string $tipo_maltrato_vivido
 * @property string $abuso_sexual
 * @property string $ultimo_episodio
 * @property string $vsexual_text
 * @property string $vfisica_text
 * @property string $vpatrimonial_text
 * @property string $vpsicologica_text
 * @property string $kit
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Attention[] $attentions
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
        'id' => false
    ];
}
