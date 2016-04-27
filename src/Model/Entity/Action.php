<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Action Entity.
 *
 * @property int $id
 * @property string $hallazgos
 * @property string $recomendaciones
 * @property string $tipo
 * @property \Cake\I18n\Time $fecha_
 * @property int $transfers_id
 * @property \App\Model\Entity\Transfer $transfer
 */
class Action extends Entity
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
        'transfers_id' => false,
    ];
}
