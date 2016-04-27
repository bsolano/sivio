<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Followup Entity.
 *
 * @property int $id
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property \Cake\I18n\Time $created
 * @property int $user_id
 * @property string $medio_comunicacion
 * @property string $aspectos_sociales
 * @property string $apoyo_institucional
 * @property string $legales
 * @property bool $seguridad
 * @property string $seguimiento_kit
 * @property string $seguimiento_referencia
 * @property string $lugar_atencion
 * @property string $enfrenta_violencia
 * @property bool $convivencia
 * @property string $atencion_especializada
 * @property int $advocacy_id
 * @property \App\Model\Entity\Advocacy $advocacy
 * @property \App\Model\Entity\User[] $users
 */
class Followup extends Entity
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
