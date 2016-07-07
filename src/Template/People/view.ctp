<!--
    Author: Brayan Salas Concepción|B26050
    
    Presenta la información detallada de la usuaria.
    Información personal, lista de agresores, consultas, atenciones, entre otros.
-->
<div class="large-8 large-offset-1 columns content">
    <h3><?= h($person->nombre) ?> <?= h($person->apellidos) ?></h3>
</div>
<!--
    Editar
        Permite editar la información personal de la usuaria.
-->
<div class="large-3 large-right columns content">
    <?= $this->Html->link('Editar Perfil', ['action' => 'edit', $person->id], ['class' => 'secondary button']) ?>
</div>
<!--
    Vista Información personal de la usuaria.
-->
<div class="people view large-12 large-centered medium-8 columns">
    <div class="large-12 large-offset-0 medium-8 columns">
        <h3>Información Personal</h3>
        </br></br>
    </div>
    <div class="large-11 large-centered columns">
        <div class="large-4 columns">
            <dl>
                <dt><?= 'Ocupación:' ?></dt>
                <dd>
                    <?php
                        if ($person->ocupacion != null):
                            echo $person->ocupacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Lugar de Trabajo:' ?></dt>
                <dd>
                    <?php
                        if ($person->lugar_trabajo != null):
                            echo $person->lugar_trabajo;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Migratoria:' ?></dt>
                <dd>
                    <?php
                        if ($person->condicion_migratoria != null):
                            echo $person->condicion_migratoria;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Vivienda:') ?></dt>
                <dd>
                    <?php
                        if ($person->vivienda != null):
                            echo $person->vivienda;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Tipo de Familia:' ?></dt>
                <dd>
                    <?php
                        if ($person->tipo_familia != null):
                            echo $person->tipo_familia;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
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
                </br>
                <dt><?= 'Provincia:' ?></dt>
                <dd>
                    <?php
                        if ($person->provincia != null):
                            echo $person->provincia;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
            </dl>
        </div>
        
        
        <div class="large-4 columns">
            <dl>
                <dt><?= __('Estado Civil:') ?></dt>
                <dd>
                    <?php
                        if ($person->estado_civil != null):
                            echo $person->estado_civil;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Escolaridad:') ?></dt>
                <dd>
                    <?php
                        if ($person->escolaridad != null):
                            echo $person->escolaridad;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Laboral:' ?></dt>
                <dd>
                    <?php
                        if ($person->condicion_laboral != null):
                            echo $person->condicion_laboral;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Identificación:' ?></dt>
                <dd>
                    <?php
                        if ($person->identificacion != null):
                            echo $person->identificacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Tipo de Identificación:' ?></dt>
                <dd>
                    <?php
                        if ($person->tipo_identificacion != null):
                            echo $person->tipo_identificacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Fecha De Nacimiento:') ?></dt>
                <dd>
                    <?php
                        if ($person->fecha_de_nacimiento != null):
                            echo $person->fecha_de_nacimiento;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Cantón:' ?></dt>
                <dd>
                    <?php
                        if ($person->canton != null):
                            echo $person->canton;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
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
                <dt><?= 'Teléfono:' ?></dt>
                <dd><?= h($person->telefono) ?></dd>
                </br>
                <dt><?= 'Dirección exacta:' ?></dt>
                <dd><?= h($person->direccion) ?></dd>
            </dl>
        </div>
    </div>
    <div class="large-12 columns"></div>
    <div class="large-10 large-centered columns">
        <div class="large-5 columns">
            <dl>
                <dt><?= 'Adiccion(es)' ?></dt>
                <dd>
                    <?php foreach($person->adicciones as $adiccion): ?> 
                        <ul><?= h($adiccion) ?></ul>
                    <?php endforeach ?>
                </dd>
            </dl>
        </div>
        <div class="large-5 columns">
            <dl>
                <dt><?= 'Condición de Salud' ?></dt>
                <dd>
                    <?php foreach($person->condicion_salud as $condicion): ?> 
                        <ul><?= h($condicion) ?></ul>
                    <?php endforeach ?>
                </dd>
            </dl>
        </div>
    </div>
    <div class="large-12 columns"></br></br></div>
<!--
    Vista Información relacionada a la usuaria.
-->
    <div class="large-12 large-offset-0 medium-8 columns">
        <h3>Información Relacionada</h3>
        </br></br>
    </div>
    <div class="large-11 large-centered columns">
        <div class="related">
            <h4><?= __('Transferencias Relacionadas') ?></h4>
            <?php if (!empty($person->transfers)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Entidad que traslada') ?></th>
                    <th><?= __('Nombre') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th><?= __('Direccion') ?></th>
                    <th><?= __('Consentimiento') ?></th>
                    <th><?= __('Plan de emergencia') ?></th>
                    <th><?= __('Dependientes directos') ?></th>
                    <th><?= __('Testigos') ?></th>
                    <th><?= __('Acta de observación') ?></th>
                    <th class="actions"><?= 'Acciones' ?></th>
                </tr>
                <?php foreach ($person->transfers as $transfers): ?>
                <tr>
                    <td><?= h($transfers->id) ?></td>
                    <td><?= h($transfers->person->nombre) ?></td>
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
                        <?= $this->Html->link('Ver', ['controller' => 'Transfers', 'action' => 'view', $transfers->id]) ?>
                        <?= $this->Html->link('Editar', ['controller' => 'Transfers', 'action' => 'edit', $transfers->id]) ?>
                        <?= $this->Form->postLink('Eliminar', ['controller' => 'Transfers', 'action' => 'delete', $transfers->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $transfers->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Agresores Relacionados') ?></h4>
            <?php if (!empty($person->aggressors)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Vinculo') ?></th>
                    <th><?= __('Tiempo de la relación') ?></th>
                    <th><?= __('Tiempo de la agresión') ?></th>
                    <th><?= __('Número de separaciones') ?></th>
                    <th class="actions"><?= 'Acciones' ?></th>
                </tr>
                <?php foreach ($person->aggressors as $aggressors): ?>
                <tr>
                    <td><?= h($aggressors->id) ?></td>
                    <td><?= h($aggressors->person->nombre) ?></td>
                    <td><?= h($aggressors->vinculo) ?></td>
                    <td><?= h($aggressors->tiempo_relacion) ?></td>
                    <td><?= h($aggressors->tiempo_agresion) ?></td>
                    <td><?= h($aggressors->num_separaciones) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['controller' => 'Aggressors', 'action' => 'view', $aggressors->id]) ?>
                        <?= $this->Html->link('Editar', ['controller' => 'Aggressors', 'action' => 'edit', $aggressors->id]) ?>
                        <?= $this->Form->postLink('Eliminar', ['controller' => 'Aggressors', 'action' => 'delete', $aggressors->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $aggressors->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Consultas Relacionadas') ?></h4>
            <?php if (!empty($person->consultations)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Observaciones') ?></th>
                    <th><?= __('Tipo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->consultations as $consultations): ?>
                <tr>
                    <td><?= h($consultations->id) ?></td>
                    <td><?= h($consultations->person->nombre) ?></td>
                    <td><?= h($consultations->observaciones) ?></td>
                    <td><?= h($consultations->tipo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $consultations->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Referencias Externas Relacionadas') ?></h4>
            <?php if (!empty($person->external_references)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Receptor') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Dirección') ?></th>
                    <th><?= __('Observación') ?></th>
                    <th><?= __('Creado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->external_references as $externalReferences): ?>
                <tr>
                    <td><?= h($externalReferences->id) ?></td>
                    <td><?= h($externalReferences->receptor) ?></td>
                    <td><?= h($externalReferences->telefono) ?></td>
                    <td><?= h($externalReferences->persona) ?></td>
                    <td><?= h($externalReferences->direccion) ?></td>
                    <td><?= h($externalReferences->observacion) ?></td>
                    <td><?= h($externalReferences->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'ExternalReferences', 'action' => 'view', $externalReferences->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'ExternalReferences', 'action' => 'edit', $externalReferences->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'ExternalReferences', 'action' => 'delete', $externalReferences->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $externalReferences->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="table-scroll">
            <h4><?= __('Seguimientos Relacionados') ?></h4>
            <?php if (!empty($person->followups)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Medio de comunicación') ?></th>
                    <th><?= __('Aspectos sociales') ?></th>
                    <th><?= __('Apoyo institucional') ?></th>
                    <th><?= __('Legales') ?></th>
                    <th><?= __('Seguridad') ?></th>
                    <th><?= __('Seguimiento del Kit') ?></th>
                    <th><?= __('Seguimiento de referencia') ?></th>
                    <th><?= __('Lugar de atención') ?></th>
                    <th><?= __('Enfrenta violencia') ?></th>
                    <th><?= __('Convivencia') ?></th>
                    <th><?= __('Atencion especializada') ?></th>
                    <th><?= __('Creado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->followups as $followups): ?>
                <tr>
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
                    <td><?= h($followups->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Followups', 'action' => 'view', $followups->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Followups', 'action' => 'edit', $followups->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Followups', 'action' => 'delete', $followups->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $followups->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Referencias Internas Relacionadas') ?></h4>
            <?php if (!empty($person->internal_references)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Persona') ?></th>
                    <th><?= __('Teléfono') ?></th>
                    <th><?= __('Oficina') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->internal_references as $internalReferences): ?>
                <tr>
                    <td><?= h($internalReferences->person->nombre) ?></td>
                    <td><?= h($internalReferences->telefono) ?></td>
                    <td><?= h($internalReferences->oficina) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'InternalReferences', 'action' => 'view', $internalReferences->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'InternalReferences', 'action' => 'edit', $internalReferences->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'InternalReferences', 'action' => 'delete', $internalReferences->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $internalReferences->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Intervenciones Relacionadas') ?></h4>
            <?php if (!empty($person->interventions)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Programa de capacitación') ?></th>
                    <th><?= __('Certificación técnica') ?></th>
                    <th><?= __('Bisuteria artesania') ?></th>
                    <th><?= __('Cuido de adultos') ?></th>
                    <th><?= __('Cuido de menores') ?></th>
                    <th><?= __('Computación') ?></th>
                    <th><?= __('Acrilico') ?></th>
                    <th><?= __('Maquillaje') ?></th>
                    <th><?= __('Corte confección') ?></th>
                    <th><?= __('Peluquería') ?></th>
                    <th><?= __('Cursos formación') ?></th>
                    <th><?= __('Desea intervención') ?></th>
                    <th><?= __('Resolucion de conflictos') ?></th>
                    <th><?= __('Egresos técnicos') ?></th>
                    <th><?= __('Valoración del proceso') ?></th>
                    <th><?= __('Atencion de quejas') ?></th>
                    <th><?= __('Individual') ?></th>
                    <th><?= __('Grupal') ?></th>
                    <th><?= __('Talleres') ?></th>
                    <th><?= __('Coordinaciones') ?></th>
                    <th><?= __('Informes') ?></th>
                    <th><?= __('Referencias') ?></th>
                    <th><?= __('Acompanamiento profesional') ?></th>
                    <th><?= __('Plan de seguridad') ?></th>
                    <th><?= __('Criterio especializado') ?></th>
                    <th><?= __('Representación Legal') ?></th>
                    <th><?= __('Consultorio Jurídico') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->interventions as $interventions): ?>
                <tr>
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
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Interventions', 'action' => 'view', $interventions->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Interventions', 'action' => 'edit', $interventions->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Interventions', 'action' => 'delete', $interventions->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $interventions->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Apoyo Relacionado') ?></h4>
            <?php if (!empty($person->advocacies)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <th><?= __('Telefono') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->advocacies as $advocacies): ?>
                <tr>
                    <td><?= h($advocacies->nombre) ?></td>
                    <td><?= h($advocacies->telefono) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Advocacies', 'action' => 'view', $advocacies->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Advocacies', 'action' => 'edit', $advocacies->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Advocacies', 'action' => 'delete', $advocacies->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $advocacies->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Entradas Relacionadas') ?></h4>
            <?php if (!empty($person->entries)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <th><?= __('Cantón') ?></th>
                    <th><?= __('Ceaam que ingresa') ?></th>
                    <th><?= __('Tipo ingreso') ?></th>
                    <th><?= __('Tipo egreso') ?></th>
                    <th><?= __('Motivo de ingreso') ?></th>
                    <th><?= __('Último episodio') ?></th>
                    <th><?= __('Destino Extranjero') ?></th>
                    <th><?= __('Kit') ?></th>
                    <th><?= __('Entidad que traslada') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->entries as $entries): ?>
                <tr>
                    <td><?= h($entries->provincia) ?></td>
                    <td><?= h($entries->canton) ?></td>
                    <td><?= h($entries->ceaam_ingresa) ?></td>
                    <td><?= h($entries->tipo_ingreso) ?></td>
                    <td><?= h($entries->tipo_egreso) ?></td>
                    <td><?= h($entries->motivo_ingreso) ?></td>
                    <td><?= h($entries->ultimo_episodio) ?></td>
                    <td><?= h($entries->destino_extranjero) ?></td>
                    <td><?= h($entries->kit) ?></td>
                    <td><?= h($entries->entidad_traslada) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Entries', 'action' => 'view', $entries->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Entries', 'action' => 'edit', $entries->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Entries', 'action' => 'delete', $entries->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $entries->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Familia Relacionada') ?></h4>
            <?php if (!empty($person->families)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Número de familia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($person->families as $families): ?>
                <tr>
                    <td><?= h($families->num_familia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Families', 'action' => 'view', $families->id]) ?>
                        <?= $this->Html->link(__('Editr'), ['controller' => 'Families', 'action' => 'edit', $families->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Families', 'action' => 'delete', $families->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $families->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Usuarios Relacionados') ?></h4>
            <?php if (!empty($person->users)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th><?= __('Username') ?></th>
                    <th><?= __('Rol') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
                <?php foreach ($person->users as $users): ?>
                <tr>
                    <td><?= h($users->username) ?></td>
                    <td><?= h($users->group_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Seguro que desea eliminar # {0}?', $users->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
                <ul>No hay registros</ul>
            <?php endif; ?>
        </div>
    </div>
</div>
