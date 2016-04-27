<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Histories'), ['controller' => 'Histories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New History'), ['controller' => 'Histories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aggressors'), ['controller' => 'Aggressors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aggressor'), ['controller' => 'Aggressors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List External References'), ['controller' => 'ExternalReferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New External Reference'), ['controller' => 'ExternalReferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internal References'), ['controller' => 'InternalReferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['controller' => 'InternalReferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Interventions'), ['controller' => 'Interventions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intervention'), ['controller' => 'Interventions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people index large-9 medium-8 columns content">
    <h3><?= __('People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('apellidos') ?></th>
                <th><?= $this->Paginator->sort('fecha_de_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('estado_civil') ?></th>
                <th><?= $this->Paginator->sort('escolaridad') ?></th>
                <th><?= $this->Paginator->sort('atencion_especializada') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('genero') ?></th>
                <th><?= $this->Paginator->sort('ocupacion') ?></th>
                <th><?= $this->Paginator->sort('lugar_trabajo') ?></th>
                <th><?= $this->Paginator->sort('adicciones') ?></th>
                <th><?= $this->Paginator->sort('condicion_migratoria') ?></th>
                <th><?= $this->Paginator->sort('condicion_laboral') ?></th>
                <th><?= $this->Paginator->sort('experiencia_laboral') ?></th>
                <th><?= $this->Paginator->sort('condicion_aseguramiento') ?></th>
                <th><?= $this->Paginator->sort('vivienda') ?></th>
                <th><?= $this->Paginator->sort('num_hijos_ceaam') ?></th>
                <th><?= $this->Paginator->sort('tipo_familia') ?></th>
                <th><?= $this->Paginator->sort('embarazo') ?></th>
                <th><?= $this->Paginator->sort('condicion_salud') ?></th>
                <th><?= $this->Paginator->sort('identificacion') ?></th>
                <th><?= $this->Paginator->sort('tipo_identificacion') ?></th>
                <th><?= $this->Paginator->sort('transfer_id') ?></th>
                <th><?= $this->Paginator->sort('aggressor_id') ?></th>
                <th><?= $this->Paginator->sort('history_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->id) ?></td>
                <td><?= h($person->nombre) ?></td>
                <td><?= h($person->apellidos) ?></td>
                <td><?= h($person->fecha_de_nacimiento) ?></td>
                <td><?= h($person->estado_civil) ?></td>
                <td><?= h($person->escolaridad) ?></td>
                <td><?= h($person->atencion_especializada) ?></td>
                <td><?= h($person->nacionalidad) ?></td>
                <td><?= h($person->genero) ?></td>
                <td><?= h($person->ocupacion) ?></td>
                <td><?= h($person->lugar_trabajo) ?></td>
                <td><?= h($person->adicciones) ?></td>
                <td><?= h($person->condicion_migratoria) ?></td>
                <td><?= h($person->condicion_laboral) ?></td>
                <td><?= $this->Number->format($person->experiencia_laboral) ?></td>
                <td><?= h($person->condicion_aseguramiento) ?></td>
                <td><?= h($person->vivienda) ?></td>
                <td><?= $this->Number->format($person->num_hijos_ceaam) ?></td>
                <td><?= h($person->tipo_familia) ?></td>
                <td><?= $this->Number->format($person->embarazo) ?></td>
                <td><?= h($person->condicion_salud) ?></td>
                <td><?= h($person->identificacion) ?></td>
                <td><?= h($person->tipo_identificacion) ?></td>
                <td><?= $this->Number->format($person->transfer_id) ?></td>
                <td><?= $this->Number->format($person->aggressor_id) ?></td>
                <td><?= $person->has('history') ? $this->Html->link($person->history->id, ['controller' => 'Histories', 'action' => 'view', $person->history->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
