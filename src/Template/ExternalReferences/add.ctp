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
        $p= $persona->toArray();
        
     
      
        echo $this->Form->input('identificacion', ['value' => $p[0]['identificacion'], 'empty' => true,'label' => 'Identificación' ]);
           echo $this->Form->input('persona', ['value' => $p[0]['nombre'].' '.$p[0]['apellidos'], 'empty' => true,'label' => 'Nombre' ]);
             echo $this->Form->input('nacionalidad', ['value' => $p[0]['nacionalidad'], 'empty' => true,'label' => 'Nacionalidad' ]);
            echo $this->Form->input('edad', ['value' => $p[0]['edad'], 'empty' => true,'label' => 'Edad' ]);
            echo $this->Form->input('telefono', ['value' => $p[0]['numero_de_telefono'], 'empty' => true,'label' => 'Teléfono' ]);
            echo $this->Form->input('direccion', ['value' => $p[0]['provincia'].' '.$p[0]['canton'], 'empty' => true,'label' => 'Dirección' ]);
            
            
            ?>
            <legend><?= __('Institución') ?></legend>
            <?php
            echo $this->Form->input('receptor');
            $options = ['IMAS' => 'IMAS', 'FISCALIA' => 'FISCALÍA'];
            echo $this->Form->select('institucion', $options,['empty' => '(Institución)']);
            
            
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