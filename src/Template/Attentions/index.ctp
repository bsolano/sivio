<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attention'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Histories'), ['controller' => 'Histories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New History'), ['controller' => 'Histories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attentions index large-9 medium-8 columns content">
    <h3><?= __('Attentions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('aggressor_id') ?></th>
                <th><?= $this->Paginator->sort('history_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attentions as $attention): ?>
            <tr>
                <td><?= $this->Number->format($attention->id) ?></td>
                <td><?= $this->Number->format($attention->aggressor_id) ?></td>
                <td><?= $attention->has('history') ? $this->Html->link($attention->history->id, ['controller' => 'Histories', 'action' => 'view', $attention->history->id]) : '' ?></td>
                <td><?= $attention->has('user') ? $this->Html->link($attention->user->id, ['controller' => 'Users', 'action' => 'view', $attention->user->id]) : '' ?></td>
                <td><?= h($attention->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attention->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attention->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attention->id)]) ?>
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
