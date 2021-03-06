<?php
namespace App\Model\Table;

use App\Model\Entity\Person;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \Cake\ORM\Association\HasMany $Aggressors
 * @property \Cake\ORM\Association\HasMany $Consultations
 * @property \Cake\ORM\Association\HasMany $ExternalReferences
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $Histories
 * @property \Cake\ORM\Association\HasMany $InternalReferences
 * @property \Cake\ORM\Association\HasMany $Logs
 * @property \Cake\ORM\Association\HasMany $Transfers
 * @property \Cake\ORM\Association\BelongsToMany $Interventions
 * @property \Cake\ORM\Association\BelongsToMany $Advocacies
 * @property \Cake\ORM\Association\BelongsToMany $Entries
 * @property \Cake\ORM\Association\BelongsToMany $Families
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class PeopleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('people');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Aggressors', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Consultations', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('ExternalReferences', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Followups', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Histories', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('InternalReferences', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Logs', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Transfers', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_people'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellidos', 'create')
            ->notEmpty('apellidos');

        $validator
            ->date('fecha_de_nacimiento')
            ->allowEmpty('fecha_de_nacimiento');

        $validator
            ->allowEmpty('estado_civil');

        $validator
            ->allowEmpty('escolaridad');

        $validator
            ->allowEmpty('nacionalidad');

        $validator
            ->allowEmpty('genero');

        $validator
            ->allowEmpty('ocupacion');

        $validator
            ->allowEmpty('lugar_trabajo');

        $validator
            ->allowEmpty('adicciones');

        $validator
            ->allowEmpty('condicion_migratoria');

        $validator
            ->allowEmpty('condicion_laboral');

        $validator
            ->boolean('experiencia_laboral')
            ->allowEmpty('experiencia_laboral');

        $validator
            ->allowEmpty('condicion_aseguramiento');

        $validator
            ->allowEmpty('vivienda');

        $validator
            ->allowEmpty('tipo_familia');

        $validator
            ->integer('embarazo')
            ->allowEmpty('embarazo');

        $validator
            ->allowEmpty('condicion_salud');

        $validator
            ->integer('identificacion')
            ->allowEmpty('identificacion');

        $validator
            ->allowEmpty('tipo_identificacion');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->integer('edad')
            ->allowEmpty('edad');

        $validator
            ->integer('num_de_hijos')
            ->allowEmpty('num_de_hijos');

        $validator
            ->integer('direccion_oculta')
            ->allowEmpty('direccion_oculta');

        $validator
            ->allowEmpty('provincia');

        $validator
            ->allowEmpty('canton');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->boolean('hijos_mayor_doce')
            ->allowEmpty('hijos_mayor_doce');

        $validator
            ->integer('num_hijos_ceaam')
            ->allowEmpty('num_hijos_ceaam');

        $validator
            ->allowEmpty('num_familia');

        $validator
            ->allowEmpty('rol_familia');

        $validator
            ->integer('acepta_seguimiento')
            ->allowEmpty('acepta_seguimiento');

        return $validator;
    }
    
    /**
    * Método para buscar expedientes por identificación (cédula, etc)
    * o por nombre y/o apellido
    */
    public function find_record($keyword) {
        return $this->find()
            ->where([
                'identificacion LIKE' => '%'.$keyword.'%',
                'identificacion !='   => '0'             , 
                /*  ya se cambio para que identificacion sea nullable, pero aun hay algunos en 0
                    se deben cambiar a mano. Por mientras, hasta que se hable, eso.
                */
                ])
            ->orWhere(['nombre LIKE' => '%'.$keyword.'%'])
            ->orWhere(['apellidos LIKE' => '%'.$keyword.'%']);
    }
}
