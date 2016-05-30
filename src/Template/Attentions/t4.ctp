
<!----------------------------------------------------------------------------->
<!--               Historia de Violencia                                      ->
<!----------------------------------------------------------------------------->
<fieldset>
            <div class="large-4 small-4 columns"> 
            <legend>Perfil del agresor</legend>
            <?php

                    echo $this->Form->input('Person.1.nombre'); 
                    echo $this->Form->input('Person.1.apellidos');
                    echo $this->Form->input('Person.1.edad',['type'=>'number','min'=>'0']);
                    echo $this->Form->input('Person.1.genero', array(
                        'templates' => [
                          'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                        ],
                        'label' => 'Género',
                        'type' => 'radio',
                        'options' => $genero
                        )
                    );
                    echo $this->Form->input('Person.1.ocupacion',['label'=>'Ocupación']);
                    echo $this->Form->input('Person.1.lugar_trabajo',['label'=>'Lugar de trabajo']);
                    $adicciones = [
                        'Alcohol' => 'Alcohol',
                        'Drogas' => 'Drogas',
                        'Medicamentos' => 'Medicamentos',
                        'Ninguna' => 'Ninguna'
                        ];
                    echo $this->Form->input('Person.1.adicciones', array(
                        'label' => 'Adicciones',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $adicciones
                        )
                    );                 
                ?>
                <legend>Relación entre agesor y usuaria</legend>
                <?php
                    echo $this->Form->input('History.0.vinculo',['label'=>'Vínculo con el agresor']);
                    echo $this->Form->input('History.0.tiempo_relacion',['label'=>'Tiempo de la relación']);
                    echo $this->Form->input('History.0.tiempo_agresion',['label'=>'Tiempo de la agresión']);
                    $sep = array(
                        '1' => '1',
                        '2-4' =>'2-4',
                        '5-7' => '5-7',
                        'más de 7' => 'más de 7'
                    );
                    echo $this->Form->input('History.0.num_separaciones',array(
                      'templates' => [
                            'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                      ],
                      'label'=>'Número de separaciones de la persona agresora',
                      'type' => 'radio',
                      'options' => $sep,
                      )
                    );             
                         
                    ?>
                    <legend>Historia de violencia</legend>
                    <?php 
                    echo $this->Form->input('History.0.situacion_enfrentada',['label'=>'Situación enfrentada','type'=>'textarea']);

                    $motivos = array(
                        'Amenazas' => 'Amenazas',
                        'Dependencia económica' => 'Dependencia económica',
                        'Factores emocionales' => 'Factores emocionales',
                        'Mandato religioso' => 'Mandato religioso',
                        'Promesas de cambio' => 'Promesas de cambio',
                        'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo' => 'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo'
                    );
                    echo $this->Form->input('History.0.motivo_regreso', array(
                        'label' => 'Motivos para regresar',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $motivos
                        )
                    );   
                    
            ?>
            <br>
            <label>Antecedentes Legales</label>
            <input name="History[0][antecedente_legal]" value="" type="hidden">
            <div class="radio-inline screen-center screen-radio">
            	<label for="history-0-antecedente-legal-sí">
            		<input name="History[0][antecedente_legal]" value="Sí" id="history-0-antecedente-legal-sí" type="radio">Sí, ¿cuáles? <input name="antecedente_legal_cuales" type="text"/>
            	</label>
            </div>
            <div class="radio-inline screen-center screen-radio">
            	<label for="history-0-antecedente-legal-no">
            		<input name="History[0][antecedente_legal]" value="No" id="history-0-antecedente-legal-no" type="radio">No
            	</label>
            </div>
            <div class="radio-inline screen-center screen-radio">
            	<label for="history-0-antecedente-legal-no-indica">
            		<input name="History[0][antecedente_legal]" value="No indica" id="history-0-antecedente-legal-no-indica" type="radio">No indica
            	</label>
            </div>
            
            <?php
                    $apsiq = array(
                        'Sí' => 'Sí',
                        'No' => 'No',
                        'No indica' => 'No indica'
                    );
                    
                    echo $this->Form->input('History.0.antecedente_psiquiatrico',array(
                      'templates' => [
                            'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                      ],
                      'label'=>'Antecedentes Psiquiátricos',
                      'type' => 'radio',
                      'options' => $apsiq,
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
                    echo $this->Form->input('History.0.atencion_por_agresion', array(
                        'label' => 'Atención médica producto de agresión',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $atencionMedica
                        )
                    );                
                    
                    echo $this->Form->input('History.0.centro_salud',['label'=>'Nombre del centro de salud']);                              
                ?>
                
                </div>
                
                
        <div class="large-4 small-4 columns"> 
        <?php

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
    
                echo "<br><legend></legend><br>";
                echo $this->Form->input('History.0.violencia_fisica', array(
                    'label' => 'Violencia física',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vfisica
                    )
                );
                
                echo $this->Form->input('History.0.vfisica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia física?']);
                           
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
                echo "<br><legend></legend><br>";
                
                echo $this->Form->input('History.0.violencia_psicologica', array(
                    'label' => 'Violencia psicológica',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vpsic
                    )
                );                 
                
                echo $this->Form->input('History.0.vpsicologica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia psicológica?']);
                
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

                echo "<br><legend></legend><br>";

                echo $this->Form->input('History.0.violencia_patrimonial', array(
                    'label' => 'Violencia patrimonial',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vpat
                    )
                );
                echo $this->Form->input('History.0.vpatrimonial_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia patrimonial?']);

            ?>
        </div>
                
                
                
                
        <div class="large-4 small-4 columns"> <?php

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
                echo "<br><legend></legend><br>";
                echo $this->Form->input('History.0.violencia_sexual', array(
                    'label' => 'Violencia sexual',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $vsex
                    )
                );
                echo $this->Form->input('History.0.vsexual_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia sexual?']);
                
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
                echo "<br><legend></legend><br>";
                echo $this->Form->input('History.0.impacto_violencia', array(
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
                echo $this->Form->input('History.0.valoracion_riesgo',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Valoración de riesgo',
                  'type' => 'radio',
                  'options' => $riesgo,
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
                echo $this->Form->input('History.0.medida_proteccion', array(
                    'label' => 'Medidas de protección',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $medidasProteccion
                    )
                ); 
                
                echo $this->Form->input('History.0.vencimiento_proteccion',['type'=>'date','label'=>'Fecha de vencimiento de la protección']);

                $oapvd = array(
                    'Sí' => 'Sí',
                    'No' => 'No',
                );
                echo $this->Form->input('History.0.programa_oapvd',array(
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'label'=>'Se encuentra en el programa OAPVD',
                  'type' => 'radio',
                  'options' => $oapvd,
                  )
                );      
                
            ?>
        </div>
        </fieldset>
