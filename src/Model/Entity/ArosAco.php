<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArosAco Entity.
 *
 * @property int $id
 * @property int $aro_id
 * @property \App\Model\Entity\Aro $aro
 * @property int $aco_id
 * @property \App\Model\Entity\Aco $aco
 * @property string $_create
 * @property string $_read
 * @property string $_update
 * @property string $_delete
 */
class ArosAco extends Entity
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
