<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $person->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Histories'), ['controller' => 'Histories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New History'), ['controller' => 'Histories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transfers'), ['controller' => 'Transfers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transfer'), ['controller' => 'Transfers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aggressors'), ['controller' => 'Aggressors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aggressor'), ['controller' => 'Aggressors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List External References'), ['controller' => 'ExternalReferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New External Reference'), ['controller' => 'ExternalReferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followups'), ['controller' => 'Followups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Followup'), ['controller' => 'Followups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internal References'), ['controller' => 'InternalReferences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['controller' => 'InternalReferences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Interventions'), ['controller' => 'Interventions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intervention'), ['controller' => 'Interventions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellidos');
            echo $this->Form->input('fecha_de_nacimiento', ['empty' => true]);
            echo $this->Form->input('estado_civil');
            echo $this->Form->input('escolaridad');
            echo $this->Form->input('atencion_especializada');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('genero');
            echo $this->Form->input('ocupacion');
            echo $this->Form->input('lugar_trabajo');
            echo $this->Form->input('adicciones');
            echo $this->Form->input('condicion_migratoria');
            echo $this->Form->input('condicion_laboral');
            echo $this->Form->input('experiencia_laboral');
            echo $this->Form->input('condicion_aseguramiento');
            echo $this->Form->input('vivienda');
            echo $this->Form->input('num_hijos_ceaam');
            echo $this->Form->input('tipo_familia');
            echo $this->Form->input('embarazo');
            echo $this->Form->input('condicion_salud');
            echo $this->Form->input('identificacion');
            echo $this->Form->input('tipo_identificacion');
            echo $this->Form->input('transfer_id');
            echo $this->Form->input('aggressor_id');
            echo $this->Form->input('history_id', ['options' => $histories, 'empty' => true]);
            echo $this->Form->input('interventions._ids', ['options' => $interventions]);
            echo $this->Form->input('advocacies._ids', ['options' => $advocacies]);
            echo $this->Form->input('entries._ids', ['options' => $entries]);
            echo $this->Form->input('families._ids', ['options' => $families]);
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
