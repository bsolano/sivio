<?php
namespace App\Model\Table;

use App\Model\Entity\Attention;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attentions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Aggressors
 * @property \Cake\ORM\Association\BelongsTo $Histories
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Logs
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $InterventionsPeople
 * @property \Cake\ORM\Association\HasMany $PeopleAdvocacies
 * @property \Cake\ORM\Association\HasMany $PeopleEntries
 */
class AttentionsTable extends Table
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

        $this->table('attentions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Aggressors', [
            'foreignKey' => 'aggressor_id'
        ]);
        $this->belongsTo('Histories', [
            'foreignKey' => 'history_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Logs', [
            'foreignKey' => 'log_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Followups', [
            'foreignKey' => 'attention_id'
        ]);
        $this->hasMany('InterventionsPeople', [
            'foreignKey' => 'attention_id'
        ]);
        $this->hasMany('PeopleAdvocacies', [
            'foreignKey' => 'attention_id'
        ]);
        $this->hasMany('PeopleEntries', [
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
            ->allowEmpty('tipo');

        $validator
            ->allowEmpty('datos_adicionales');

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
        $rules->add($rules->existsIn(['aggressor_id'], 'Aggressors'));
        $rules->add($rules->existsIn(['history_id'], 'Histories'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['log_id'], 'Logs'));
        return $rules;
    }
}
