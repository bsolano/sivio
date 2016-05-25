<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
-->

<!-- Se agrega large-centered para que el form se encuentre centrado. -->
<div class="people form large-centered large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Agregar nueva usuaria') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('apellidos');
            echo $this->Form->input('fecha_de_nacimiento', ['empty' => true, 'minYear' => 1940]);
            echo $this->Form->input('estado_civil', ['options' => ['Casada','Unión libre','Soltera','Divorciada','Separada','Viuda'], 'empty' => true]);
            echo $this->Form->input('escolaridad', ['options' => ['Primaria completa','Primaria incompleta','Secundaria completa','Secundaria incompleta','Para-universitario/Técnico','Universitaria completa','Universitaria incompleta','Ningún grado'], 'empty' => true]);
            echo $this->Form->input('atencion_especializada');
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('genero', ['options' => ['Masculino' => 'M','Femenino' => 'F'], 'empty' => true]);
            echo $this->Form->input('ocupacion');
            echo $this->Form->input('lugar_trabajo');
            echo $this->Form->input('adicciones', ['label' => 'Adicciones', 'type' => 'select', 'multiple' => 'checkbox', 'options' => ['Alcohol','Drogas','Medicamentos','Ninguna']]);
            echo $this->Form->input('condicion_migratoria', ['options' => ['Nacional','Regular','Residente','Refugiada','Irregular'], 'empty' => true]);
            echo $this->Form->input('condicion_laboral', ['options' => ['Remunerada','No remunerada','Desempleada'], 'empty' => true]);
            echo $this->Form->input('experiencia_laboral', ['options' => ['Sí', 'No'], 'empty' => true]);
            echo $this->Form->input('condicion_aseguramiento', ['options' => ['Directa','Familiar','Voluntario o Convenio','Pensionada por el Estado','No tiene '], 'empty' => true]);
            echo $this->Form->input('vivienda', ['options' => ['Alquilada','Precario','Prestada','Propia total','Propia con hipoteca','No tiene'], 'empty' => true]);
            echo $this->Form->input('tipo_familia', ['options' => ['Nuclear','Uniparental','Nuclear extendida'], 'empty' => true]);
            echo $this->Form->input('embarazo');
            echo $this->Form->input('condicion_salud', ['label' => 'Condición de salud', 'type' => 'select', 'multiple' => 'checkbox', 'options' => ['Discapacidad Física','Discapacidad Cognitiva','Discapacidad Sensorial','Discapacidad Mental','Padecimientos Crónicos','VIH-SIDA','ITS','Condición Psiquíatrica','Enfermedad Terminal'], 'empty' => true]);
            echo $this->Form->input('identificacion', ['label' => 'Identificación']);
            echo $this->Form->input('tipo_identificacion', ['label' => 'Tipo de identificación']);
            echo $this->Form->input('Family.num_familia', ['options' => $families, 'label' => 'Familia']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar', ['class' => 'secondary button'])) ?>
    <?= $this->Form->end() ?>
</div>
