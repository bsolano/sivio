<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Intervention'), ['action' => 'edit', $intervention->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Intervention'), ['action' => 'delete', $intervention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intervention->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Interventions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intervention'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="interventions view large-9 medium-8 columns content">
    <h3><?= h($intervention->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cursos Formacion') ?></th>
            <td><?= h($intervention->cursos_formacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Resolucion Conflictos') ?></th>
            <td><?= h($intervention->resolucion_conflictos) ?></td>
        </tr>
        <tr>
            <th><?= __('Egresos Tecnicos') ?></th>
            <td><?= h($intervention->egresos_tecnicos) ?></td>
        </tr>
        <tr>
            <th><?= __('Individual') ?></th>
            <td><?= h($intervention->individual) ?></td>
        </tr>
        <tr>
            <th><?= __('Talleres') ?></th>
            <td><?= h($intervention->talleres) ?></td>
        </tr>
        <tr>
            <th><?= __('Coordinaciones') ?></th>
            <td><?= h($intervention->coordinaciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Plan Seguridad') ?></th>
            <td><?= h($intervention->plan_seguridad) ?></td>
        </tr>
        <tr>
            <th><?= __('Criterio Especializado') ?></th>
            <td><?= h($intervention->criterio_especializado) ?></td>
        </tr>
        <tr>
            <th><?= __('Representacion Legal') ?></th>
            <td><?= h($intervention->representacion_legal) ?></td>
        </tr>
        <tr>
            <th><?= __('Consultorio Juridico') ?></th>
            <td><?= h($intervention->consultorio_juridico) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($intervention->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Bisuteria Artesania') ?></th>
            <td><?= $this->Number->format($intervention->bisuteria_artesania) ?></td>
        </tr>
        <tr>
            <th><?= __('Cuido Adultos') ?></th>
            <td><?= $this->Number->format($intervention->cuido_adultos) ?></td>
        </tr>
        <tr>
            <th><?= __('Valoracion Proceso') ?></th>
            <td><?= $this->Number->format($intervention->valoracion_proceso) ?></td>
        </tr>
        <tr>
            <th><?= __('Atencion Quejas') ?></th>
            <td><?= $this->Number->format($intervention->atencion_quejas) ?></td>
        </tr>
        <tr>
            <th><?= __('Grupal') ?></th>
            <td><?= $this->Number->format($intervention->grupal) ?></td>
        </tr>
        <tr>
            <th><?= __('Informes') ?></th>
            <td><?= $this->Number->format($intervention->informes) ?></td>
        </tr>
        <tr>
            <th><?= __('Referencias') ?></th>
            <td><?= $this->Number->format($intervention->referencias) ?></td>
        </tr>
        <tr>
            <th><?= __('Acompanamiento Profesional') ?></th>
            <td><?= $this->Number->format($intervention->acompanamiento_profesional) ?></td>
        </tr>
        <tr>
            <th><?= __('Programa Capacitacion') ?></th>
            <td><?= $intervention->programa_capacitacion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Certificacion Tecnica') ?></th>
            <td><?= $intervention->certificacion_tecnica ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Cuido Menores') ?></th>
            <td><?= $intervention->cuido_menores ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Computacion') ?></th>
            <td><?= $intervention->computacion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Acrilico') ?></th>
            <td><?= $intervention->acrilico ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Maquillaje') ?></th>
            <td><?= $intervention->maquillaje ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Corte Confeccion') ?></th>
            <td><?= $intervention->corte_confeccion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Peluqueria') ?></th>
            <td><?= $intervention->peluqueria ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Desea Intervencion') ?></th>
            <td><?= $intervention->desea_intervencion ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($intervention->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Apellidos') ?></th>
                <th><?= __('Fecha De Nacimiento') ?></th>
                <th><?= __('Estado Civil') ?></th>
                <th><?= __('Escolaridad') ?></th>
                <th><?= __('Atencion Especializada') ?></th>
                <th><?= __('Nacionalidad') ?></th>
                <th><?= __('Genero') ?></th>
                <th><?= __('Ocupacion') ?></th>
                <th><?= __('Lugar Trabajo') ?></th>
                <th><?= __('Adicciones') ?></th>
                <th><?= __('Condicion Migratoria') ?></th>
                <th><?= __('Condicion Laboral') ?></th>
                <th><?= __('Experiencia Laboral') ?></th>
                <th><?= __('Condicion Aseguramiento') ?></th>
                <th><?= __('Vivienda') ?></th>
                <th><?= __('Num Hijos Ceaam') ?></th>
                <th><?= __('Tipo Familia') ?></th>
                <th><?= __('Embarazo') ?></th>
                <th><?= __('Condicion Salud') ?></th>
                <th><?= __('Identificacion') ?></th>
                <th><?= __('Tipo Identificacion') ?></th>
                <th><?= __('Transfer Id') ?></th>
                <th><?= __('Aggressor Id') ?></th>
                <th><?= __('History Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($intervention->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->nombre) ?></td>
                <td><?= h($people->apellidos) ?></td>
                <td><?= h($people->fecha_de_nacimiento) ?></td>
                <td><?= h($people->estado_civil) ?></td>
                <td><?= h($people->escolaridad) ?></td>
                <td><?= h($people->atencion_especializada) ?></td>
                <td><?= h($people->nacionalidad) ?></td>
                <td><?= h($people->genero) ?></td>
                <td><?= h($people->ocupacion) ?></td>
                <td><?= h($people->lugar_trabajo) ?></td>
                <td><?= h($people->adicciones) ?></td>
                <td><?= h($people->condicion_migratoria) ?></td>
                <td><?= h($people->condicion_laboral) ?></td>
                <td><?= h($people->experiencia_laboral) ?></td>
                <td><?= h($people->condicion_aseguramiento) ?></td>
                <td><?= h($people->vivienda) ?></td>
                <td><?= h($people->num_hijos_ceaam) ?></td>
                <td><?= h($people->tipo_familia) ?></td>
                <td><?= h($people->embarazo) ?></td>
                <td><?= h($people->condicion_salud) ?></td>
                <td><?= h($people->identificacion) ?></td>
                <td><?= h($people->tipo_identificacion) ?></td>
                <td><?= h($people->transfer_id) ?></td>
                <td><?= h($people->aggressor_id) ?></td>
                <td><?= h($people->history_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
