<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entry Entity.
 *
 * @property int $id
 * @property string $provincia
 * @property string $canton
 * @property string $ceaam_ingresa
 * @property string $tipo_ingreso
 * @property string $tipo_egreso
 * @property string $motivo_ingreso
 * @property string $ultimo_episodio
 * @property string $destino_extranjero
 * @property string $kit
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $entidad_traslada
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
