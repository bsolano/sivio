<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attentions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Histories
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Logs
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $InterventionsPeople
 * @property \Cake\ORM\Association\HasMany $PeopleAdvocacies
 * @property \Cake\ORM\Association\HasMany $PeopleEntries
 *
 * @method \App\Model\Entity\Attention get($primaryKey, $options = [])
 * @method \App\Model\Entity\Attention newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Attention[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Attention|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Attention patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Attention[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Attention findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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
        $rules->add($rules->existsIn(['history_id'], 'Histories'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['log_id'], 'Logs'));
        return $rules;
    }
}
