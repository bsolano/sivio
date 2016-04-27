<?php
namespace App\Model\Table;

use App\Model\Entity\Entry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entries Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsToMany $People
 */
class EntriesTable extends Table
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

        $this->table('entries');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('People', [
            'foreignKey' => 'entry_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'people_entries'
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
            ->allowEmpty('provincia');

        $validator
            ->allowEmpty('canton');

        $validator
            ->allowEmpty('ceaam_ingresa');

        $validator
            ->allowEmpty('tipo_ingreso');

        $validator
            ->allowEmpty('tipo_egreso');

        $validator
            ->allowEmpty('motivo_ingreso');

        $validator
            ->allowEmpty('ultimo_episodio');

        $validator
            ->allowEmpty('destino_extranjero');

        $validator
            ->allowEmpty('kit');

        $validator
            ->allowEmpty('entidad_traslada');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
