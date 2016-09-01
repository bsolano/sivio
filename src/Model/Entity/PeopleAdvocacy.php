<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleAdvocacy Entity
 *
 * @property int $person_id
 * @property string $tipo
 * @property int $id
 * @property int $attention_id
 * @property string $nombre
 * @property string $telefono
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Attention $attention
 */
class PeopleAdvocacy extends Entity
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
