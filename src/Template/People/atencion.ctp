<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
        <!--<link type="text/css" rel="stylesheet" href="/webroot/css/style.css" /> -->
        <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script> 
    </head>
<body>
    <?= $this->Form->create(); ?>
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
      
      
        
    <article id="tab1">
        <fieldset>
            <div class = "large-4 small-4 columns">
                
            </div>
        </fieldset>

    </article>
    
    
      
    <article id="tab2">
        <fieldset>
            <div class="large-4 small-4 columns">
            <?php
                //Primera columna
                /**Arrays y declaraciones a las preguntas **/
            
                $estadocivil = array('casada'=>'casada',
                                     'unión libre'=>'unión libre',
                                     'soltera'=>'soltera',
                                     'divorciada'=>'divorciada',
                                     'viuda'=>'viuda',
                                     'separada'=>'separada',
                );
                $escolaridad = array('primaria completa'=>'primaria completa',
                                     'primaria incompleta'=>'primaria incompleta',
                                     'secundaria completa'=>'secundaria completa',
                                     'secundaria incompleta'=>'secundaria incompleta',
                                     'para universitario/técnico'=>'para universitario/técnico',
                                     'universitaria completa'=>'universitaria completa',
                                     'universitaria incompleta'=>'universitaria incompleta',
                                     'ningún grado'=>'ningún grado'
                );
                $genero = array('M' => 'Masculino','F'=>'Femenino');
                $adicciones = [
                'Alcohol' => 'Alcohol',
                'Drogas' => 'Drogas',
                'Medicamentos' => 'Medicamentos',
                'Ninguna' => 'Ninguna'
                ];
                $migratoria = array('nacional'=>'nacional','residente'=>'residente',
                                    'refugiada'=>'refugiada','regular'=>'regular',
                                    'irregular'=>'irregular'
                );
                $laboral = array('remunerada'=>'remunerada','no reumnerada'=>'no remunerada',
                                'desempleada'=>'desempleada', 'pensionada'=>'pensionada'
                );
                $aseguramiento = [
                'directa' => 'directa',
                'familiar' => 'familiar',
                'voluntario o convenio' => 'voluntario o convenio',
                'pensionada' => 'pensionada',
                'por el estado' => 'por el estado',
                'ninguna' => 'ninguna'
                ];
                $vivienda = array('alquilada'=>'alquilada','precario'=>'precario',
                                    'propia total'=>'propia total','prestada'=>'prestada',
                                    'propia con hipoteca'=>'propia con hipoteca','no tiene'=>'no tiene'
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
                $familia =   array('nuclear'=>'nuclear',
                                    'uniparental'=>'uniparental',
                                    'nuclear extendida'=>'nuclear extendida'
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
                
                //INPUTS      
                $p = $persona->toArray();
                echo $this->Form->input('Person.nombre',['value'=>$p[0]['nombre']]); 
                echo $this->Form->input('Person.apellidos',['value'=>$p[0]['apellidos']]);
                echo $this->Form->input('Person.identificacion',['label'=>'Identificación','value'=>$p[0]['identificacion']]);
                echo $this->Form->input('Person.tipo_identificacion',['label'=>'Tipo de identificación','value'=>$p[0]['tipo_identificacion']]);
                echo $this->Form->input('Person.nacionalidad',['value'=>$p[0]['nacionalidad']]);            
                echo $this->Form->input('Person.ocupacion',['label'=>'Ocupación','value'=>$p[0]['ocupacion']]);
                echo $this->Form->input('Person.lugar_trabajo',['label'=>'Lugar de trabajo','value'=>$p[0]['lugar_trabajo']]);
                echo $this->Form->input('Person.fecha_de_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento','value'=>$p[0]['fecha_de_nacimiento']]);
                echo $this->Form->input('Person.estado_civil', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $estadocivil,
                  'required' => 'required',
                  'label' => 'Estado civil',
                  'value' => $p[0]['estado_civil']
                ]);
                echo $this->Form->input('Person.escolaridad', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $escolaridad,
                  'required' => 'required',
                  'label' => 'Escolaridad',
                  'value' => $p[0]['escolaridad']
                ]);
            ?>
        </div>
        <div class="large-4 small-4 columns">
            <?php
                //Segunda columna
                echo $this->Form->input('Person.genero', array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                    'label' => 'Género',
                    'type' => 'radio',
                    'required' => 'required',
                    'options' => $genero,
                    'value' => $p[0]['genero']

                    )
                );
                echo $this->Form->input('Person.adicciones', array(
                    'label' => 'Adicciones',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $adicciones
                    )
                );
                echo $this->Form->input('Person.condicion_migratoria',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condición Migratoria',
                  'type' => 'radio',
                  'options' => $migratoria,
                  'required' => 'required',
                  'value' => $p[0]['condicion_migratoria']

                  )
                );
                echo $this->Form->input('Person.condicion_laboral',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Condición Laboral',
                  'type' => 'radio',
                  'options' => $laboral,
                  'required' => 'required',
                  'value' => $p[0]['condicion_laboral']

                  )
                );
                echo $this->Form->input('Person.experiencia_laboral',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Experiencia Laboral',
                  'type' => 'radio',
                  'options' => ['Sí'=>'Sí','No'=>'No'],
                  'required' => 'required',
                  'value' => $p[0]['experiencia_laboral']
                  )
                );
                echo $this->Form->input('Person.condicion_aseguramiento', array(
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
                //Tercera columna
                echo $this->Form->input('Person.vivienda',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Tipo de Vivienda',
                  'type' => 'radio',
                  'options' => $vivienda,
                  'required' => 'required',
                  'value' => $p[0]['vivienda']

                  )
                );
                echo $this->Form->input('Person.num_hijos_ceaam',['label'=>'Número de hijos con los que ingresa al CEAAM',
                'type'=>'number','value'=>$p[0]['num_hijos_ceaam']
                ]);
                echo $this->Form->input('Person.tipo_familia',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Tipo de Familia',
                  'type' => 'radio',
                  'options' => $familia,
                  'required' => 'required',
                  'value' => $p[0]['tipo_familia']
                  )
                );               
                echo $this->Form->input('Person.condicion_salud', array(
                    'label' => 'Condición de Salud',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $salud
                    )
                );    
                echo $this->Form->input('Person.embarazo',['label'=>'Embarazo','type'=>'select','options'=>$embarazo]);
            
            ?>

            </div>
        </fieldset>
    </article>
    
    
    <!--  -->
    <article id="tab3">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    
    
    
    <article id="tab4">
        <fieldset>
            <div class="large-6 medium-6 columns">
            <h4><?= __('Perfil del agresor') ?></h4>
                <?php
                    echo $this->Form->input('Agressor.nombre'); 
                    echo $this->Form->input('Agressor.apellidos');                    
                    echo $this->Form->input('Agressor.nacionalidad');            
                    echo $this->Form->input('Agressor.ocupacion',['label'=>'Ocupación']);
                    echo $this->Form->input('Agressor.lugar_trabajo',['label'=>'Lugar de trabajo']);
                    echo $this->Form->input('Agressor.fecha_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento']);
        
                    $genero = array('Masculino' => 'Masculino','Femenino'=>'Femenino');
                    echo $this->Form->input('Agressor.genero', array(
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
        
                <?php
                    echo $this->Form->input('Agressor.vinculo',['label'=>'Vínculo con el agresor']);
                    echo $this->Form->input('Agressor.tiempo_relacion',['label'=>'Tiempo de la relación']);
                    echo $this->Form->input('Agressor.tiempo_agresion',['label'=>'Tiempo de la agresión']);
                    $sep = array(
                        '1' => '1',
                        '2-4' =>'2-4',
                        '5-7' => '5-7',
                        'más de 7' => 'más de 7'
                    );
                    echo $this->Form->input('Agressor.num_separaciones',array(
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

            
            <h4><?= __('Historia de violencia')  ?></h4>

            <?php
                
                echo $this->Form->input('History.situacion_enfrentada');

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
                                
                echo $this->Form->input('History.antecedente_legal');
                
                $apsiq = array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                    'No indica' => 'No indica'
                );
                echo $this->Form->input('History.antecedente_psiquiatrico',array(
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
                echo $this->Form->input('History.atencion_por_agresion', array(
                    'label' => 'Atención médica producto de agresión',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $atencionMedica
                    )
                );                
                
                echo $this->Form->input('History.centro_salud',['label'=>'Nombre del centro de salud']);
                
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
    
                echo $this->Form->input('History.violencia_fisica', array(
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
                echo $this->Form->input('History.violencia_psicologica', array(
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
                echo "<legend></legend><br>";
                echo $this->Form->input('violenciasexual', ['type'=>'checkbox','id'=>'violenciasexual', 'label'=>'¿Ha sufrido 
                violencia sexual?','checked'=>false]);echo "<br>";
            ?>  
                <div class="row" id= "vsexual">  
            <?php
                echo $this->Form->input('History.violencia_sexual', array(
                    'label' => 'Violencia sexual',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vsex
                    )
                );
            ?>
                </div>
            <?php
            
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
                echo $this->Form->input('History.violencia_patrimonial', array(
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
                echo $this->Form->input('History.impacto_violencia', array(
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
                echo $this->Form->input('History.valoracion_riesgo',array(
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
                echo $this->Form->input('History.medida_proteccion', array(
                    'label' => 'Medidas de protección',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $medidasProteccion
                    )
                ); 
                
                echo $this->Form->input('History.vencimiento_proteccion',['type'=>'date','label'=>'Fecha de vencimiento de la protección']);

                $oapvd = array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                );
                echo $this->Form->input('History.programa_oapvd',array(
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
            <?= $this->Form->submit('Guardar',['class'=>'shallow secondary button']) ?>
        </div>
        </fieldset>
      
    </article>
    
    <article id="tab5">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
    
    
    <!-------------------------------------------------------------------------*/
    /*                    TAB de Intervencines                                 */
    /*-------------------------------------------------------------------------->
    <article id="tab6">
        
        <?php include 't6.ctp';?>
        
    </article>
    
    
    
    
    <article id="tab7">
      <p>BD911</p>
    </article>
    
    
    
  </section>
</section>
    </div>
	<script type="text/javascript" id='scpts'>
	    $(window).load( function () {
	            hideOrShow( $('#desea_intervencion') , $('#atencionl') );/*legal*/
	            hideOrShow( $('#deseaAtencionp') , $('#atencionp') );/*psico*/
	            hideOrShow( $('#deseaAtencionn') , $('#atencionn') );/*psico (niños)*/
	            hideOrShow( $('#trabajosocial') , $('#tsocial') );/*psico (niños)*/
	            hideOrShow( $('#violenciasexual') , $('#vsexual') );/*psico (niños)*/
	            
	    })

    $('#desea_intervencion').change(function () { hideOrShow( $(this), $('#atencionl') );});
    
    $('#trabajosocial').change(function () { hideOrShow( $(this), $('#tsocial') ); });
    
    $('#deseaAtencionp').change(function () { hideOrShow( $(this), $('#atencionp') ); });
    
    $('#deseaAtencionn').change(function () { hideOrShow( $(this), $('#atencionn') ); });
    
    $('#violenciasexual').change(function () { hideOrShow( $(this), $('#vsexual') );});

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
