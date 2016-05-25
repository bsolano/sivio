<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property \Cake\I18n\Time $fecha_de_nacimiento
 * @property string $estado_civil
 * @property string $escolaridad
 * @property string $atencion_especializada
 * @property string $nacionalidad
 * @property string $genero
 * @property string $ocupacion
 * @property string $lugar_trabajo
 * @property string $adicciones
 * @property string $condicion_migratoria
 * @property string $condicion_laboral
 * @property int $experiencia_laboral
 * @property string $condicion_aseguramiento
 * @property string $vivienda
 * @property string $tipo_familia
 * @property int $embarazo
 * @property string $condicion_salud
 * @property string $identificacion
 * @property string $tipo_identificacion
 * @property string $numero_de_telefono
 * @property int $edad
 * @property int $numero_de_hijos
 * @property string $provincia
 * @property string $canton
 * @property string $direccion
 * @property bool $tiene_hijos_doce
 * @property \App\Model\Entity\Transfer[] $transfers
 * @property \App\Model\Entity\Aggressor[] $aggressors
 * @property \App\Model\Entity\History[] $histories
 * @property \App\Model\Entity\Consultation[] $consultations
 * @property \App\Model\Entity\ExternalReference[] $external_references
 * @property \App\Model\Entity\Followup[] $followups
 * @property \App\Model\Entity\InternalReference[] $internal_references
 * @property \App\Model\Entity\Intervention[] $interventions
 * @property \App\Model\Entity\Advocacy[] $advocacies
 * @property \App\Model\Entity\Entry[] $entries
 * @property \App\Model\Entity\Family[] $families
 * @property \App\Model\Entity\User[] $users
 */
class Person extends Entity
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
