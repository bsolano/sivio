<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $group_id
 * @property \App\Model\Entity\Group $group
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $location_id
 * @property \App\Model\Entity\Consultation[] $consultations
 * @property \App\Model\Entity\Entry[] $entries
 * @property \App\Model\Entity\Evaluation[] $evaluations
 * @property \App\Model\Entity\Followup[] $followups
 * @property \App\Model\Entity\InternalReference[] $internal_references
 * @property \App\Model\Entity\Person[] $people
 * @property \App\Model\Entity\Aro[] $aro
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
