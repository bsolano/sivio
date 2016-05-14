<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultations form large-9 medium-8 columns content">
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Add Consultation') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('person_id', ['options' => $people]);
            $situacionEnfrentada = [
                            'Violencia Sexual' => 'Violencia Sexual',
                            'Violencia Fisica' => 'Violencia Física',
                            'Acoso Laboral' => 'Acoso Laboral',
                            'Violencia Psicologica' => 'Violencia Psicológica',
                            'Hostigamiento Sexual' => 'Hostigamiento Sexual',
                            'Violencia Patrimonial' => 'Violencia Patrimonial',
                            'Trata' => 'Trata'
                            ];
                            echo $this->Form->input('situacion_enfrentada', array(
                                'label' => 'Situación Enfrentada',
                                'type' => 'select',
                                'multiple' => 'checkbox',
                                'options' => $situacionEnfrentada
                                )
                            );   

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
