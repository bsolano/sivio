<?php
namespace App\Model\Table;

use App\Model\Entity\InterventionsPerson;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InterventionsPeople Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Interventions
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 * @property \Cake\ORM\Association\BelongsTo $People
 */
class InterventionsPeopleTable extends Table
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

        $this->table('interventions_people');
        $this->displayField('id');
        $this->primaryKey(['id', 'intervention_id', 'person_id']);

        $this->belongsTo('Interventions', [
            'foreignKey' => 'intervention_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Attentions', [
            'foreignKey' => 'attention_id'
        ]);
        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
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
            ->allowEmpty('tipo_intervencion');

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
        $rules->add($rules->existsIn(['intervention_id'], 'Interventions'));
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        $rules->add($rules->existsIn(['person_id'], 'People'));
        return $rules;
    }
}
