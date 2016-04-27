<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Action'), ['action' => 'edit', $action->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Action'), ['action' => 'delete', $action->id], ['confirm' => __('Are you sure you want to delete # {0}?', $action->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actions view large-9 medium-8 columns content">
    <h3><?= h($action->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($action->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Transfer') ?></th>
            <td><?= $action->has('transfer') ? $this->Html->link($action->transfer->id, ['controller' => 'Transfers', 'action' => 'view', $action->transfer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($action->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha ') ?></th>
            <td><?= h($action->fecha_) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Hallazgos') ?></h4>
        <?= $this->Text->autoParagraph(h($action->hallazgos)); ?>
    </div>
    <div class="row">
        <h4><?= __('Recomendaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($action->recomendaciones)); ?>
    </div>
</div>
