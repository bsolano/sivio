<!-- Se agrega large-centered para centrar el form. -->
<div class="consultations form large-centered large-9 medium-8 columns content">
    <h2>Consulta para <?php echo $person_id ?></h2>
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Nueva consulta') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('user_id', ['type' => 'hidden', 'options' => $users, 'empty' => true]);
            echo $this->Form->input('person_id', ['type' => 'hidden', 'value' => $person_id]);
            $situacionEnfrentada = [
                'Violencia Sexual' => 'Violencia Sexual',
                'Violencia Fisica' => 'Violencia Física',
                'Acoso Laboral' => 'Acoso Laboral',
                'Violencia Psicologica' => 'Violencia Psicológica',
                'Hostigamiento Sexual' => 'Hostigamiento Sexual',
                'Violencia Patrimonial' => 'Violencia Patrimonial',
                'Trata' => 'Trata',
                ];
                echo $this->Form->input('situacion_enfrentada', array(
                    'label' => 'Situación Enfrentada',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $situacionEnfrentada
                    )
                );   


        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar'),['class' => 'secondary button']) ?>
    <?= $this->Form->end() ?>
</div>
