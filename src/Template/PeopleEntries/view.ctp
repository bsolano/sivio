<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Entry'), ['action' => 'edit', $peopleEntry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Entry'), ['action' => 'delete', $peopleEntry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleEntry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Entries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Entry'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleEntries view large-9 medium-8 columns content">
    <h3><?= h($peopleEntry->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $peopleEntry->has('person') ? $this->Html->link($peopleEntry->person->id, ['controller' => 'People', 'action' => 'view', $peopleEntry->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Entry') ?></th>
            <td><?= $peopleEntry->has('entry') ? $this->Html->link($peopleEntry->entry->id, ['controller' => 'Entries', 'action' => 'view', $peopleEntry->entry->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Accion') ?></th>
            <td><?= h($peopleEntry->tipo_accion) ?></td>
        </tr>
        <tr>
            <th><?= __('Rechazo') ?></th>
            <td><?= h($peopleEntry->rechazo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleEntry->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Accion') ?></th>
            <td><?= h($peopleEntry->fecha_accion) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo Rechazo') ?></h4>
        <?= $this->Text->autoParagraph(h($peopleEntry->motivo_rechazo)); ?>
    </div>
</div>
