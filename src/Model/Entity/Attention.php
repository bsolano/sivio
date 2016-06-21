<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attention Entity.
 *
 * @property int $id
 * @property int $aggressor_id
 * @property \App\Model\Entity\Aggressor $aggressor
 * @property int $history_id
 * @property \App\Model\Entity\History $history
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $tipo
 * @property \Cake\I18n\Time $created
 * @property int $log_id
 * @property \App\Model\Entity\Log $log
 * @property string $datos_adicionales
 * @property \App\Model\Entity\Followup[] $followups
 * @property \App\Model\Entity\InterventionsPerson[] $interventions_people
 * @property \App\Model\Entity\PeopleAdvocacy[] $people_advocacies
 * @property \App\Model\Entity\PeopleEntry[] $people_entries
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
