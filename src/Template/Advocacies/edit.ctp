<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $advocacy->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $advocacy->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="advocacies form large-9 medium-8 columns content">
    <?= $this->Form->create($advocacy) ?>
    <fieldset>
        <legend><?= __('Edit Advocacy') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('telefono');
            echo $this->Form->input('people._ids', ['options' => $people]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
