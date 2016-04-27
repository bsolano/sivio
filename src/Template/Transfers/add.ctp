<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Transfers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transfers form large-9 medium-8 columns content">
    <?= $this->Form->create($transfer) ?>
    <fieldset>
        <legend><?= __('Add Transfer') ?></legend>
        <?php
            echo $this->Form->input('person_id');
            echo $this->Form->input('entidad_traslada');
            echo $this->Form->input('nombre');
            echo $this->Form->input('telefono');
            echo $this->Form->input('direccion');
            echo $this->Form->input('consentimiento');
            echo $this->Form->input('plan_emergencia');
            echo $this->Form->input('dependientes_directos');
            echo $this->Form->input('testigos');
            echo $this->Form->input('acta_observacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
