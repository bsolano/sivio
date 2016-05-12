<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 * @property \Cake\ORM\Association\HasMany $Consultations
 * @property \Cake\ORM\Association\HasMany $Entries
 * @property \Cake\ORM\Association\HasMany $Evaluations
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\HasMany $InternalReferences
 * @property \Cake\ORM\Association\BelongsToMany $Followups
 * @property \Cake\ORM\Association\BelongsToMany $People
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Consultations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Entries', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Evaluations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Followups', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('InternalReferences', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Followups', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'followup_id',
            'joinTable' => 'followups_users'
        ]);
        $this->belongsToMany('People', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'users_people'
        ]);
        
        $this->addBehavior('Acl.Acl', ['type' => 'requester']);
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
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->add('password', 'minimo',array('rule' => array('minLength', 8),'message'=>'8 carácteres mínimo'))
            ->add('password', 'unaLetra',array('rule' => array('custom','/([a-z]{1,})/i'),'message'=>'Al menos 1 letra'))
            ->add('password', 'unNumero',array('rule' => array('custom','/([0-9]{1,})/i'),'message'=>'Al menos 1 numero'))
            ->add('password', 'unNumero',array('rule' => array('custom','/[,.!:]{1,}/'),'message'=>'Al menos un simbolo entre {,!.:}'));
            

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        return $rules;
    }
    
    public function beforeSave(Event $event, Entity $entity, \ArrayObject $options)
    {
        $hasher = new DefaultPasswordHasher;
        $entity->password = $hasher->hash($entity->password);
        return true;
    }
}
