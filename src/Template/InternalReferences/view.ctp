<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internal Reference'), ['action' => 'edit', $internalReference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internal Reference'), ['action' => 'delete', $internalReference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalReference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internal References'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internalReferences view large-9 medium-8 columns content">
    <h3><?= h($internalReference->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->id, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($internalReference->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Oficina') ?></th>
            <td><?= h($internalReference->oficina) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($internalReference->id) ?></td>
        </tr>
    </table>
</div>
