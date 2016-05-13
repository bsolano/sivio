<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
        <!--<link type="text/css" rel="stylesheet" href="/webroot/css/style.css" /> -->
        <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script> 
    </head>
<body>
    <?= $this->Form->create('People', array('url' => 'people/edit',)); ?>
    <div class="usersPeople form large-9 medium-8 columns content" style="width: 100%;">
        <section class="wrapper">
    <ul class="tabs">
    <li><a href="#tab1">Ingresos y Egresos</a></li>
    <li><a href="#tab2">Perfil de Usuaria</a></li>
    <li><a href="#tab3">Redes de Apoyo</a></li>
    <li><a href="#tab4">Historia de Violencia</a></li>
    <li><a href="#tab5">Hijos</a></li>
    <li><a href="#tab6">Intervenciones</a></li>
    <li><a href="#tab7">Seguimientos</a></li>
    
    
  </ul>
  <section class="block">
    <article id="tab2">
        <fieldset>
            <div class="large-4 small-4 columns">
            <?php
                echo $this->Form->input('nombre'); 
                echo $this->Form->input('apellidos');
                echo $this->Form->input('identificacion',['label'=>'Identificación']);
                echo $this->Form->input('tipo_identificacion',['label'=>'Tipo de identificación']);
                echo $this->Form->input('nacionalidad');            
                echo $this->Form->input('ocupacion',['label'=>'Ocupación']);
                echo $this->Form->input('lugar_trabajo',['label'=>'Lugar de trabajo']);
                echo $this->Form->input('fecha_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento']);
                
                
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

            ?>
        </div>
        <div class="large-4 small-4 columns">
            <?php
                $genero = array('Masculino' => 'Masculino','Femenino'=>'Femenino');
                echo $this->Form->input('genero', array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                    'label' => 'Género',
                    'type' => 'radio',
                    'required' => 'required',
                    'options' => $genero
                    )
                );

                $adicciones = [
                'Alcohol' => 'Alcohol',
                'Drogas' => 'Drogas',
                'Medicamentos' => 'Medicamentos',
                'Ninguna' => 'Ninguna'
                ];
                echo $this->Form->input('adicciones', array(
                    'label' => 'Adicciones',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $adicciones
                    )
                );
                $migratoria = array('nacional'=>'nacional','residente'=>'residente',
                                    'refugiada'=>'refugiada','regular'=>'regular',
                                    'irregular'=>'irregular'
                                    );
                echo $this->Form->input('condicion_migratoria',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condición Migratoria',
                  'type' => 'radio',
                  'options' => $migratoria,
                  'required' => 'required'
                  )
                );

                $laboral = array('remunerada'=>'remunerada','no reumnerada'=>'no remunerada',
                                'desempleada'=>'desempleada', 'pensionada'=>'pensionada'
                                );
                echo $this->Form->input('condicion_laboral',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condición Laboral',
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
                $aseguramiento = [
                'directa' => 'directa',
                'familiar' => 'familiar',
                'voluntario o convenio' => 'voluntario o convenio',
                'pensionada' => 'pensionada',
                'por el estado' => 'por el estado',
                'ninguna' => 'ninguna'
                ];
                echo $this->Form->input('condicion_aseguramiento', array(
                    'label' => 'Condición de Aseguramiento',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $aseguramiento
                    )
                );                
                
            ?>
        </div>
        <div class="large-4 small-4 columns">
            <?php
                $vivienda = array('alquilada'=>'alquilada','precario'=>'precario',
                                    'propia total'=>'propia total','prestada'=>'prestada',
                                    'propia con hipoteca'=>'propia con hipoteca','no tiene'=>'no tiene'
                                    );
                echo $this->Form->input('vivienda',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Tipo de Vivienda',
                  'type' => 'radio',
                  'options' => $vivienda,
                  'required' => 'required'
                  )
                );
                
                echo $this->Form->input('num_hijos_ceaam',['label'=>'Número de hijos con los que ingresa al CEAAM',
                'type'=>'number'
                ]);
                
                $familia =   array('nuclear'=>'nuclear',
                                    'uniparental'=>'uniparental',
                                    'nuclear extendida'=>'nuclear extendida'
                );
                
                echo $this->Form->input('tipo_familia',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Tipo de Familia',
                  'type' => 'radio',
                  'options' => $familia,
                  'required' => 'required'
                  )
                );               
                
                $salud = [
                'Discapacidad Física' => 'Discapacidad Física',
                'Discapacidad Cognitiva' => 'Discapacidad Cognitiva',
                'Discapacidad Sensorial' => 'Discapacidad Sensorial',
                'Discapacidad Mental' => 'Discapacidad Mental',
                'Padecimientos Crónicos' => 'Padecimientos Crónicos',
                'VIH-SIDA' => 'VIH-SIDA',
                'ITS' => 'ITS',
                'Condición Psiquíatrica' => 'Condición Psiquíatrica',
                'Enfermedad Terminal' => 'Enfermedad Terminal'
                ];
                echo $this->Form->input('condicion_salud', array(
                    'label' => 'Condición de Salud',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $salud
                    )
                );    
                
                $embarazo = [
                    'No' => 'No',
                    '1 mes' => '1 mes',
                    '2 meses' => '2 meses',
                    '3 meses' => '3 meses',
                    '4 meses' => '4 meses',
                    '5 meses' => '5 meses',
                    '6 meses' => '6 meses',
                    '7 meses' => '7 meses',
                    '8 meses' => '8 meses',
                    '9 meses' => '9 meses'
                ];
                
                echo $this->Form->input('embarazo',['label'=>'Embarazo','type'=>'select','options'=>$embarazo]);
            
            ?>

            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>

            </div>
        </fieldset>
    </article>
    <article id="tab4">
        <fieldset>
            <div class="large-6 medium-6 columns">
            <h4><?= __('Perfil del agresor') ?></h4>
            <?= $this->Form->create('Person', array('url' => 'people/edit',)); ?> 

                <?php
                    echo $this->Form->input('nombre'); 
                    echo $this->Form->input('apellidos');                    
                    echo $this->Form->input('nacionalidad');            
                    echo $this->Form->input('ocupacion',['label'=>'Ocupación']);
                    echo $this->Form->input('lugar_trabajo',['label'=>'Lugar de trabajo']);
                    echo $this->Form->input('fecha_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento']);
        
                    $genero = array('Masculino' => 'Masculino','Femenino'=>'Femenino');
                    echo $this->Form->input('genero', array(
                      'templates' => [
                            'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                      ],
                        'label' => 'Género',
                        'type' => 'radio',
                        'required' => 'required',
                        'options' => $genero
                        )
                    );
                    
                    $adicciones = [
                        'Alcohol' => 'Alcohol',
                        'Drogas' => 'Drogas',
                        'Medicamentos' => 'Medicamentos',
                        'Ninguna' => 'Ninguna'
                        ];
                    echo $this->Form->input('adicciones', array(
                        'label' => 'Adicciones',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $adicciones
                        )
                    );                 
                ?>
                <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        
            <?= $this->Form->create('Aggressor', array('url' => 'aggressors/edit',)); ?> 
                <?php
                    echo $this->Form->input('vinculo',['label'=>'Vínculo con el agresor']);
                    echo $this->Form->input('tiempo_relacion',['label'=>'Tiempo de la relación']);
                    echo $this->Form->input('tiempo_agresion',['label'=>'Tiempo de la agresión']);
                    $sep = array(
                        '1' => '1',
                        '2-4' =>'2-4',
                        '5-7' => '5-7',
                        'más de 7' => 'más de 7'
                    );
                    echo $this->Form->input('num_separaciones',array(
                      'templates' => [
                            'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                      ],
                      'label'=>'Número de separaciones de la persona agresora',
                      'type' => 'radio',
                      'options' => $sep,
                      'required' => 'required'
                      )
                    );             
                ?>
                <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            
            <h4><?= __('Historia de violencia')  ?></h4>
            <?= $this->Form->create('History', array('url' => 'histories/edit',)); ?>   

            <?php
                
                echo $this->Form->input('situacion_enfrentada');

                $motivos = array(
                    'Amenazas' => 'Amenazas',
                    'Dependencia económica' => 'Dependencia económica',
                    'Factores emocionales' => 'Factores emocionales',
                    'Mandato religioso' => 'Mandato religioso',
                    'Promesas de cambio' => 'Promesas de cambio',
                    'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo' => 'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo'
                );
                echo $this->Form->input('motivo_regreso', array(
                    'label' => 'Motivos para regresar',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $motivos
                    )
                );                
                                
                echo $this->Form->input('antecedente_legal');
                
                $apsiq = array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                    'No indica' => 'No indica'
                );
                echo $this->Form->input('antecedente_psiquiatrico',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Antecedentes Psiquiátricos',
                  'type' => 'radio',
                  'options' => $apsiq,
                  'required' => 'required'
                  )
                );             
                
                $atencionMedica = array(
                    'No' => 'No',
                    'Aborto' => 'Aborto',
                    'Cirugía' => 'Cirugía',
                    'Rayos X' => 'Rayos X',
                    'Ultrasonido' => 'Ultrasonido',
                    'Valoración Médica' => 'Valoración Médica',
                    'Curaciones' => 'Curaciones',
                    'Psiquiatría/Psicología' => 'Psiquiatría/Psicología'
                );
                echo $this->Form->input('atencion_por_agresion', array(
                    'label' => 'Atención médica producto de agresión',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $atencionMedica
                    )
                );                
                
                echo $this->Form->input('centro_salud',['label'=>'Nombre del centro de salud']);
                
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
                    'label' => 'Violencia física',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vfisica
                    )
                );
                            ?>
        </div>
        <div class="large-6 medium-6 columns">
            <?php
                
                
                $vpsic = array(
                    'Se ha referido a usted con palabras groseras o agresivas' => 'Se ha referido a usted con palabras groseras o agresivas',
                    'La ha humillado' => 'La ha humillado',
                    'No le presta la debida atención' => 'No le presta la debida atención',
                    'La ha seguido, vigilado' => 'La ha seguido, vigilado',
                    'Ha registrado sus objetos personales' => 'Ha registrado sus objetos personales',
                    'La ha amenazado de muerte' => 'La ha amenazado de muerte',
                    'La ha criticado sobre lo que hace o deja de hacer' => 'La ha criticado sobre lo que hace o deja de hacer',
                    'Le ha impedido que planifique y controle los embarazos' => 'Le ha impedido que planifique y controle los embarazos',
                    'La ha culpado de las cosas que no salen bien' => 'La ha culpado de las cosas que no salen bien',
                    'La ha acusado de serle infiel' => 'La ha acusado de serle infiel',
                    'La ha dejado encerrada ' => 'La ha dejado encerrada ',
                    'La ha ignorado y no la toma en cuenta en las decisiones' => 'La ha ignorado y no la toma en cuenta en las decisiones',
                    'Le ha impedido realizar actividades fuera de la casa' => 'Le ha impedido realizar actividades fuera de la casa',
                    'Le ha impedido ir al médico o no se preocupa por su salud' => 'Le ha impedido ir al médico o no se preocupa por su salud',
                    'La ha amenazado con quitarle los hijos y/o no verlos' => 'La ha amenazado con quitarle los hijos y/o no verlos',
                    'Se ha burlado de usted en distintos aspectos' => 'Se ha burlado de usted en distintos aspectos',
                    'La ha amenazado para que no tramite pensión' => 'La ha amenazado para que no tramite pensión'
                    
                );
                echo $this->Form->input('violencia_psicologica', array(
                    'label' => 'Violencia psicológica',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vpsic
                    )
                );                 
                
                $vsex = array(
                    'Se ha burlado/criticado de su comportamiento sexual ' => 'Se ha burlado/criticado de su comportamiento sexual ',
                    'No toma en consideración sus necesidades y sentimientos sexuales' => 'No toma en consideración sus necesidades y sentimientos sexuales',
                    'La ha asediado sexualmente en momentos inoportunos' => 'La ha asediado sexualmente en momentos inoportunos',
                    'La ha insultado diciéndole “puta, “frígida” u otras palabras ofensivas' => 'La ha insultado diciéndole “puta, “frígida” u otras palabras ofensivas',
                    'Ha intentado besarla/la ha besado a la fuerza' => 'Ha intentado besarla/la ha besado a la fuerza',
                    'Le ha hecho comentarios obscenos o morbosos' => 'Le ha hecho comentarios obscenos o morbosos',
                    'Ha intentado/le ha introducido objetos por el ano' => 'Ha intentado/le ha introducido objetos por el ano',
                    'Ha intentado/le ha introducido objetos por vagina' => 'Ha intentado/le ha introducido objetos por vagina',
                    'Ha intentado/ha tenido sexo oral sin su permiso' => 'Ha intentado/ha tenido sexo oral sin su permiso',
                    'Ha intentado/le ha quitado su ropa sin que usted lo quiera' => 'Ha intentado/le ha quitado su ropa sin que usted lo quiera',
                    'Le ha mostrado material pornográfico sin que usted lo quiera' => 'Le ha mostrado material pornográfico sin que usted lo quiera',
                    'La ha tocado  partes de su cuerpo sin que usted quiera' => 'La ha tocado  partes de su cuerpo sin que usted quiera',
                    'La ha obligado a que sostenga relaciones sexuales con animales' => 'La ha obligado a que sostenga relaciones sexuales con animales',
                    'La ha obligado a tener sexo con otras personas para observar' => 'La ha obligado a tener sexo con otras personas para observar',
                    'La ha hecho/mencionado propuestas sexuales que sean incómodas' => 'La ha hecho/mencionado propuestas sexuales que sean incómodas',
                    'La ha obligado a que observe a otras personas teniendo sexo' => 'La ha obligado a que observe a otras personas teniendo sexo',
                    'La ha chantajeado para que tenga relaciones sexuales con él' => 'La ha chantajeado para que tenga relaciones sexuales con él',
                    'La ha agredido si se niega a tener sexo con él' => 'La ha agredido si se niega a tener sexo con él',
                    'La ha obligado a tener sexo con otras personas por dinero' => 'La ha obligado a tener sexo con otras personas por dinero',
                    'La ha obligado tener relaciones sexuales con él' => 'La ha obligado tener relaciones sexuales con él'
                );
                echo $this->Form->input('violencia_sexual', array(
                    'label' => 'Violencia sexual',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vsex
                    )
                );                  
                $vpat = array(
                    'La ha amenazado con quitarle los bienes' => 'La ha amenazado con quitarle los bienes',
                    'Se ha apropiado de sus bienes a través de engaños, amenazas o chantaje afectivo' => 'Se ha apropiado de sus bienes a través de engaños, amenazas o chantaje afectivo',
                    'La ha obligado a entregar su salario o ingresos' => 'La ha obligado a entregar su salario o ingresos',
                    'Sus bienes aparecen a nombre de persona agresora' => 'Sus bienes aparecen a nombre de persona agresora',
                    'La ha obligado a adquirir deudas para beneficio económico de él/ella ' => 'La ha obligado a adquirir deudas para beneficio económico de él/ella ',
                    'Sus bienes son manejados por personas que no le dejan utilizarlo' => 'Sus bienes son manejados por personas que no le dejan utilizarlo',
                    'Le ha destruido objetos de valor para usted (afectivos-históricos)' => 'Le ha destruido objetos de valor para usted (afectivos-históricos)',
                    'Le quita o restringe el dinero para satisfacer sus necesidades' => 'Le quita o restringe el dinero para satisfacer sus necesidades',
                    'La ha amenazado para que no interponga la pensión alimentaria ' => 'La ha amenazado para que no interponga la pensión alimentaria ',
                    'Incumple con el pago de la pensión alimentaria' => 'Incumple con el pago de la pensión alimentaria',
                    'La amenaza con no comprar alimentos o necesidades básicas' => 'La amenaza con no comprar alimentos o necesidades básicas'
                );
                echo $this->Form->input('violencia_patrimonial', array(
                    'label' => 'Violencia patrimonial',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vpat
                    )
                );                
                
                $impacto = array(
                    'Ansiedad' => 'Ansiedad',
                    'Deterioro aspecto personal' => 'Deterioro aspecto personal',
                    'Desorden del sueño' => 'Desorden del sueño',
                    'Dificultad para reconocer capacidades' => 'Dificultad para reconocer capacidades',
                    'Desorden alimenticio' => 'Desorden alimenticio',
                    'Irritabilidad' => 'Irritabilidad',
                    'Llanto' => 'Llanto',
                    'Dificultad para adherirse al proceso de intervención' => 'Dificultad para adherirse al proceso de intervención',
                    'No reconoce la violencia' => 'No reconoce la violencia',
                    'Tristeza' => 'Tristeza',
                    'Temores generalizados' => 'Temores generalizados'
                );
                echo $this->Form->input('impacto_violencia', array(
                    'label' => 'Impacto de la violencia',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $impacto
                    )
                );                             
                //echo $this->Form->input('riesgo'); eliminar campo de la DB
                //echo $this->Form->input('proteccion'); eliminar campo de la DB
                
                $riesgo = array(
                    'Precaución' => 'Precaución',
                    'Alto riesgo' => 'Alto riesgo',
                    'Riesgo severo' => 'Riesgo severo'
                );
                echo $this->Form->input('valoracion_riesgo',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Valoración de riesgo',
                  'type' => 'radio',
                  'options' => $riesgo,
                  'required' => 'required'
                  )
                );                 
                
                $medidasProteccion = array(
                    'No tiene' => 'No tiene',
                    'Medidas a favor' => 'Medidas a favor',
                    'Medidas en contra' => 'Medidas en contra',
                    'Proceso de familia' => 'Proceso de familia',
                    'Pensión alimentaria' => 'Pensión alimentaria',
                    'Proceso penal' => 'Proceso penal',
                    'Ley de penalización' => 'Ley de penalización',
                    'Delito sexual' => 'Delito sexual',
                    'Desobediencia' => 'Desobediencia',
                    'Trámites migratorios' => 'Trámites migratorios',
                    'Proceso PANI' => 'Proceso PANI'
                );
                echo $this->Form->input('medida_proteccion', array(
                    'label' => 'Medidas de protección',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $medidasProteccion
                    )
                ); 
                
                echo $this->Form->input('vencimiento_proteccion',['type'=>'date','label'=>'Fecha de vencimiento de la protección']);

                $oapvd = array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                );
                echo $this->Form->input('programa_oapvd',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Se encuentra en el programa OAPVD',
                  'type' => 'radio',
                  'options' => $oapvd,
                  'required' => 'required'
                  )
                );      
                
            ?>
        </div>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
        </fieldset>
      
    </article>
    
    
    <article id="tab3">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    
    
    <article id="tab4">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    
    
    <article id="tab5">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    <!-------------------------------------------------------------------------*/
    /*                    TAB de Intervencines                                 */
    /*-------------------------------------------------------------------------->
    <article id="tab6">
        <fieldset>

            <div class="large-6 medium-6 columns">
            <?= $this->Form->create('Intervention', array('url' => 'Interventions/edit',)); ?>   
            <?php
                
                
                /*   VARIABLES   */

                $legal = array(
                    'Individual',
                    'Grupal',
                    'Talleres',
                    'Coordinaciones',
                    'Representación legal', 
                    'Informes', 
                    'Acompañamiento Profesional', 
                    'Consultorio Jurídico', 
                    'Referencias', 
                    'Escritos'
                );
                
                $psicoadultas = array(
                    'Individual',
                    'Plan de Seguridad',
                    'Grupal',
                    'Talleres',
                    'Coordinaciones',
                    'Informes',
                    'Criterio Especializado',
                    'Acompañamiento Profesional', 
                    'Referencias', 
                );
                
                $psiconinos = array(
                    'Individual (Menor)',
                    'Grupal (Menor)',
                    'Individual (Madre)',
                    'Grupal (Madre)',
                    'Coordinaciones',
                    'Acompañamiento Profesional', 
                    'Talleres (Menor)',
                    'Talleres (Madre)',
                    'Informes',
                    'Referencias'
                );
                
                $trabSocial = array(
                    'Individual',
                    'Grupal',
                    'Talleres',
                    'Coordinaciones',
                    'Informes',
                    'Acompañamiento Profesional', 
                    'Referencias', 
                );
                
                $interdis = array(
                    'Resolución de conflictos',
                    'Egreso Tecnico',
                    'Valoración del proceso',
                    'Atención de quejas'
                );
                /*   *********   */
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion legal
                 */
                echo "<legend></legend><br>";
                echo $this->Form->input('deseaAtencionl', ['type'=>'checkbox','id'=>'deseaAtencionl', 'label'=>'¿Desea recibir atención legal?','checked'=>false]);echo "<br>";
                ?>  <div class="row" id= "atencionl">  <?php
                /* checkbox para atencion legal  */
                
                echo $this->Form->input('Legal', array(
                    'label' => 'Legal',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $legal,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion psicologica
                 */
                /* checkbox para atencion psicologica  */
                echo "<legend></legend><br>";
                echo $this->Form->input('deseaAtencionp', ['type'=>'checkbox','id'=>'deseaAtencionp', 'label'=>'¿Desea recibir atención psicologica?','checked'=>false]);echo "<br>";
                ?>  <div class="row" id= "atencionp">  <?php
                echo $this->Form->input('PsicoAdultas', array(
                    'label' => 'Psicología de Adultas',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $psicoadultas,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion psicologica
                 */
                /* checkbox para atencion psicologica  */
                echo "<legend></legend><br>";
                echo $this->Form->input('deseaAtencionn', ['type'=>'checkbox','id'=>'deseaAtencionn', 'label'=>'¿Desea que 
                los niños reciban atención psicologica?','checked'=>false]);echo "<br>";
                ?>  <div class="row" id= "atencionn">  <?php
                echo $this->Form->input('PsicoNinos', array(
                    'label' => 'Psicología de Niños',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $psiconinos,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
                
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion de trabajo social 
                 */
                /* checkbox para atencion psicologica  */
                echo "<legend></legend><br>";
                echo $this->Form->input('trabajosocial', ['type'=>'checkbox','id'=>'trabajosocial', 'label'=>'¿Desea recibir atención de una trabajadora social?','checked'=>false]);echo "<br>";
                ?>  <div class="row" id= "tsocial">  <?php
                echo $this->Form->input('TrabSocial', array(
                    'label' => 'Trabajo Social',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $trabSocial,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                ?> </div> <!-- <div class="large-6 medium-6 columns">  -->
                
                <div class="large-6 medium-6 columns">
                
                <?php     
                
                echo $this->Form->input('interd', array(
                    'label' => 'Interdisciplinarias',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $interdis,
                    'required'=>'required'
                    )
                );
                
                
                
                echo "<legend></legend><br>";
                echo $this->Form->input('capTecnica', ['type'=>'checkbox','id'=>'capTecnica', 'label'=>'Programa de Formacion y capacitación Técnica','checked'=>false]);
                
                echo $this->Form->input('capCert', ['type'=>'checkbox','id'=>'capCert', 'label'=>'Capacitación Certificada','checked'=>false]);

                echo $this->Form->input('cuidNins', ['type'=>'checkbox','id'=>'cuidNins', 'label'=>'Cuido de niños y niñas','checked'=>false]);
                
                echo $this->Form->input('crteconf', ['type'=>'checkbox','id'=>'crteconf', 'label'=>'Corte y Confección','checked'=>false]);
                
                echo $this->Form->input('unyas', ['type'=>'checkbox','id'=>'unyas', 'label'=>'Uñas acrilicas','checked'=>false]);
                
                echo $this->Form->input('comput', ['type'=>'checkbox','id'=>'comput', 'label'=>'Computación','checked'=>false]);
                
                echo $this->Form->input('maquillaje', ['type'=>'checkbox','id'=>'maquillaje', 'label'=>'Maquillaje','checked'=>false]);
                
                echo $this->Form->input('peluqeria', ['type'=>'checkbox','id'=>'peluqeria', 'label'=>'Peluqueria','checked'=>false]);
                echo "<br>";
                
                echo "<legend></legend><br>";
                $bisart = ['No', 'Nivel 1', 'Nivel 2'];
                echo $this->Form->input('bisuteria', array(
                    'label' => 'Bisutería y Artesanía',
                    'type' => 'select',
                    'options' => $bisart,
                    'required'=>'required'
                    )
                );
                
                
                
                $cuidomayor = ['No', 'Nivel 1', 'Nivel 2'];
                echo $this->Form->input('$cuidoAMayorF', [
                    'label' => 'Cuido de personas adultas mayores',
                    'type' => 'select',
                    'options' => $cuidomayor,
                    'required'=>'required'
                    ]
                );
                
                
                
                $cursosform = ['Nutrición, Cocina y habitos de Salud', 'Estimulación Física y Mental'];
                echo $this->Form->input('$cursosformacion', [
                    'label' => 'Cursos de Formación',
                    'type' => 'select',
                    'options' => $cursosform,
                    'multiple' => 'checkbox',
                    'required'=>'required'
                    ]
                );
                


    
                ?>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
        
                </div>
        </fieldset>
    </article>
    
    
    
    
    <article id="tab7">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    
  </section>
</section>
    </div>
	<script type="text/javascript" id='scpts'>
	    $(window).load( function () {
	            hideOrShow( $('#deseaAtencionl') , $('#atencionl') );/*legal*/
	            hideOrShow( $('#deseaAtencionp') , $('#atencionp') );/*psico*/
	            hideOrShow( $('#deseaAtencionn') , $('#atencionn') );/*psico (niños)*/
	            hideOrShow( $('#trabajosocial') , $('#tsocial') );/*psico (niños)*/
	    })

    $('#deseaAtencionl').change(function () { hideOrShow( $(this), $('#atencionl') );});
    
    $('#trabajosocial').change(function () { hideOrShow( $(this), $('#tsocial') ); });
    
    $('#deseaAtencionp').change(function () { hideOrShow( $(this), $('#atencionp') ); });
    
    $('#deseaAtencionn').change(function () { hideOrShow( $(this), $('#atencionn') ); });
    
    function hideOrShow ($checkbname, $containerName ) {
        if ( $checkbname.is(":checked")) {
            $containerName.fadeIn();
            return;
        }
        $containerName.fadeOut();
        return;
    }
    
    $(function(){
        $('ul.tabs li:first').addClass('active');
        $('.block article').hide();
        $('.block article:first').show();
        $('ul.tabs li').on('click',function(){
            $('ul.tabs li').removeClass('active');
            $(this).addClass('active')
            $('.block article').hide();
            var activeTab = $(this).find('a').attr('href');
            $(activeTab).show();
            return false;
          });
    })
	</script>
</body>
</html>
