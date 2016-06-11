<?php
namespace App\Model\Table;

use App\Model\Entity\Followup;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Followups Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 * @property \Cake\ORM\Association\BelongsToMany $Users
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
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Attentions', [
            'foreignKey' => 'attention_id'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'followup_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'followups_users'
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
            ->allowEmpty('seguimiento_plan_seguridad');

        $validator
            ->allowEmpty('seguimiento_kit');

        $validator
            ->allowEmpty('lugar_atencion');

        $validator
            ->allowEmpty('enfrenta_violencia');

        $validator
            ->boolean('convive_agresor')
            ->allowEmpty('convive_agresor');

        $validator
            ->allowEmpty('atencion_especializada');

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
            ->allowEmpty('medidas_protec_vig');

        $validator
            ->boolean('audiencia_pendiente')
            ->allowEmpty('audiencia_pendiente');

        $validator
            ->boolean('seguimientoOAPVD')
            ->allowEmpty('seguimientoOAPVD');

        $validator
            ->allowEmpty('incump_medidas');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        return $rules;
    }
}
