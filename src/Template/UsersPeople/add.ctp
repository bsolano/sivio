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
            echo $this->Form->button('Expediente',['onclick'=> '(window.open()).document.write(\'Historial\')','type'=>'button']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')); ?>
    <?= $this->Form->end() ?>
</div>
