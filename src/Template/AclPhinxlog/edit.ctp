<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aclPhinxlog->version],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aclPhinxlog->version)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Acl Phinxlog'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aclPhinxlog form large-9 medium-8 columns content">
    <?= $this->Form->create($aclPhinxlog) ?>
    <fieldset>
        <legend><?= __('Edit Acl Phinxlog') ?></legend>
        <?php
            echo $this->Form->input('start_time');
            echo $this->Form->input('end_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
