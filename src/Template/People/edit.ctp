<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
    </ul>
</nav>
<div class="people form large-9 medium-5 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->input('nombre',array('readonly' => 'readonly'));
            echo $this->Form->input('apellidos',array('readonly' => 'readonly'));
            echo $this->Form->input('fecha_de_nacimiento', array('empty' => true,'readonly' => 'readonly'));
            echo $this->Form->input('identificacion', array('empty' => true,'readonly' => 'readonly'));
            echo $this->Form->input('tipo_identificacion');
            echo $this->Form->input('telefono');
            echo $this->Form->input('estado_civil');
            echo $this->Form->input('escolaridad');
            echo $this->Form->input('atencion_especializada');
            echo $this->Form->input('ocupacion');
            echo $this->Form->input('lugar_trabajo');
            echo $this->Form->input('condicion_migratoria');
            echo $this->Form->input('condicion_laboral');
            echo $this->Form->input('experiencia_laboral');
            echo $this->Form->input('condicion_aseguramiento');
            echo $this->Form->input('vivienda');
            echo $this->Form->input('num_hijos_ceaam');
            echo $this->Form->input('tipo_familia');
            echo $this->Form->input('embarazo');
            echo $this->Form->input('condicion_salud');
            
           
            
        ?>
    </fieldset>
    <?= $this->Form->button('Enviar', ['class'  => 'button secondary']) ?>
    <?= $this->Form->end() ?>
</div>
