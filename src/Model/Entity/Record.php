<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity.
 *
 * @property int $id
 * @property string $nombre_institucion
 * @property string $ubicacion
 * @property string $numero_expediente
 * @property int $transfers_id
 * @property \App\Model\Entity\Transfer $transfer
 */
class Record extends Entity
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
