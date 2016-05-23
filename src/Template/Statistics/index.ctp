<div class="externalReferences form large-5 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
     
        
            <legend><?= __('Reporte de Estadísticas') ?></legend>
            <?php
           echo $this->Form->input('nacionalidad',['empty' => true,'label' => 'Nacionalidad' ]);
           echo $this->Form->input('ocupacion',['empty' => true,'label' => 'Ocupación' ]);
           echo 'Estado Civil';
            $options = ['soltera' => 'Soltera', 'casada' => 'Casada', 'union libre' => 'Unión libre','soltera' => 'Soltera','divorciada' => 'Divorciada','separada' => 'Separada'];
            echo $this->Form->select('estado_civil', $options,['value' => 0]);
            echo 'Escolaridad';
            $options = ['ningún grado' => 'Ningún grado','primaria completa' => 'Primaria Completa', 'primaria incompleta' => 'Primaria incompleta', 'secundaria completa' => 'Secundaria completa','secundaria incompleta' => 'Secundaria incompleta','parauniversitario/técnico' => 'Parauniversitario/técnico','universitaria completa' => 'Universitaria completa','universitaria incompleta' => 'Universitaria incompleta'];
            echo $this->Form->select('escolaridad', $options,['value' => 0]);
            
            echo 'Edad';
            $options = ['0' => '', '10' => '0-10', '20' => '11-20', '30' => '21-30'];
            echo $this->Form->select('edad', $options,['value' => 0 ,'label' => 'Edad']);
            
            
             ?>
             
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>