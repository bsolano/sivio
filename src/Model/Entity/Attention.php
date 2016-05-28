<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attention Entity.
 *
 * @property int $id
 * @property int $aggressor_id
 * @property int $history_id
 * @property \App\Model\Entity\History $history
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $tipo
 * @property \App\Model\Entity\Agressor $agressor
 */
class Attention extends Entity
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
