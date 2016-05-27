<div class="externalReferences form large-5 medium-5 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
    
        <legend><?= __('Reporte de Estadísticas de Atenciones') ?></legend>
        <?php
           
            echo $this->Form->input('edad', ['type' => 'date','empty' => true, 'minYear' => 2010,'label' =>'Desde']);
            echo $this->Form->input('edad', ['type' => 'date','empty' => true, 'minYear' => 2010,'label' =>'Hasta']);
            echo $this->Form->input('nacionalidad',['empty' => true, 'label' => 'Nacionalidad' ]);
           
            echo $this->Form->input('ocupacion',['empty' => true, 'label' => 'Ocupación' ]);
            echo 'Estado Civil';
            $options = ['','soltera' => 'Soltera', 'casada' => 'Casada', 'union libre' => 'Unión libre','soltera' => 'Soltera','divorciada' => 'Divorciada','separada' => 'Separada'];
            echo $this->Form->select('estado_civil', $options, ['value' => 0]);

            echo 'Escolaridad';
            $options = ['','ningún grado' => 'Ningún grado','primaria completa' => 'Primaria Completa', 'primaria incompleta' => 'Primaria incompleta', 'secundaria completa' => 'Secundaria completa','secundaria incompleta' => 'Secundaria incompleta','parauniversitario/técnico' => 'Parauniversitario/técnico','universitaria completa' => 'Universitaria completa','universitaria incompleta' => 'Universitaria incompleta'];
            echo $this->Form->select('escolaridad', $options,['value' => 0]);
            
            echo 'Edad:'; 
        ?>
            
        <div class = "row">
            <div class = "large-6 medium-6 columns">
                <?php echo $this->Form->input('edadLower', ['empty' => true, 'label' => 'Entre']); ?>
            </div>
            
            <div class = "large-6 medium-6 columns">
                <?php echo $this->Form->input('edadUpper', ['empty' => true, 'label' => 'y']); ?>
            </div> 
        </div> <!--/ First row dates-->
                       
      
        
             
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="externalReferences large-7 medium-7 columns">

    <fieldset>
    <h3><?= __('Resultados') ?></h3>
    <table cellpadding="0" cellspacing="0">

        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id')       ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('Ocupación') ?></th>
                <th><?= $this->Paginator->sort('Estado Civil') ?></th>
                <th><?= $this->Paginator->sort('Escolaridad') ?></th>
                <th><?= $this->Paginator->sort('Edad') ?></th>
            </tr>
        </thead>
        <tbody>
           <?php 
          // print_r($result);
           
           foreach ($result as $results): ?>
            <tr>
             <td><?= h($results->id) ?></td>
             <td><?= h($results->nombre) ?></td>
             
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</fieldset>
</div>