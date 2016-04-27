<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Followups'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="followups form large-9 medium-8 columns content">
    <?= $this->Form->create($followup) ?>
    <fieldset>
        <legend><?= __('Add Followup') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => true]);
            echo $this->Form->input('user_id');
            echo $this->Form->input('medio_comunicacion');
            echo $this->Form->input('aspectos_sociales');
            echo $this->Form->input('apoyo_institucional');
            echo $this->Form->input('legales');
            echo $this->Form->input('seguridad');
            echo $this->Form->input('seguimiento_kit');
            echo $this->Form->input('seguimiento_referencia');
            echo $this->Form->input('lugar_atencion');
            echo $this->Form->input('enfrenta_violencia');
            echo $this->Form->input('convivencia');
            echo $this->Form->input('atencion_especializada');
            echo $this->Form->input('advocacy_id', ['options' => $advocacies, 'empty' => true]);
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
