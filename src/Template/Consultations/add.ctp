<!-- Se agrega large-centered para centrar el form. -->
<div class="consultations form large-centered large-9 medium-8 columns content">
    <h2>Consulta para <?php echo $person->nombre.' '.$person->apellidos ?></h2>
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Nueva consulta') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            $situacion_enfrentada = [
                'Violencia Sexual' => 'Violencia Sexual',
                'Violencia Fisica' => 'Violencia Física',
                'Acoso Laboral' => 'Acoso Laboral',
                'Violencia Psicologica' => 'Violencia Psicológica',
                'Hostigamiento Sexual' => 'Hostigamiento Sexual',
                'Violencia Patrimonial' => 'Violencia Patrimonial',
                'Trata' => 'Trata'
                ];
                echo $this->Form->input('situacion-enfrentada', array(
                    'label' => 'Situación Enfrentada',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $situacion_enfrentada
                    )
                );   
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),['class' => 'secondary button']) ?>
    <?= $this->Form->end() ?>
</div>
