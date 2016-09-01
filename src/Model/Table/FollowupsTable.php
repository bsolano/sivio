<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Followups Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 *
 * @method \App\Model\Entity\Followup get($primaryKey, $options = [])
 * @method \App\Model\Entity\Followup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Followup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Followup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Followup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Followup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Followup findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FollowupsTable extends Table
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

        $this->table('followups');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsTo('Attentions', [
            'foreignKey' => 'attention_id'
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
            ->allowEmpty('medio_comunicacion');

        $validator
            ->allowEmpty('apoyo_institucional');

        $validator
            ->boolean('seguimiento_plan_seguridad')
            ->requirePresence('seguimiento_plan_seguridad', 'create')
            ->notEmpty('seguimiento_plan_seguridad');

        $validator
            ->allowEmpty('seguimiento_kit');

        $validator
            ->allowEmpty('lugar_atencion');

        $validator
            ->allowEmpty('enfrenta_violencia');

        $validator
            ->boolean('convive_agresor')
            ->requirePresence('convive_agresor', 'create')
            ->notEmpty('convive_agresor');

        $validator
            ->boolean('atencion_especializada')
            ->requirePresence('atencion_especializada', 'create')
            ->notEmpty('atencion_especializada');

        $validator
            ->allowEmpty('al_xtiempo_del_egreso');

        $validator
            ->allowEmpty('seguimiento_referencia_social');

        $validator
            ->allowEmpty('seguimiento_referencia_legal');

        $validator
            ->allowEmpty('seguimiento_referencia_psicologico');

        $validator
            ->boolean('medidas_protec_vig')
            ->requirePresence('medidas_protec_vig', 'create')
            ->notEmpty('medidas_protec_vig');

        $validator
            ->boolean('audiencia_pendiente')
            ->requirePresence('audiencia_pendiente', 'create')
            ->notEmpty('audiencia_pendiente');

        $validator
            ->boolean('seguimientoOAPVD')
            ->requirePresence('seguimientoOAPVD', 'create')
            ->notEmpty('seguimientoOAPVD');

        $validator
            ->allowEmpty('incump_medidas');

        $validator
            ->boolean('apoyo_empleo')
            ->requirePresence('apoyo_empleo', 'create')
            ->notEmpty('apoyo_empleo');

        $validator
            ->boolean('situacion_riesgo')
            ->requirePresence('situacion_riesgo', 'create')
            ->notEmpty('situacion_riesgo');

        $validator
            ->allowEmpty('hijos_atencion_especializada');

        $validator
            ->boolean('hijo_seguimiento_plan_seguridad')
            ->requirePresence('hijo_seguimiento_plan_seguridad', 'create')
            ->notEmpty('hijo_seguimiento_plan_seguridad');

        $validator
            ->boolean('hijos_situacion_riesgo')
            ->requirePresence('hijos_situacion_riesgo', 'create')
            ->notEmpty('hijos_situacion_riesgo');

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
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        return $rules;
    }
}
