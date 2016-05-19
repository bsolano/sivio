<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultations form large-9 medium-8 columns content">
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Add Consultation') ?></legend>
        <?php
            echo $this->Form->input('horario');
            $tipo = ["Delegación de la Mujer", "PLANOVI"];
            
            echo $this->Form->input('tipo',['label'=>'Tipo','type'=>'select','options'=>$tipo]);
            echo $this->Form->input('fecha', ['empty' => true]);
            echo $this->Form->input('hora_inicio', ['empty' => true]);
            echo $this->Form->input('hora_finalizacion', ['empty' => true]);
            echo $this->Form->input('fecha_finalizacion', ['empty' => true]);
            echo $this->Form->input('institucion_que_refiere');
            echo $this->Form->input('nombre_que_refiere');
            echo $this->Form->input('telefono_que_refiere');
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
            echo $this->Form->input('ultimo_incidente');
            echo $this->Form->input('valoracion_de_riesgo');
            echo $this->Form->input('familiares_en_riesgo');
            echo $this->Form->input('familiares_requieren_proteccion');
            echo $this->Form->input('vinculo_con_persona_agresora');
            echo $this->Form->input('tiempo_relacion_con_agresor');
            echo $this->Form->input('tiempo_agresion');
            echo $this->Form->input('medidas_proteccion');
            echo $this->Form->input('denuncia_penal');
            echo $this->Form->input('fecha_vencimiento', ['empty' => true]);
            echo $this->Form->input('recurso_apoyo_fuera_zona_riesgo');
            echo $this->Form->input('nombre_recurso');
            echo $this->Form->input('telefono_recurso');
            echo $this->Form->input('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
