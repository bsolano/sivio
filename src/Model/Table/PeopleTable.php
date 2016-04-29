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
 * @property \Cake\ORM\Association\BelongsTo $Transfers
 * @property \Cake\ORM\Association\BelongsTo $Aggressors
 * @property \Cake\ORM\Association\BelongsTo $Histories
 * @property \Cake\ORM\Association\HasMany $Aggressors
 * @property \Cake\ORM\Association\HasMany $Consultations
 * @property \Cake\ORM\Association\HasMany $ExternalReferences
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $InternalReferences
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

        $this->belongsTo('Transfers', [
            'foreignKey' => 'transfer_id'
        ]);
        $this->belongsTo('Aggressors', [
            'foreignKey' => 'aggressor_id'
        ]);
        $this->belongsTo('Histories', [
            'foreignKey' => 'history_id'
        ]);
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
        $this->hasMany('InternalReferences', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Transfers', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsToMany('Interventions', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'intervention_id',
            'joinTable' => 'interventions_people'
        ]);
        $this->belongsToMany('Advocacies', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'advocacy_id',
            'joinTable' => 'people_advocacies'
        ]);
        $this->belongsToMany('Entries', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'entry_id',
            'joinTable' => 'people_entries'
        ]);
        $this->belongsToMany('Families', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'family_id',
            'joinTable' => 'people_families'
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
            ->allowEmpty('atencion_especializada');

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
            ->integer('experiencia_laboral')
            ->allowEmpty('experiencia_laboral');

        $validator
            ->allowEmpty('condicion_aseguramiento');

        $validator
            ->allowEmpty('vivienda');

        $validator
            ->integer('num_hijos_ceaam')
            ->allowEmpty('num_hijos_ceaam');

        $validator
            ->allowEmpty('tipo_familia');

        $validator
            ->integer('embarazo')
            ->allowEmpty('embarazo');

        $validator
            ->allowEmpty('condicion_salud');

        $validator
            ->allowEmpty('identificacion');

        $validator
            ->allowEmpty('tipo_identificacion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['transfer_id'], 'Transfers'));
        $rules->add($rules->existsIn(['aggressor_id'], 'Aggressors'));
        $rules->add($rules->existsIn(['history_id'], 'Histories'));
        return $rules;
    }
}
