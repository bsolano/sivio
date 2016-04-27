<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transfer'), ['action' => 'edit', $transfer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transfer'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transfers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transfers view large-9 medium-8 columns content">
    <h3><?= h($transfer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Entidad Traslada') ?></th>
            <td><?= h($transfer->entidad_traslada) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($transfer->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($transfer->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($transfer->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($transfer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Person Id') ?></th>
            <td><?= $this->Number->format($transfer->person_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Consentimiento') ?></th>
            <td><?= $transfer->consentimiento ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Plan Emergencia') ?></th>
            <td><?= $transfer->plan_emergencia ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Dependientes Directos') ?></th>
            <td><?= $transfer->dependientes_directos ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Testigos') ?></h4>
        <?= $this->Text->autoParagraph(h($transfer->testigos)); ?>
    </div>
    <div class="row">
        <h4><?= __('Acta Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($transfer->acta_observacion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($transfer->people)): ?>
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
            <?php foreach ($transfer->people as $people): ?>
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
