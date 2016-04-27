<?php
namespace App\Model\Table;

use App\Model\Entity\Family;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Families Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $People
 */
class FamiliesTable extends Table
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

        $this->table('families');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('People', [
            'foreignKey' => 'family_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'people_families'
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
            ->allowEmpty('num_familia');

        return $validator;
    }
}
