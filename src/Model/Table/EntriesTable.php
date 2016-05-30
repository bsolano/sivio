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
            ->allowEmpty('ceaam_ingresa');

        $validator
            ->allowEmpty('tipo_ing_eg');

        $validator
            ->allowEmpty('motivo_ing_eg');

        $validator
            ->allowEmpty('destino_extranjero');

        $validator
            ->allowEmpty('entidad_traslada');

        $validator
            ->allowEmpty('provincia_destino');

        $validator
            ->allowEmpty('canton_destino');

        return $validator;
    }
}
