<?php
namespace App\Model\Table;

use App\Model\Entity\Intervention;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Interventions Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $People
 */
class InterventionsTable extends Table
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

        $this->table('interventions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsToMany('People', [
            'foreignKey' => 'intervention_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'interventions_people'
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
            ->boolean('programa_capacitacion')
            ->allowEmpty('programa_capacitacion');

        $validator
            ->boolean('certificacion_tecnica')
            ->allowEmpty('certificacion_tecnica');

        $validator
            ->integer('bisuteria_artesania')
            ->allowEmpty('bisuteria_artesania');

        $validator
            ->integer('cuido_adultos')
            ->allowEmpty('cuido_adultos');

        $validator
            ->boolean('cuido_menores')
            ->allowEmpty('cuido_menores');

        $validator
            ->boolean('computacion')
            ->allowEmpty('computacion');

        $validator
            ->boolean('acrilico')
            ->allowEmpty('acrilico');

        $validator
            ->boolean('maquillaje')
            ->allowEmpty('maquillaje');

        $validator
            ->boolean('corte_confeccion')
            ->allowEmpty('corte_confeccion');

        $validator
            ->boolean('peluqueria')
            ->allowEmpty('peluqueria');

        $validator
            ->allowEmpty('cursos_formacion');

        $validator
            ->boolean('desea_intervencion')
            ->allowEmpty('desea_intervencion');

        $validator
            ->allowEmpty('resolucion_conflictos');

        $validator
            ->allowEmpty('egresos_tecnicos');

        $validator
            ->integer('valoracion_proceso')
            ->allowEmpty('valoracion_proceso');

        $validator
            ->integer('atencion_quejas')
            ->allowEmpty('atencion_quejas');

        $validator
            ->allowEmpty('individual');

        $validator
            ->integer('grupal')
            ->allowEmpty('grupal');

        $validator
            ->allowEmpty('talleres');

        $validator
            ->allowEmpty('coordinaciones');

        $validator
            ->integer('informes')
            ->allowEmpty('informes');

        $validator
            ->integer('referencias')
            ->allowEmpty('referencias');

        $validator
            ->integer('acompanamiento_profesional')
            ->allowEmpty('acompanamiento_profesional');

        $validator
            ->allowEmpty('plan_seguridad');

        $validator
            ->allowEmpty('criterio_especializado');

        $validator
            ->allowEmpty('representacion_legal');

        $validator
            ->allowEmpty('consultorio_juridico');

        return $validator;
    }
}
