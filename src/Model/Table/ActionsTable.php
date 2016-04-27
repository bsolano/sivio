<?php
namespace App\Model\Table;

use App\Model\Entity\Action;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Transfers
 */
class ActionsTable extends Table
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

        $this->table('actions');
        $this->displayField('id');
        $this->primaryKey(['id', 'transfers_id']);

        $this->belongsTo('Transfers', [
            'foreignKey' => 'transfers_id',
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
            ->allowEmpty('hallazgos');

        $validator
            ->allowEmpty('recomendaciones');

        $validator
            ->allowEmpty('tipo');

        $validator
            ->date('fecha_')
            ->allowEmpty('fecha_');

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
        $rules->add($rules->existsIn(['transfers_id'], 'Transfers'));
        return $rules;
    }
}
