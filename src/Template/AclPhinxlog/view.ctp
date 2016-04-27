<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Acl Phinxlog'), ['action' => 'edit', $aclPhinxlog->version]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Acl Phinxlog'), ['action' => 'delete', $aclPhinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $aclPhinxlog->version)]) ?> </li>
        <li><?= $this->Html->link(__('List Acl Phinxlog'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acl Phinxlog'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aclPhinxlog view large-9 medium-8 columns content">
    <h3><?= h($aclPhinxlog->version) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Version') ?></th>
            <td><?= $this->Number->format($aclPhinxlog->version) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Time') ?></th>
            <td><?= h($aclPhinxlog->start_time) ?></td>
        </tr>
        <tr>
            <th><?= __('End Time') ?></th>
            <td><?= h($aclPhinxlog->end_time) ?></td>
        </tr>
    </table>
</div>
