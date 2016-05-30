<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entry Entity.
 *
 * @property int $id
 * @property string $ceaam_ingresa
 * @property string $tipo_ing_eg
 * @property string $motivo_ing_eg
 * @property string $destino_extranjero
 * @property string $entidad_traslada
 * @property string $provincia_destino
 * @property string $canton_destino
 * @property \App\Model\Entity\Person[] $people
 */
class Entry extends Entity
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
