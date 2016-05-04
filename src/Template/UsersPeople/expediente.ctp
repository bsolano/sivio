  <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Capítulos') ?></li>
            <li><a href="#perfil">Perfil de Usuaria </a></li>
            <li><a href="#historia">Historia de Violencia </a></li>
            <li><?= $this->Html->link(__('Ingresos y Egresos'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Hijas e Hijos'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Intervenciones'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Redes de Apoyo'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Seguimientos'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
        
    <div class="wrapper_expediente" style="overflow:scroll">
        <fieldset>
            <a name = "perfil"></a>
            <legend><?= __('Perfil de Usuaria') ?></legend>
            <?= $this->Form->create('People', array('url' => 'people/edit',)); ?>
            <?php
                echo $this->Form->input('nombre'); 
                echo $this->Form->input('fecha_nacimiento');
                echo $this->Form->input('apellidos');
                $estadocivil = array('casada'=>'casada',
                                     'unión libre'=>'unión libre',
                                     'soltera'=>'soltera',
                                     'divorciada'=>'divorciada',
                                     'viuda'=>'viuda',
                                     'separada'=>'separada',
                                    );
                echo $this->Form->input('estado_civil', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $estadocivil,
                  'required' => 'required',
                  'label' => 'Estado civil'
                ]);

                $escolaridad = array('primaria completa'=>'primaria completa',
                                     'primaria incompleta'=>'primaria incompleta',
                                     'secundaria completa'=>'secundaria completa',
                                     'secundaria incompleta'=>'secundaria incompleta',
                                     'para universitario/técnico'=>'para universitario/técnico',
                                     'universitaria completa'=>'universitaria completa',
                                     'universitaria incompleta'=>'universitaria incompleta',
                                     'ningún grado'=>'ningún grado'
                                    );
                echo $this->Form->input('escolaridad', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $escolaridad,
                  'required' => 'required',
                  'label' => 'Escolaridad'
                ]);

                echo $this->Form->input('atencion_especializada');
                echo $this->Form->input('nacionalidad');

                $genero = array('Masculino' => 'Masculino','Femenino'=>'Femenino');
                echo $this->Form->input('genero', array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                    'label' => 'Genero',
                    'type' => 'radio',
                    'required' => 'required',
                    'options' => $genero
                    )
                );
                
                echo $this->Form->input('ocupacion');
                echo $this->Form->input('lugar_trabajo');
                echo $this->Form->input('adicciones');
                
                $migratoria = array('nacional'=>'nacional','residente'=>'residente',
                                    'refugiada'=>'refugiada','regular'=>'regular',
                                    'irregular'=>'irregular'
                                    );
                echo $this->Form->input('condicion_migratoria',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condicion Migratoria',
                  'type' => 'radio',
                  'options' => $migratoria,
                  'required' => 'required'
                  )
                );

                $laboral = array('remunerada'=>'remunerada','no remunerada'=>'no remunerada',
                                'desempleada'=>'desempleada', 'pensionada'=>'pensionada'
                                );
                echo $this->Form->input('condicion_laboral',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condicion Laboral',
                  'type' => 'radio',
                  'options' => $laboral,
                  'required' => 'required'
                  )
                );

                echo $this->Form->input('experiencia_laboral',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Experiencia Laboral',
                  'type' => 'radio',
                  'options' => ['Sí'=>'Sí','No'=>'No'],
                  'required' => 'required'
                  )
                );

                echo $this->Form->input('condicion_aseguramiento');
                echo $this->Form->input('vivienda');
                echo $this->Form->input('num_hijos_ceaam');
                echo $this->Form->input('tipo_familia');
                echo $this->Form->input('embarazo');
                echo $this->Form->input('condicion_salud');
                echo $this->Form->input('identificacion');
                echo $this->Form->input('tipo_identificacion');
            ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <a name="historia"></a>
            <legend ><?= __('Historia de Violencia') ?></legend>
            <?= $this->Form->create('History', array('url' => 'histories/edit',)); ?>   
            <?php
                echo $this->Form->input('motivo_regreso');
                echo $this->Form->input('antecedente_legal');
                echo $this->Form->input('antecedente_psiquiatrico');
                echo $this->Form->input('atencion_por_agresion');
                echo $this->Form->input('centro_salud');
                
                $vfisica = 
                array(
                    'Le ha lanzado cualquier tipo de objetos' => 'Le ha lanzado cualquier tipo de objetos',
                    'La ha empujado o zarandeado'=>'La ha empujado o zarandeado',
                    'La ha tirado/halado el pelo' => 'La ha tirado/halado el pelo',
                    'Le ha dado golpe en la cara ' => 'Le ha dado golpe en la cara ',
                    'La patearon' => 'La patearon',
                    'Le ha causado fracturas ' => 'Le ha causado fracturas ',
                    'La tiraron al piso' => 'La tiraron al piso',
                    'Ha intentado ahorcarla o asfixiarla' => 'Ha intentado ahorcarla o asfixiarla',
                    'Le ha impedido el acceso a los alimentos ' => 'Le ha impedido el acceso a los alimentos ',
                    'La ha amenazado con un arma de fuego' => 'La ha amenazado con un arma de fuego',
                    'La ha amenazado con arma punzo cortante' => 'La ha amenazado con arma punzo cortante',
                    'La ha quemado en alguna parte del cuerpo' => 'La ha quemado en alguna parte del cuerpo',
                    'Ha utilizado contra usted algún objeto' => 'Ha utilizado contra usted algún objeto',
                    'Ha utilizado contra usted un arma de fuego' => 'Ha utilizado contra usted un arma de fuego',
                    'La ha amarrado para impedirle salir/hacer sus cosas' => 'La ha amarrado para impedirle salir/hacer sus cosas',
                    'Ha utilizado contra usted algún arma punzo cortante' => 'Ha utilizado contra usted algún arma punzo cortante',
                    'Le ha pegado con la mano en cualquier otra parte del cuerpo' => 'Le ha pegado con la mano en cualquier otra parte del cuerpo',
                    'La ha mordido y dejado marcas de dientes en el cuerpo' => 'La ha mordido y dejado marcas de dientes en el cuerpo',
                    'Le ha dado algo para envenenarla/intoxicarla' => 'Le ha dado algo para envenenarla/intoxicarla',
                    'Ha amenazado con un objeto, palo o garrote' => 'Ha amenazado con un objeto, palo o garrote'
                );
    
                echo $this->Form->input('violencia_fisica', array(
                    'label' => 'Violencia Física',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vfisica
                    )
                );
                
                echo $this->Form->input('violencia_psicologica');
                echo $this->Form->input('violencia_sexual');
                echo $this->Form->input('violencia_patrimonial');
                echo $this->Form->input('impacto_violencia');
                echo $this->Form->input('riesgo');
                echo $this->Form->input('programa_oapvd');
                echo $this->Form->input('proteccion');
                echo $this->Form->input('valoracion_riesgo');
                echo $this->Form->input('medida_proteccion');
                echo $this->Form->input('vencimiento_proteccion');
                echo $this->Form->input('situacion_enfrentada');
            ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
        </fieldset>
    </div>
