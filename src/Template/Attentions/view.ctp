<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attention'), ['action' => 'edit', $attention->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attention'), ['action' => 'delete', $attention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attention->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attentions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attention'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Histories'), ['controller' => 'Histories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New History'), ['controller' => 'Histories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attentions view large-9 medium-8 columns content">
    <h3><?= h($attention->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('History') ?></th>
            <td><?= $attention->has('history') ? $this->Html->link($attention->history->id, ['controller' => 'Histories', 'action' => 'view', $attention->history->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $attention->has('user') ? $this->Html->link($attention->user->id, ['controller' => 'Users', 'action' => 'view', $attention->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($attention->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($attention->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Aggressor Id') ?></th>
            <td><?= $this->Number->format($attention->aggressor_id) ?></td>
        </tr>
    </table>
</div>
