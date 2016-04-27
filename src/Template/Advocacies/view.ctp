<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advocacy'), ['action' => 'edit', $advocacy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advocacy'), ['action' => 'delete', $advocacy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advocacy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Advocacies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advocacy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="advocacies view large-9 medium-8 columns content">
    <h3><?= h($advocacy->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($advocacy->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($advocacy->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($advocacy->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evaluations') ?></h4>
        <?php if (!empty($advocacy->evaluations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('People Id') ?></th>
                <th><?= __('Horario Habil') ?></th>
                <th><?= __('Disponibilidad') ?></th>
                <th><?= __('Tipo') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Nombre Locutor Coavif') ?></th>
                <th><?= __('Fecha Inicio') ?></th>
                <th><?= __('Fecha Fin') ?></th>
                <th><?= __('Advocacy Id') ?></th>
                <th><?= __('Institucion Referente') ?></th>
                <th><?= __('Persona Referente') ?></th>
                <th><?= __('Telefono Referente') ?></th>
                <th><?= __('Observaciones') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($advocacy->evaluations as $evaluations): ?>
            <tr>
                <td><?= h($evaluations->id) ?></td>
                <td><?= h($evaluations->people_id) ?></td>
                <td><?= h($evaluations->horario_habil) ?></td>
                <td><?= h($evaluations->disponibilidad) ?></td>
                <td><?= h($evaluations->tipo) ?></td>
                <td><?= h($evaluations->user_id) ?></td>
                <td><?= h($evaluations->nombre_locutor_coavif) ?></td>
                <td><?= h($evaluations->fecha_inicio) ?></td>
                <td><?= h($evaluations->fecha_fin) ?></td>
                <td><?= h($evaluations->advocacy_id) ?></td>
                <td><?= h($evaluations->institucion_referente) ?></td>
                <td><?= h($evaluations->persona_referente) ?></td>
                <td><?= h($evaluations->telefono_referente) ?></td>
                <td><?= h($evaluations->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evaluations', 'action' => 'view', $evaluations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evaluations', 'action' => 'edit', $evaluations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evaluations', 'action' => 'delete', $evaluations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Followups') ?></h4>
        <?php if (!empty($advocacy->followups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('User Id') ?></th>
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
            <?php foreach ($advocacy->followups as $followups): ?>
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
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($advocacy->people)): ?>
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
            <?php foreach ($advocacy->people as $people): ?>
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
