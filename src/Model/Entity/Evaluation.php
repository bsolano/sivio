<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluation Entity.
 *
 * @property int $id
 * @property int $people_id
 * @property \App\Model\Entity\Person $person
 * @property string $horario_habil
 * @property string $disponibilidad
 * @property string $tipo
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $nombre_locutor_coavif
 * @property \Cake\I18n\Time $fecha_inicio
 * @property \Cake\I18n\Time $fecha_fin
 * @property int $advocacy_id
 * @property \App\Model\Entity\Advocacy $advocacy
 * @property string $institucion_referente
 * @property string $persona_referente
 * @property string $telefono_referente
 * @property string $observaciones
 */
class Evaluation extends Entity
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
