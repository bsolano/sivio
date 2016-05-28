<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aggressor Entity.
 *
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property int $id
 * @property string $vinculo
 * @property string $tiempo_relacion
 * @property string $tiempo_agresion
 * @property string $num_separaciones
 * @property string $familiares_en_riesgos
 * @property bool $familiar_require_proteccion
 */
class Aggressor extends Entity
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
        'people_id' => false,
        'people_aggressors_id' => false,
    ];
}
