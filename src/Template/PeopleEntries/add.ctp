<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List People Entries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleEntries form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleEntry) ?>
    <fieldset>
        <legend><?= __('Add People Entry') ?></legend>
        <?php
            echo $this->Form->input('tipo_accion');
            echo $this->Form->input('fecha_accion', ['empty' => true]);
            echo $this->Form->input('rechazo');
            echo $this->Form->input('motivo_rechazo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
