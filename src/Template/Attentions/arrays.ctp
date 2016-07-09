	<?php 
        //TAB 1
        $ceaam = ['AM'=>'AM','OCC'=>'OCC','HC'=>'HC'];
        $motivoIngreso = array(
            'Abuso sexual' => 'Abuso sexual',
            'Intento femicidio' => 'Intento femicidio',
            'Orden Judicial' => 'Orden Judicial',
            'Recomendación de PANI' => 'Recomendación de PANI',
            'Trata' => 'Trata',
            'Violencia contra las mujeres' => 'Violencia contra las mujeres',
            'Violencia intrafamiliar' => 'Violencia intrafamiliar',
            'Vulnerabilidad social' => 'Vulnerabilidad social'
             
        );
        $kit = ['Sí'=>'Sí','No'=>'No','Rechaza el kit'=>'Rechaza el kit'];

	    //TAB 2
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
            '0' => 'No',
            '1' => '1 mes',
            '2' => '2 meses',
            '3' => '3 meses',
            '4' => '4 meses',
            '5' => '5 meses',
            '6' => '6 meses',
            '7' => '7 meses',
            '8' => '8 meses',
            '9' => '9 meses'
        ];                
                
	    //TAB 4
	    $adicciones = [
                        'Alcohol' => 'Alcohol',
                        'Drogas' => 'Drogas',
                        'Medicamentos' => 'Medicamentos',
                        'Ninguna' => 'Ninguna'
                        ];
	
	    $sep = array(
                        '1' => '1',
                        '2-4' =>'2-4',
                        '5-7' => '5-7',
                        'más de 7' => 'más de 7'
                    );
        $motivos = array(
            'Amenazas' => 'Amenazas',
            'Dependencia económica' => 'Dependencia económica',
            'Factores emocionales' => 'Factores emocionales',
            'Mandato religioso' => 'Mandato religioso',
            'Promesas de cambio' => 'Promesas de cambio',
            'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo' => 'No cuenta con recursos de apoyo/Ausencia de recursos de apoyo'
        );
        $apsiq = array(
            'Sí' => 'Sí',
            'No' => 'No',
            'No indica' => 'No indica'
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
        $riesgo = array(
            'Precaución' => 'Precaución',
            'Alto riesgo' => 'Alto riesgo',
            'Riesgo severo' => 'Riesgo severo'
        );
        $oapvd = array(
            '1' => 'Sí',
            '0' => 'No',
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
        
        //TAB 5
	?>