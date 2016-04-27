<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleEntry Entity.
 *
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property int $entries_id
 * @property \App\Model\Entity\Entry $entry
 * @property string $tipo_accion
 * @property \Cake\I18n\Time $fecha_accion
 * @property int $id
 * @property string $rechazo
 * @property string $motivo_rechazo
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
        'id' => false,
        'entries_id' => false,
        'person_id' => false,
    ];
}
