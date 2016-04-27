<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Followups User'), ['action' => 'edit', $followupsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Followups User'), ['action' => 'delete', $followupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followupsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Followups Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Followups User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="followupsUsers view large-9 medium-8 columns content">
    <h3><?= h($followupsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Followup') ?></th>
            <td><?= $followupsUser->has('followup') ? $this->Html->link($followupsUser->followup->id, ['controller' => 'Followups', 'action' => 'view', $followupsUser->followup->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $followupsUser->has('user') ? $this->Html->link($followupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $followupsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($followupsUser->id) ?></td>
        </tr>
    </table>
</div>
