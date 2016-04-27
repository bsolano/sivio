<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acl Phinxlog'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aclPhinxlog index large-9 medium-8 columns content">
    <h3><?= __('Acl Phinxlog') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('version') ?></th>
                <th><?= $this->Paginator->sort('start_time') ?></th>
                <th><?= $this->Paginator->sort('end_time') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aclPhinxlog as $aclPhinxlog): ?>
            <tr>
                <td><?= $this->Number->format($aclPhinxlog->version) ?></td>
                <td><?= h($aclPhinxlog->start_time) ?></td>
                <td><?= h($aclPhinxlog->end_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aclPhinxlog->version]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aclPhinxlog->version]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aclPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $aclPhinxlog->version)]) ?>
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
