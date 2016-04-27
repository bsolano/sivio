<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entry'), ['action' => 'edit', $entry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entry'), ['action' => 'delete', $entry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entries view large-9 medium-8 columns content">
    <h3><?= h($entry->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Provincia') ?></th>
            <td><?= h($entry->provincia) ?></td>
        </tr>
        <tr>
            <th><?= __('Canton') ?></th>
            <td><?= h($entry->canton) ?></td>
        </tr>
        <tr>
            <th><?= __('Ceaam Ingresa') ?></th>
            <td><?= h($entry->ceaam_ingresa) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Ingreso') ?></th>
            <td><?= h($entry->tipo_ingreso) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Egreso') ?></th>
            <td><?= h($entry->tipo_egreso) ?></td>
        </tr>
        <tr>
            <th><?= __('Motivo Ingreso') ?></th>
            <td><?= h($entry->motivo_ingreso) ?></td>
        </tr>
        <tr>
            <th><?= __('Destino Extranjero') ?></th>
            <td><?= h($entry->destino_extranjero) ?></td>
        </tr>
        <tr>
            <th><?= __('Kit') ?></th>
            <td><?= h($entry->kit) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $entry->has('user') ? $this->Html->link($entry->user->id, ['controller' => 'Users', 'action' => 'view', $entry->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Entidad Traslada') ?></th>
            <td><?= h($entry->entidad_traslada) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entry->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ultimo Episodio') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->ultimo_episodio)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($entry->people)): ?>
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
            <?php foreach ($entry->people as $people): ?>
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
