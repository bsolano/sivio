<?php
namespace App\Model\Table;

use App\Model\Entity\History;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Histories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Aggressors
 * @property \Cake\ORM\Association\HasMany $Attentions
 */
class HistoriesTable extends Table
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

        $this->table('histories');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsTo('Aggressors', [
            'foreignKey' => 'aggressor_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Attentions', [
            'foreignKey' => 'history_id'
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
            ->allowEmpty('motivo_regreso');

        $validator
            ->allowEmpty('antecedente_legal');

        $validator
            ->allowEmpty('antecedente_psiquiatrico');

        $validator
            ->allowEmpty('atencion_por_agresion');

        $validator
            ->allowEmpty('centro_salud');

        $validator
            ->allowEmpty('violencia_fisica');

        $validator
            ->allowEmpty('violencia_psicologica');

        $validator
            ->allowEmpty('violencia_sexual');

        $validator
            ->allowEmpty('violencia_patrimonial');

        $validator
            ->allowEmpty('impacto_violencia');

        $validator
            ->allowEmpty('riesgo');

        $validator
            ->boolean('programa_oapvd')
            ->allowEmpty('programa_oapvd');

        $validator
            ->allowEmpty('proteccion');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('valoracion_riesgo');

        $validator
            ->allowEmpty('medida_proteccion');

        $validator
            ->date('vencimiento_proteccion')
            ->allowEmpty('vencimiento_proteccion');

        $validator
            ->allowEmpty('situacion_enfrentada');

        $validator
            ->allowEmpty('vinculo_usuaria');

        $validator
            ->allowEmpty('tiempo_relacion');

        $validator
            ->allowEmpty('tiempo_agresion');

        $validator
            ->allowEmpty('num_separaciones');

        $validator
            ->allowEmpty('familiares_en_riesgo');

        $validator
            ->boolean('familiar_requiere_proteccion')
            ->allowEmpty('familiar_requiere_proteccion');

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
        $rules->add($rules->existsIn(['aggressor_id'], 'Aggressors'));
        return $rules;
    }
}
