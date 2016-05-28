<?php
namespace App\Model\Table;

use App\Model\Entity\Consultation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class ConsultationsTable extends Table
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

        $this->table('consultations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('horario');

        $validator
            ->allowEmpty('tipo');

        $validator
            ->date('fecha')
            ->allowEmpty('fecha');

        $validator
            ->time('hora_inicio')
            ->allowEmpty('hora_inicio');

        $validator
            ->time('hora_finalizacion')
            ->allowEmpty('hora_finalizacion');

        $validator
            ->date('fecha_finalizacion')
            ->allowEmpty('fecha_finalizacion');

        $validator
            ->allowEmpty('institucion_que_refiere');

        $validator
            ->allowEmpty('nombre_que_refiere');

        $validator
            ->allowEmpty('telefono_que_refiere');

        $validator
            ->allowEmpty('situacion_enfrentada');

        $validator
            ->allowEmpty('ultimo_incidente');

        $validator
            ->allowEmpty('valoracion_de_riesgo');

        $validator
            ->allowEmpty('familiares_en_riesgo');

        $validator
            ->boolean('familiares_requieren_proteccion')
            ->allowEmpty('familiares_requieren_proteccion');

        $validator
            ->allowEmpty('vinculo_con_persona_agresora');

        $validator
            ->allowEmpty('tiempo_relacion_con_agresor');

        $validator
            ->allowEmpty('tiempo_agresion');

        $validator
            ->boolean('medidas_proteccion')
            ->allowEmpty('medidas_proteccion');

        $validator
            ->boolean('denuncia_penal')
            ->allowEmpty('denuncia_penal');

        $validator
            ->date('fecha_vencimiento')
            ->allowEmpty('fecha_vencimiento');

        $validator
            ->allowEmpty('recurso_apoyo_fuera_zona_riesgo');

        $validator
            ->allowEmpty('nombre_recurso');

        $validator
            ->allowEmpty('telefono_recurso');

        $validator
            ->allowEmpty('observaciones');

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
        return $rules;
    }
}
