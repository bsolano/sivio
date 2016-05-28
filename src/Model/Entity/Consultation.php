<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultation Entity.
 *
 * @property int $id
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $horario
 * @property string $tipo
 * @property \Cake\I18n\Time $fecha
 * @property \Cake\I18n\Time $hora_inicio
 * @property \Cake\I18n\Time $hora_finalizacion
 * @property \Cake\I18n\Time $fecha_finalizacion
 * @property string $institucion_que_refiere
 * @property string $nombre_que_refiere
 * @property string $telefono_que_refiere
 * @property string $situacion_enfrentada
 * @property string $ultimo_incidente
 * @property string $valoracion_de_riesgo
 * @property string $familiares_en_riesgo
 * @property bool $familiares_requieren_proteccion
 * @property string $vinculo_con_persona_agresora
 * @property string $tiempo_relacion_con_agresor
 * @property string $tiempo_agresion
 * @property bool $medidas_proteccion
 * @property bool $denuncia_penal
 * @property \Cake\I18n\Time $fecha_vencimiento
 * @property string $recurso_apoyo_fuera_zona_riesgo
 * @property string $nombre_recurso
 * @property string $telefono_recurso
 * @property string $observaciones
 */
class Consultation extends Entity
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
