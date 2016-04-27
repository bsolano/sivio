<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit People Advocacy'), ['action' => 'edit', $peopleAdvocacy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete People Advocacy'), ['action' => 'delete', $peopleAdvocacy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleAdvocacy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People Advocacies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New People Advocacy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peopleAdvocacies view large-9 medium-8 columns content">
    <h3><?= h($peopleAdvocacy->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $peopleAdvocacy->has('person') ? $this->Html->link($peopleAdvocacy->person->id, ['controller' => 'People', 'action' => 'view', $peopleAdvocacy->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Advocacy') ?></th>
            <td><?= $peopleAdvocacy->has('advocacy') ? $this->Html->link($peopleAdvocacy->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $peopleAdvocacy->advocacy->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($peopleAdvocacy->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peopleAdvocacy->id) ?></td>
        </tr>
    </table>
</div>
