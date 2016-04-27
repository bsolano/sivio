<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aggressors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aggressors form large-9 medium-8 columns content">
    <?= $this->Form->create($aggressor) ?>
    <fieldset>
        <legend><?= __('Add Aggressor') ?></legend>
        <?php
            echo $this->Form->input('person_id');
            echo $this->Form->input('vinculo');
            echo $this->Form->input('tiempo_relacion');
            echo $this->Form->input('tiempo_agresion');
            echo $this->Form->input('num_separaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
