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
     
        
         <legend><?= __('Persona') ?></legend>
        <?php
        echo $this->Form->input('person_id', ['options' => $people, 'empty' => true,'label' => 'Identificación' ]);
           echo $this->Form->input('persona',['label' => 'Nombre' ]);
            echo $this->Form->input('nacionalidad');
            echo $this->Form->input('edad');
            echo $this->Form->input('telefono',['empty' => true,'label' => 'Teléfono']);
            
            echo $this->Form->input('direccion',[ 'empty' => true,'label' => 'Dirección' ]);
            
            
            ?>
            <legend><?= __('Institución') ?></legend>
            <?php
            echo $this->Form->input('receptor');
            echo $this->Form->select('institucion',['IMAS', 'Fiscalía', 3, 4, 5],['empty' => '(Institución)']);
            echo $this->Form->input('telefono_receptor',['empty' => true,'label' => 'Teléfono Receptor' ]);
            echo $this->Form->input('correo');
             ?>
            <legend><?= __('Motivo') ?></legend>
            <?php
            echo $this->Form->input('observacion',[ 'empty' => true,'label' => 'Observación' ]);
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
