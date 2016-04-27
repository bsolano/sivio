<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peopleAdvocacy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peopleAdvocacy->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People Advocacies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleAdvocacies form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleAdvocacy) ?>
    <fieldset>
        <legend><?= __('Edit People Advocacy') ?></legend>
        <?php
            echo $this->Form->input('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
