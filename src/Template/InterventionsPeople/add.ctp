<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Interventions People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Interventions'), ['controller' => 'Interventions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intervention'), ['controller' => 'Interventions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="interventionsPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($interventionsPerson) ?>
    <fieldset>
        <legend><?= __('Add Interventions Person') ?></legend>
        <?php
            echo $this->Form->input('tipo_intervencion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
