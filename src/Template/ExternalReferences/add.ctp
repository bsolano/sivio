<div class="externalReferences form large-3 medium-5 columns content">
    <?= $this->Form->create($externalReference) ?>
   
    
        
         <legend><?= __('Persona') ?></legend>
        <?php
        $p= $persona->toArray();
        
     
      
        echo $this->Form->input('identificacion',array('value' => $p[0]['identificacion'], 'empty' => true,'label' => 'Identificación','readonly' => 'readonly'));
           echo $this->Form->input('persona', array('value' => $p[0]['nombre'].' '.$p[0]['apellidos'], 'empty' => true,'label' => 'Nombre','readonly' => 'readonly'));
             echo $this->Form->input('nacionalidad', array('value' => $p[0]['nacionalidad'], 'empty' => true,'label' => 'Nacionalidad' ,'readonly' => 'readonly'));
            echo $this->Form->input('edad', array('value' => $p[0]['edad'], 'empty' => true,'label' => 'Edad' ,'readonly' => 'readonly'));
            echo $this->Form->input('telefono', array('value' => $p[0]['numero_de_telefono'], 'em]pty' => true,'label' => 'Teléfono' ,'readonly' => 'readonly'));
            echo $this->Form->input('direccion', array('value' => $p[0]['provincia'].' '.$p[0]['canton'], 'empty' => true,'label' => 'Dirección' ,'readonly' => 'readonly'));
            ?>
             
     </div>       
      <div class="externalReferences form large-3 medium-5 columns content">    
      
            <legend><?= __('Institución') ?></legend>
          
            <?php
            echo $this->Form->input('receptor');
            echo  "<br>";
            $options = ['IMAS' => 'IMAS', 'FISCALIA' => 'FISCALÍA'];
            echo $this->Form->select('institucion', $options,['empty' => '(Institución)']);
            
            
            echo $this->Form->input('telefono_receptor',['empty' => true,'label' => 'Teléfono Receptor' ]);
            echo $this->Form->input('correo');
             ?>
             
    </div>
    
    <div class="externalReferences form large-6 medium-5 columns content">
            <legend><?= __('Motivo') ?></legend>
            <?php
            echo $this->Form->input('observacion',[ 'empty' => true,'label' => 'Observación' ]);
            
          
        ?>
        <div id="submit"><?= $this->Form->button(__('Enviar'), ['class' => 'secondary button']) ?></div>
    </div>    
    
    
    <?= $this->Form->end() ?>
