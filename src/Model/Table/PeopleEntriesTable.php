<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleEntries Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Attentions
 *
 * @method \App\Model\Entity\PeopleEntry get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleEntry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleEntry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleEntry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleEntry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleEntry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleEntry findOrCreate($search, callable $callback = null)
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
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
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

        $validator
            ->boolean('direccion_oculta')
            ->allowEmpty('direccion_oculta');

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
        $rules->add($rules->existsIn(['attention_id'], 'Attentions'));
        return $rules;
    }
}
