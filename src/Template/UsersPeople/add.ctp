<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Expedientes'), ['controller' => 'People']) ?></li>
    </ul>
</nav> -->



<div class="usersPeople form large-9 medium-8 columns content">
    
    <h3>Crear Asignación</h3>
    
    <legend><?= __('Información de la Usuaria') ?></legend>
    <div>
       <p>Nombre: <?php echo $personas['nombre']; ?></p>
       <p>Nacionalidad: <?php echo $personas['nacionalidad']; ?></p>
       <p>Fecha de Nacimiento: <?php echo $personas['fechanac']; ?></p>
       <p>Identificación: <?php echo $personas['identificacion']; ?></p>
    
    </div>
    
    <?= $this->Form->create($usersPerson) ?>
    <fieldset>
        <legend><?= __('Asignación') ?></legend>
        <?php
        
            //echo $this->Form->input('person_id', ['options' => $personas, 'label'=>'Persona']);
            
            echo $this->Form->input('user_id', ['options' => $usuarios, 'label'=>'Profesional']);
            echo $this->Form->input('observaciones');
            /*echo $this->Html->link(__('Historial'), ['action' => 'historial'],['class' => 'button']);
            echo "&nbsp";
            echo $this->Html->link(__('Editar Persona'), ['action' => 'tabular',$usersPerson->person_id],['class' => 'button']);*/
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')); ?>
    <?= $this->Form->end() ?>
</div>
