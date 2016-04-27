<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transfer Entity.
 *
 * @property int $id
 * @property int $person_id
 * @property string $entidad_traslada
 * @property string $nombre
 * @property string $telefono
 * @property string $direccion
 * @property bool $consentimiento
 * @property bool $plan_emergencia
 * @property bool $dependientes_directos
 * @property string $testigos
 * @property string $acta_observacion
 * @property \App\Model\Entity\Person[] $people
 */
class Transfer extends Entity
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
