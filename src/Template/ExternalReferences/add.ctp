<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List External References'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="externalReferences form large-9 medium-8 columns content">
    <?= $this->Form->create($externalReference) ?>
    <fieldset>
        <legend><?= __('Add External Reference') ?></legend>
        
         <legend><?= __('Persona') ?></legend>
        <?php
            
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('edad');
            echo $this->Form->input('telefono');
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => true,'label' => 'Identificación' ]);
            echo $this->Form->input('direccion');
            
            
            ?>
            <legend><?= __('Institución') ?></legend>
            <?php
            echo $this->Form->input('receptor');
            echo $this->Form->input('institucion', array('type' => 'text', 'selected' => '13:30:00'));
             ?>
            <legend><?= __('Motivo') ?></legend>
            <?php
            echo $this->Form->input('observacion');
            echo $this->Form->input('persona');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
