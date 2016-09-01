<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\HasMany $Attentions
 *
 * @method \App\Model\Entity\Log get($primaryKey, $options = [])
 * @method \App\Model\Entity\Log newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Log[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Log|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Log patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Log[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Log findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LogsTable extends Table
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

        $this->table('logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Attentions', [
            'foreignKey' => 'log_id'
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
            ->boolean('direccion_oculta')
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
            ->requirePresence('num_hijos_ceaam', 'create')
            ->notEmpty('num_hijos_ceaam');

        $validator
            ->requirePresence('num_familia', 'create')
            ->notEmpty('num_familia');

        $validator
            ->requirePresence('rol_familia', 'create')
            ->notEmpty('rol_familia');

        $validator
            ->integer('acepta_seguimiento')
            ->allowEmpty('acepta_seguimiento');

        $validator
            ->boolean('es_agresor')
            ->allowEmpty('es_agresor');

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
        $rules->add($rules->existsIn(['person_id'], 'People'));
        return $rules;
    }
}
