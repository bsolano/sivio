<?php
namespace App\Model\Table;

use App\Model\Entity\Transfer;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transfers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\HasMany $People
 */
class TransfersTable extends Table
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

        $this->table('transfers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('People', [
            'foreignKey' => 'transfer_id'
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
            ->allowEmpty('entidad_traslada');

        $validator
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->boolean('consentimiento')
            ->allowEmpty('consentimiento');

        $validator
            ->boolean('plan_emergencia')
            ->allowEmpty('plan_emergencia');

        $validator
            ->boolean('dependientes_directos')
            ->allowEmpty('dependientes_directos');

        $validator
            ->allowEmpty('testigos');

        $validator
            ->allowEmpty('acta_observacion');

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
        return $rules;
    }
}
