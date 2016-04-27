<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Followups User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="followupsUsers index large-9 medium-8 columns content">
    <h3><?= __('Followups Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('followup_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($followupsUsers as $followupsUser): ?>
            <tr>
                <td><?= $followupsUser->has('followup') ? $this->Html->link($followupsUser->followup->id, ['controller' => 'Followups', 'action' => 'view', $followupsUser->followup->id]) : '' ?></td>
                <td><?= $followupsUser->has('user') ? $this->Html->link($followupsUser->user->id, ['controller' => 'Users', 'action' => 'view', $followupsUser->user->id]) : '' ?></td>
                <td><?= $this->Number->format($followupsUser->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $followupsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $followupsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $followupsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followupsUser->id)]) ?>
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
