<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre Institucion') ?></th>
            <td><?= h($record->nombre_institucion) ?></td>
        </tr>
        <tr>
            <th><?= __('Ubicacion') ?></th>
            <td><?= h($record->ubicacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Expediente') ?></th>
            <td><?= h($record->numero_expediente) ?></td>
        </tr>
        <tr>
            <th><?= __('Transfer') ?></th>
            <td><?= $record->has('transfer') ? $this->Html->link($record->transfer->id, ['controller' => 'Transfers', 'action' => 'view', $record->transfer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
    </table>
</div>
