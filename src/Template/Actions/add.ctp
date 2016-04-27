<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actions form large-9 medium-8 columns content">
    <?= $this->Form->create($action) ?>
    <fieldset>
        <legend><?= __('Add Action') ?></legend>
        <?php
            echo $this->Form->input('hallazgos');
            echo $this->Form->input('recomendaciones');
            echo $this->Form->input('tipo');
            echo $this->Form->input('fecha_', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
