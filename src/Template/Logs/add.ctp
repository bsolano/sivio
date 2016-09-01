<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Add Log') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
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
            echo $this->Form->input('tipo_familia');
            echo $this->Form->input('embarazo');
            echo $this->Form->input('condicion_salud');
            echo $this->Form->input('identificacion');
            echo $this->Form->input('tipo_identificacion');
            echo $this->Form->input('telefono');
            echo $this->Form->input('edad');
            echo $this->Form->input('num_de_hijos');
            echo $this->Form->input('provincia');
            echo $this->Form->input('canton');
            echo $this->Form->input('direccion');
            echo $this->Form->input('hijos_mayor_doce');
            echo $this->Form->input('num_hijos_ceaam');
            echo $this->Form->input('num_familia');
            echo $this->Form->input('rol_familia');
            echo $this->Form->input('acepta_seguimiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
