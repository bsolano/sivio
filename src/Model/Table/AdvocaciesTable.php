<?php
namespace App\Model\Table;

use App\Model\Entity\Advocacy;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Advocacies Model
 *
 * @property \Cake\ORM\Association\HasMany $Evaluations
 * @property \Cake\ORM\Association\HasMany $Followups
 * @property \Cake\ORM\Association\BelongsToMany $People
 */
class AdvocaciesTable extends Table
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

        $this->table('advocacies');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Evaluations', [
            'foreignKey' => 'advocacy_id'
        ]);
        $this->hasMany('Followups', [
            'foreignKey' => 'advocacy_id'
        ]);
        $this->belongsToMany('People', [
            'foreignKey' => 'advocacy_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'people_advocacies'
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
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('telefono');

        return $validator;
    }
}
