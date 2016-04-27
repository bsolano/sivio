<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="records form large-9 medium-8 columns content">
    <?= $this->Form->create($record) ?>
    <fieldset>
        <legend><?= __('Add Record') ?></legend>
        <?php
            echo $this->Form->input('nombre_institucion');
            echo $this->Form->input('ubicacion');
            echo $this->Form->input('numero_expediente');
            echo $this->Form->input('transfers_id', ['options' => $transfers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
