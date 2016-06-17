<div class="large-8 large-offset-1 columns content">
    <h3><?= h($person->nombre) ?> <?= h($person->apellidos) ?></h3>
</div>
<div class="large-3 large-right columns content">
    <?= $this->Html->link('Editar Perfil', ['action' => 'edit', $person->id], ['class' => 'secondary button']) ?>
</div>
<div class="people view large-12 large-centered medium-8 columns">
    <div class="large-11 large-centered columns">
        
        <div class="large-4 columns">
            <dl>
                <dt><?= 'Ocupación:' ?></dt>
                <dd><?= h($person->ocupacion) ?></dd>
                </br>
                <dt><?= 'Lugar de Trabajo:' ?></dt>
                <dd><?= h($person->lugar_trabajo) ?></dd>
                </br>
                <dt><?= 'Condición Migratoria:' ?></dt>
                <dd><?= h($person->condicion_migratoria) ?></dd>
                </br>
                <dt><?= __('Vivienda:') ?></dt>
                <dd><?= h($person->vivienda) ?></dd>
                </br>
                <dt><?= 'Tipo de Familia:' ?></dt>
                <dd><?= h($person->tipo_familia) ?></dd>
                </br>
                <dt><?= __('Embarazo:') ?></dt>
                <dd>
                    <?php
                        if ($person->embarazo == 0)
                            echo "No tiene";
                        else
                            echo $person->embarazo.' meses';
                    ?>
                </dd>
            </dl>
        </div>
        
        
        <div class="large-4 columns">
            <dl>
                <dt><?= __('Estado Civil:') ?></dt>
                <dd><?= h($person->estado_civil) ?></dd>
                </br>
                <dt><?= __('Escolaridad:') ?></dt>
                <dd><?= h($person->escolaridad) ?></dd>
                </br>
                <dt><?= 'Condición Laboral:' ?></dt>
                <dd><?= h($person->condicion_laboral) ?></dd>
                </br>
                <dt><?= 'Identificación:' ?></dt>
                <dd><?= h($person->identificacion) ?></dd>
                </br>
                <dt><?= 'Tipo de Identificación:' ?></dt>
                <dd><?= h($person->tipo_identificacion) ?></dd>
                </br>
                <dt><?= __('Fecha De Nacimiento:') ?></dt>
                <dd><?= h($person->fecha_de_nacimiento) ?></dd>
            </dl>
        </div>
        
        
        <div class="large-4 columns">
            <dl>
                <dt><?= __('Nacionalidad:') ?></dt>
                <dd><?= h($person->nacionalidad) ?></dd>
                </br>
                <dt><?= 'Género:' ?></dt>
                <dd>
                    <?php
                        if ($person->genero == 'F')
                            echo 'Femenino';
                        else
                            echo 'Masculino';
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Aseguramiento:' ?></dt>
                <dd><?= h($person->condicion_aseguramiento) ?></dd>
                </br>
                <dt><?= __('Experiencia Laboral:') ?></dt>
                <?php if ($person->experiencia_laboral > 1): ?>
                    <dd><?= $this->Number->format($person->experiencia_laboral).' años' ?></dd>
                <?php else: ?> 
                    <?php if ($person->experiencia_laboral != 1): ?>
                        <dd>No tiene</dd>
                    <?php else: ?>
                        <dd><?= $this->Number->format($person->experiencia_laboral).' año' ?></dd>
                    <?php endif; ?>
                <?php endif; ?>
                </br>
                <dt><?= 'Cantidad de hijos en CEAAM:' ?></dt>
                <?php if ($person->num_hijos_ceaam != 0): ?>
                    <dd><?= $this->Number->format($person->num_hijos_ceaam) ?></dd>
                <?php else: ?>
                    <dd>No tiene</dd>
                <?php endif; ?>
                </br>
                <dt><?= 'Dirección:' ?></dt>
                <dd><?= h($person->tipo_familia) ?></dd>
            </dl>
        </div>
    </div>
        
        
    <div class="large-10 large-centered columns">
        <table class="hover">
            <tr>
                <th><?= 'Adiccion(es)' ?></th>
                <td>
                    <?php foreach($person->adicciones as $adiccion): ?> 
                    <ul><?= h($adiccion) ?></ul>
                    <?php endforeach ?>
                </td>
            </tr>
            <tr>
                <th><?= 'Condición de Salud' ?></th>
                <td>
                    <?php foreach($person->condicion_salud as $condicion): ?> 
                    <ul><?= h($condicion) ?></ul>
                    <?php endforeach ?>
                </td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Related Transfers') ?></h4>
            <?php if (!empty($person->transfers)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('Entidad Traslada') ?></th>
                    <th><?= __('Nombre') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th><?= __('Direccion') ?></th>
                    <th><?= __('Consentimiento') ?></th>
                    <th><?= __('Plan Emergencia') ?></th>
                    <th><?= __('Dependientes Directos') ?></th>
                    <th><?= __('Testigos') ?></th>
                    <th><?= __('Acta Observacion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->transfers as $transfers): ?>
                <tr>
                    <td><?= h($transfers->id) ?></td>
                    <td><?= h($transfers->person_id) ?></td>
                    <td><?= h($transfers->entidad_traslada) ?></td>
                    <td><?= h($transfers->nombre) ?></td>
                    <td><?= h($transfers->telefono) ?></td>
                    <td><?= h($transfers->direccion) ?></td>
                    <td><?= h($transfers->consentimiento) ?></td>
                    <td><?= h($transfers->plan_emergencia) ?></td>
                    <td><?= h($transfers->dependientes_directos) ?></td>
                    <td><?= h($transfers->testigos) ?></td>
                    <td><?= h($transfers->acta_observacion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Transfers', 'action' => 'view', $transfers->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Transfers', 'action' => 'edit', $transfers->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transfers', 'action' => 'delete', $transfers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Aggressors') ?></h4>
            <?php if (!empty($person->aggressors)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Vinculo') ?></th>
                    <th><?= __('Tiempo Relacion') ?></th>
                    <th><?= __('Tiempo Agresion') ?></th>
                    <th><?= __('Num Separaciones') ?></th>
                    <th><?= __('People Id') ?></th>
                    <th><?= __('People Aggressors Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->aggressors as $aggressors): ?>
                <tr>
                    <td><?= h($aggressors->person_id) ?></td>
                    <td><?= h($aggressors->id) ?></td>
                    <td><?= h($aggressors->vinculo) ?></td>
                    <td><?= h($aggressors->tiempo_relacion) ?></td>
                    <td><?= h($aggressors->tiempo_agresion) ?></td>
                    <td><?= h($aggressors->num_separaciones) ?></td>
                    <td><?= h($aggressors->people_id) ?></td>
                    <td><?= h($aggressors->people_aggressors_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Aggressors', 'action' => 'view', $aggressors->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Aggressors', 'action' => 'edit', $aggressors->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aggressors', 'action' => 'delete', $aggressors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggressors->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Consultations') ?></h4>
            <?php if (!empty($person->consultations)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('Observaciones') ?></th>
                    <th><?= __('Tipo') ?></th>
                    <th><?= __('User Id') ?></th>
                    <th><?= __('People Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->consultations as $consultations): ?>
                <tr>
                    <td><?= h($consultations->id) ?></td>
                    <td><?= h($consultations->person_id) ?></td>
                    <td><?= h($consultations->observaciones) ?></td>
                    <td><?= h($consultations->tipo) ?></td>
                    <td><?= h($consultations->user_id) ?></td>
                    <td><?= h($consultations->people_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related External References') ?></h4>
            <?php if (!empty($person->external_references)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Receptor') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('Direccion') ?></th>
                    <th><?= __('Observacion') ?></th>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->external_references as $externalReferences): ?>
                <tr>
                    <td><?= h($externalReferences->id) ?></td>
                    <td><?= h($externalReferences->receptor) ?></td>
                    <td><?= h($externalReferences->telefono) ?></td>
                    <td><?= h($externalReferences->person_id) ?></td>
                    <td><?= h($externalReferences->direccion) ?></td>
                    <td><?= h($externalReferences->observacion) ?></td>
                    <td><?= h($externalReferences->persona) ?></td>
                    <td><?= h($externalReferences->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'ExternalReferences', 'action' => 'view', $externalReferences->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'ExternalReferences', 'action' => 'edit', $externalReferences->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'ExternalReferences', 'action' => 'delete', $externalReferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $externalReferences->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="table-scroll">
            <h4><?= __('Related Followups') ?></h4>
            <?php if (!empty($person->followups)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <!--<th><?= __('Id') ?></th>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('User Id') ?></th>-->
                    <th><?= __('Created') ?></th>
                    <th><?= __('Medio Comunicacion') ?></th>
                    <th><?= __('Aspectos Sociales') ?></th>
                    <th><?= __('Apoyo Institucional') ?></th>
                    <th><?= __('Legales') ?></th>
                    <th><?= __('Seguridad') ?></th>
                    <th><?= __('Seguimiento Kit') ?></th>
                    <th><?= __('Seguimiento Referencia') ?></th>
                    <th><?= __('Lugar Atencion') ?></th>
                    <th><?= __('Enfrenta Violencia') ?></th>
                    <th><?= __('Convivencia') ?></th>
                    <th><?= __('Atencion Especializada') ?></th>
                    <th><?= __('Advocacy Id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->followups as $followups): ?>
                <tr>
                    <td><?= h($followups->id) ?></td>
                    <td><?= h($followups->person_id) ?></td>
                    <td><?= h($followups->created) ?></td>
                    <td><?= h($followups->user_id) ?></td>
                    <td><?= h($followups->medio_comunicacion) ?></td>
                    <td><?= h($followups->aspectos_sociales) ?></td>
                    <td><?= h($followups->apoyo_institucional) ?></td>
                    <td><?= h($followups->legales) ?></td>
                    <td><?= h($followups->seguridad) ?></td>
                    <td><?= h($followups->seguimiento_kit) ?></td>
                    <td><?= h($followups->seguimiento_referencia) ?></td>
                    <td><?= h($followups->lugar_atencion) ?></td>
                    <td><?= h($followups->enfrenta_violencia) ?></td>
                    <td><?= h($followups->convivencia) ?></td>
                    <td><?= h($followups->atencion_especializada) ?></td>
                    <td><?= h($followups->advocacy_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Followups', 'action' => 'view', $followups->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Followups', 'action' => 'edit', $followups->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Followups', 'action' => 'delete', $followups->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followups->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Internal References') ?></h4>
            <?php if (!empty($person->internal_references)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Person Id') ?></th>
                    <th><?= __('User Id') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th><?= __('Oficina') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->internal_references as $internalReferences): ?>
                <tr>
                    <td><?= h($internalReferences->id) ?></td>
                    <td><?= h($internalReferences->person_id) ?></td>
                    <td><?= h($internalReferences->user_id) ?></td>
                    <td><?= h($internalReferences->telefono) ?></td>
                    <td><?= h($internalReferences->oficina) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'InternalReferences', 'action' => 'view', $internalReferences->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'InternalReferences', 'action' => 'edit', $internalReferences->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternalReferences', 'action' => 'delete', $internalReferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalReferences->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Interventions') ?></h4>
            <?php if (!empty($person->interventions)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Programa Capacitacion') ?></th>
                    <th><?= __('Certificacion Tecnica') ?></th>
                    <th><?= __('Bisuteria Artesania') ?></th>
                    <th><?= __('Cuido Adultos') ?></th>
                    <th><?= __('Cuido Menores') ?></th>
                    <th><?= __('Computacion') ?></th>
                    <th><?= __('Acrilico') ?></th>
                    <th><?= __('Maquillaje') ?></th>
                    <th><?= __('Corte Confeccion') ?></th>
                    <th><?= __('Peluqueria') ?></th>
                    <th><?= __('Cursos Formacion') ?></th>
                    <th><?= __('Desea Intervencion') ?></th>
                    <th><?= __('Resolucion Conflictos') ?></th>
                    <th><?= __('Egresos Tecnicos') ?></th>
                    <th><?= __('Valoracion Proceso') ?></th>
                    <th><?= __('Atencion Quejas') ?></th>
                    <th><?= __('Individual') ?></th>
                    <th><?= __('Grupal') ?></th>
                    <th><?= __('Talleres') ?></th>
                    <th><?= __('Coordinaciones') ?></th>
                    <th><?= __('Informes') ?></th>
                    <th><?= __('Referencias') ?></th>
                    <th><?= __('Acompanamiento Profesional') ?></th>
                    <th><?= __('Plan Seguridad') ?></th>
                    <th><?= __('Criterio Especializado') ?></th>
                    <th><?= __('Representacion Legal') ?></th>
                    <th><?= __('Consultorio Juridico') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->interventions as $interventions): ?>
                <tr>
                    <td><?= h($interventions->id) ?></td>
                    <td><?= h($interventions->programa_capacitacion) ?></td>
                    <td><?= h($interventions->certificacion_tecnica) ?></td>
                    <td><?= h($interventions->bisuteria_artesania) ?></td>
                    <td><?= h($interventions->cuido_adultos) ?></td>
                    <td><?= h($interventions->cuido_menores) ?></td>
                    <td><?= h($interventions->computacion) ?></td>
                    <td><?= h($interventions->acrilico) ?></td>
                    <td><?= h($interventions->maquillaje) ?></td>
                    <td><?= h($interventions->corte_confeccion) ?></td>
                    <td><?= h($interventions->peluqueria) ?></td>
                    <td><?= h($interventions->cursos_formacion) ?></td>
                    <td><?= h($interventions->desea_intervencion) ?></td>
                    <td><?= h($interventions->resolucion_conflictos) ?></td>
                    <td><?= h($interventions->egresos_tecnicos) ?></td>
                    <td><?= h($interventions->valoracion_proceso) ?></td>
                    <td><?= h($interventions->atencion_quejas) ?></td>
                    <td><?= h($interventions->individual) ?></td>
                    <td><?= h($interventions->grupal) ?></td>
                    <td><?= h($interventions->talleres) ?></td>
                    <td><?= h($interventions->coordinaciones) ?></td>
                    <td><?= h($interventions->informes) ?></td>
                    <td><?= h($interventions->referencias) ?></td>
                    <td><?= h($interventions->acompanamiento_profesional) ?></td>
                    <td><?= h($interventions->plan_seguridad) ?></td>
                    <td><?= h($interventions->criterio_especializado) ?></td>
                    <td><?= h($interventions->representacion_legal) ?></td>
                    <td><?= h($interventions->consultorio_juridico) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Interventions', 'action' => 'view', $interventions->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Interventions', 'action' => 'edit', $interventions->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Interventions', 'action' => 'delete', $interventions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interventions->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Advocacies') ?></h4>
            <?php if (!empty($person->advocacies)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Nombre') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->advocacies as $advocacies): ?>
                <tr>
                    <td><?= h($advocacies->id) ?></td>
                    <td><?= h($advocacies->nombre) ?></td>
                    <td><?= h($advocacies->telefono) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Advocacies', 'action' => 'view', $advocacies->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Advocacies', 'action' => 'edit', $advocacies->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Advocacies', 'action' => 'delete', $advocacies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advocacies->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Entries') ?></h4>
            <?php if (!empty($person->entries)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Provincia') ?></th>
                    <th><?= __('Canton') ?></th>
                    <th><?= __('Ceaam Ingresa') ?></th>
                    <th><?= __('Tipo Ingreso') ?></th>
                    <th><?= __('Tipo Egreso') ?></th>
                    <th><?= __('Motivo Ingreso') ?></th>
                    <th><?= __('Ultimo Episodio') ?></th>
                    <th><?= __('Destino Extranjero') ?></th>
                    <th><?= __('Kit') ?></th>
                    <th><?= __('User Id') ?></th>
                    <th><?= __('Entidad Traslada') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->entries as $entries): ?>
                <tr>
                    <td><?= h($entries->id) ?></td>
                    <td><?= h($entries->provincia) ?></td>
                    <td><?= h($entries->canton) ?></td>
                    <td><?= h($entries->ceaam_ingresa) ?></td>
                    <td><?= h($entries->tipo_ingreso) ?></td>
                    <td><?= h($entries->tipo_egreso) ?></td>
                    <td><?= h($entries->motivo_ingreso) ?></td>
                    <td><?= h($entries->ultimo_episodio) ?></td>
                    <td><?= h($entries->destino_extranjero) ?></td>
                    <td><?= h($entries->kit) ?></td>
                    <td><?= h($entries->user_id) ?></td>
                    <td><?= h($entries->entidad_traslada) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Entries', 'action' => 'view', $entries->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Entries', 'action' => 'edit', $entries->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entries', 'action' => 'delete', $entries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entries->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Families') ?></h4>
            <?php if (!empty($person->families)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Num Familia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->families as $families): ?>
                <tr>
                    <td><?= h($families->id) ?></td>
                    <td><?= h($families->num_familia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Families', 'action' => 'view', $families->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Families', 'action' => 'edit', $families->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Families', 'action' => 'delete', $families->id], ['confirm' => __('Are you sure you want to delete # {0}?', $families->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Related Users') ?></h4>
            <?php if (!empty($person->users)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Username') ?></th>
                    <th><?= __('Password') ?></th>
                    <th><?= __('Group Id') ?></th>
                    <th><?= __('Created') ?></th>
                    <th><?= __('Modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->username) ?></td>
                    <td><?= h($users->password) ?></td>
                    <td><?= h($users->group_id) ?></td>
                    <td><?= h($users->created) ?></td>
                    <td><?= h($users->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
