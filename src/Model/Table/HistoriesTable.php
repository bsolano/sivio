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
 * @property \Cake\ORM\Association\HasMany $People
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

        $this->hasMany('People', [
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

        return $validator;
    }
}
