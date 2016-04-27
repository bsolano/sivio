<?php
namespace App\Model\Table;

use App\Model\Entity\Aco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Acos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentAcos
 * @property \Cake\ORM\Association\HasMany $ChildAcos
 * @property \Cake\ORM\Association\BelongsToMany $Aros
 */
class AcosTable extends Table
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

        $this->table('acos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentAcos', [
            'className' => 'Acos',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildAcos', [
            'className' => 'Acos',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsToMany('Aros', [
            'foreignKey' => 'aco_id',
            'targetForeignKey' => 'aro_id',
            'joinTable' => 'aros_acos'
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
            ->allowEmpty('model');

        $validator
            ->integer('foreign_key')
            ->allowEmpty('foreign_key');

        $validator
            ->allowEmpty('alias');

        $validator
            ->integer('lft')
            ->allowEmpty('lft');

        $validator
            ->integer('rght')
            ->allowEmpty('rght');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentAcos'));
        return $rules;
    }
}
