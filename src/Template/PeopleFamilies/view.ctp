<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Family'), ['action' => 'edit', $peopleFamily->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Family'), ['action' => 'delete', $peopleFamily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleFamily->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleFamilies view large-9 medium-8 columns content">
    <h3><?= h($peopleFamily->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $peopleFamily->has('person') ? $this->Html->link($peopleFamily->person->id, ['controller' => 'People', 'action' => 'view', $peopleFamily->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Family') ?></th>
            <td><?= $peopleFamily->has('family') ? $this->Html->link($peopleFamily->family->id, ['controller' => 'Families', 'action' => 'view', $peopleFamily->family->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Parentesco') ?></th>
            <td><?= h($peopleFamily->parentesco) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleFamily->id) ?></td>
        </tr>
    </table>
</div>
