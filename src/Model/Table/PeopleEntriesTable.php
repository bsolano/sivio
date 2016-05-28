<?php
namespace App\Model\Table;

use App\Model\Entity\PeopleEntry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleEntries Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Entries
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 */
class PeopleEntriesTable extends Table
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

        $this->table('people_entries');
        $this->displayField('id');
        $this->primaryKey(['id', 'entries_id', 'person_id']);

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Entries', [
            'foreignKey' => 'entries_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('tipo_accion');

        $validator
            ->dateTime('fecha_accion')
            ->allowEmpty('fecha_accion');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('rechazo');

        $validator
            ->allowEmpty('motivo_rechazo');

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
        $rules->add($rules->existsIn(['entries_id'], 'Entries'));
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        return $rules;
    }
}
