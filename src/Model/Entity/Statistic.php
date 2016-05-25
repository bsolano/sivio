<?php
namespace App\Model\Entity;

//use Cake\ORM\Entity;

/**
 * ExternalReference Entity.
 *
 * @property int $id
 * @property string $receptor
 * @property string $telefono
 * @property int $person_id
 * @property \App\Model\Entity\Person $person
 * @property string $direccion
 * @property string $observacion
 * @property string $persona
 * @property \Cake\I18n\Time $created
 */
class Stastistic extends AppModel
{
    
    
    var $useTable = false;
    var $_schema = array(
                'edad' => array('type' =>'string', 'length'=>100),
                'nacionalidad' => array('type' => 'string', 'length'=>255)
                
                );
    var $validate = array(
        'nacionalidad' => array('rule' => array('minLength',3),
                  'message' => 'El nombre es obligatorio'),
         'edad' => array('rule' => array('minLength',3),
                  'message' => 'El nombre es obligatorio'),
        //'email' => array('rule' => 'email',
                 'message' => 'Debe ser una dirección de correo válida')
       // 'mensaje' => array('rule' => array('minLength',4),
                  //'message' => 'El mensaje es obligatorio'),
    );
    

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
