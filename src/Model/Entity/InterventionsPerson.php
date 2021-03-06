<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InterventionsPerson Entity
 *
 * @property int $id
 * @property int $attention_id
 * @property int $person_id
 * @property string $tipo_intervencion
 * @property string $options
 * @property bool $madre
 * @property bool $CF_nutri_salud
 * @property int $cuido_adultos
 * @property int $bisuteria_artesania
 *
 * @property \App\Model\Entity\Intervention $intervention
 * @property \App\Model\Entity\Attention $attention
 * @property \App\Model\Entity\Person $person
 */
class InterventionsPerson extends Entity
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
        'intervention_id' => false,
        'person_id' => false
    ];
}
