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
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $InterventionsPeople
 * @property \Cake\ORM\Association\HasMany $PeopleAdvocacies
 * @property \Cake\ORM\Association\HasMany $PeopleEntries
 * @property \Cake\ORM\Association\BelongsToMany $People
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
        $this->belongsToMany('People', [
            'foreignKey' => 'attention_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'attentions_people'
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
            ->integer('identificacion')
            ->allowEmpty('identificacion');

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
        return $rules;
    }
}
