
<!--
********************************************************************************
               HIJOS                                                     
********************************************************************************
-->

<fieldset>
        <?php
            /*   VARIABLES                                                    */
            
            $escolaridad = [
                'ningún grado'=>'ningún grado',
                'primaria'=>'Primaria',
                'secundaria'=>'Secundaria',
                'para universitario/técnico'=>'ParaUniversitaria / Técnico',
                'universitaria completa'=>'Universidad'
            ];
            $salud = [
                'Discapacidad_Física'       => 'Discapacidad Física',
                'Discapacidad_Cognitiva'    => 'Discapacidad Cognitiva',
                'Discapacidad_Sensorial'    => 'Discapacidad Sensorial',
                'Discapacidad_Mental'       => 'Discapacidad Mental',
                'Padecimiento_Crónicos'    => 'Padecimientos Crónicos',
                'VIH_SIDA'                  => 'VIH-SIDA',
                'Alergias'                  => 'Alergias',
                'problemasRespirat'         => 'Problemas Respiratorios',
                
                '?????????????????'         => '?????????',
                'Condición_Psiquíatrica'    => 'Condición Psiquíatrica',
                'Enfermedad_Terminal'       => 'Enfermedad Terminal'
            ];
            $tipoMaltrato = [
                'psico', 'fisico', 'bullying'
            ];
            
            $abusosexual = [
                'No', 'Si, denunciado', 'Si, no denunciado'
            ];
            
            //$p = $persona->toArray();
        ?>
        
        <div class="large-4 small-4 columns"> <?php
            
            echo 'Cantidad de Hijos Registrados '.$p[0]['num_hijos_ceaam'];
            
            echo $this->Form->input('Person.nombre',['value'=>$p[0]['nombre']]); 
            
            echo $this->Form->input('Person.genero', 
                array(
                    'value'=>$p[0]['genero'], 'label' => 'Género',
                    'templates' => [ 'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>' ],
                    'type' => 'radio',
                    'required' => 'required', 'options' => $genero
                )
            );
            
            echo $this->Form->input('Person.edad',['value'=>$p[0]['edad'],'type'=>'number', 'min'=>'0', 'max'=>'100', 'value'=> '1' ]); 
            
            echo $this->Form->input('Person.fecha_de_nacimiento',['value'=>$p[0]['fecha_de_nacimiento'], 'type'=>'date', 'required' ]); 
            
            echo $this->Form->input('Person.nacionalidad',['value'=>$p[0]['nacionalidad']]);
        
            echo $this->Form->input('Person.escolaridad', [
                'value'=>$p[0]['escolaridad'],
                'label' => 'Escolaridad',
                'type' => 'select',
                'options' => $escolaridad,
                'required'=>'required'
                ]
            );
        
        echo '</div>';
        echo '<div class="large-4 small-4 columns">';
            
            //echo $this->Form->input('PeopleFamily.parentesco',['value'=>$p[0]['cambiar $parentesco'], 'placeholder'=>'Parentesco con usuaria']); 
            //echo $this->Form->input('PeopleFamily.parentesco',['value'=>$p[0]['cambiar $parentesco'], 'placeholder'=>'Parentesco con agresor']); 
            
            echo "<legend>Condición de Salud</legend><br>";
            echo $this->Form->input('Person.condicion_salud', [
                    'label' => '',
                    'multiple' => 'checkbox',
                    'options' => $salud
                ]
            );
            
        echo '</div>';
        echo '<div class="large-4 small-4 columns">';
            
            //echo "<legend>Tipo de Maltrato</legend><br>";
            //echo $this->Form->input('????????????????????????', [
            //        'type' => 'select',
            //        'multiple' => 'checkbox',
            //        'options' => $tipoMaltrato
            //    ]
            //);
            
            //echo "<legend>Abuso Sexual</legend><br>";
            //echo $this->Form->input('????????????????????????', [
            //        'required'  => 'required'                   ,
            //        'type' => 'select',
            //        'options' => $abusosexual
            //    ]
            //);
        
        ?>
    </div>
</fieldset>