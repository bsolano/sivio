<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Log Entity
 *
 * @property int $id
 * @property int $person_id
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
 * @property bool $experiencia_laboral
 * @property string $condicion_aseguramiento
 * @property string $vivienda
 * @property string $tipo_familia
 * @property int $embarazo
 * @property string $condicion_salud
 * @property int $identificacion
 * @property string $tipo_identificacion
 * @property string $telefono
 * @property int $edad
 * @property int $num_de_hijos
 * @property bool $direccion_oculta
 * @property string $provincia
 * @property string $canton
 * @property string $direccion
 * @property bool $hijos_mayor_doce
 * @property int $num_hijos_ceaam
 * @property string $num_familia
 * @property string $rol_familia
 * @property int $acepta_seguimiento
 * @property bool $es_agresor
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Person $person
 */
class Log extends Entity
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
        'id' => false
    ];
}
