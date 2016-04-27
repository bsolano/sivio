<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Person'), ['action' => 'edit', $usersPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Person'), ['action' => 'delete', $usersPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersPeople view large-9 medium-8 columns content">
    <h3><?= h($usersPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $usersPerson->has('user') ? $this->Html->link($usersPerson->user->id, ['controller' => 'Users', 'action' => 'view', $usersPerson->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $usersPerson->has('person') ? $this->Html->link($usersPerson->person->id, ['controller' => 'People', 'action' => 'view', $usersPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersPerson->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($usersPerson->observaciones)); ?>
    </div>
</div>
