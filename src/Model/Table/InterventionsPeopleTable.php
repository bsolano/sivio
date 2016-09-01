<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InterventionsPeople Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 * @property \Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\InterventionsPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\InterventionsPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InterventionsPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InterventionsPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InterventionsPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InterventionsPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InterventionsPerson findOrCreate($search, callable $callback = null)
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

        $validator
            ->allowEmpty('options');

        $validator
            ->boolean('madre')
            ->requirePresence('madre', 'create')
            ->notEmpty('madre');

        $validator
            ->boolean('CF_nutri_salud')
            ->requirePresence('CF_nutri_salud', 'create')
            ->notEmpty('CF_nutri_salud');

        $validator
            ->integer('cuido_adultos')
            ->requirePresence('cuido_adultos', 'create')
            ->notEmpty('cuido_adultos');

        $validator
            ->integer('bisuteria_artesania')
            ->requirePresence('bisuteria_artesania', 'create')
            ->notEmpty('bisuteria_artesania');

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
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        $rules->add($rules->existsIn(['person_id'], 'People'));
        return $rules;
    }
}
