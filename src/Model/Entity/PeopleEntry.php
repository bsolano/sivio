<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleEntry Entity
 *
 * @property int $person_id
 * @property string $tipo_accion
 * @property \Cake\I18n\Time $fecha_accion
 * @property int $id
 * @property int $attention_id
 * @property string $rechazo
 * @property string $motivo_rechazo
 * @property string $ceaam_ingresa
 * @property string $tipo_ing_eg
 * @property string $motivo_ing_eg
 * @property string $destino_extranjero
 * @property string $entidad_traslada
 * @property string $provincia_destino
 * @property string $canton_destino
 * @property bool $direccion_oculta
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Entry $entry
 * @property \App\Model\Entity\Attention $attention
 */
class PeopleEntry extends Entity
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
