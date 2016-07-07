<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InternalReference Entity.
 *
 * @property int $id
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $telefono
 * @property int $location_id
 * @property \App\Model\Entity\Location $location
 * @property string $persona_coordina
 * @property string $se_deniega_acceso
 * @property int $estado
 * @property int $consultation_id
 */
class InternalReference extends Entity
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
