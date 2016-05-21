<?php
namespace App\Model\Table;

use App\Model\Entity\Aggressor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aggressors Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 */
class AggressorsTable extends Table
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

        $this->table('aggressors');
        $this->displayField('id');
        $this->primaryKey(['id']);

        $this->belongsTo('People', [
            'foreignKey' => 'person_id'
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
            ->allowEmpty('vinculo');

        $validator
            ->allowEmpty('tiempo_relacion');

        $validator
            ->allowEmpty('tiempo_agresion');

        $validator
            ->allowEmpty('num_separaciones');

        $validator
            ->allowEmpty('familiares_en_riesgos');

        $validator
            ->boolean('familiar_require_proteccion')
            ->allowEmpty('familiar_require_proteccion');

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
