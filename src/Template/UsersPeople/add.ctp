<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Expedientes'), ['controller' => 'People']) ?></li>
    </ul>
</nav>
<div class="usersPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($usersPerson) ?>
    <fieldset>
        <legend><?= __('Atención') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $nombres->toArray(), 'label'=>'Persona']);
            echo $this->Form->input('observaciones');
            //echo $this->Form->button('Historial',['onclick'=> '(window.open()).document.write(\'Satanas vive\')','type'=>'button']);
            //echo $this->Form->button('Historial',['onclick'=> '(window.open()).document.write(
            //    \'Satanas vive muchisimo\'
            //)','type'=>'button']);
            //echo $this->Form->button('Historial',['action' => 'historial','type'=>'button']);
            echo $this->Html->link(__('Historial'), ['action' => 'historial'],['class' => 'button']);
            echo "&nbsp";
            echo $this->Html->link(__('Editar Persona'), ['action' => 'expediente',$usersPerson->person_id],['class' => 'button']);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')); ?>
    <?= $this->Form->end() ?>
</div>
