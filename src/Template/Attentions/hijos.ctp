
<!--
********************************************************************************
               HIJOS                                                     
********************************************************************************
-->

<fieldset>
        <?php
            /*   VARIABLES                                                    */
            
            $escolaridad = [
                'null'=>'[Elija una opción]',
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
                'Psicologico', 'Físico', 'Bullying'
            ];
            
            $abusosexual = [
                'No', 'Si, denunciado', 'Si, no denunciado'
            ];
            /***********************************************************************/
        ?>
        <div class="large-4 small-4 columns"> <?php
            
            // Usuaria person.0
            // agresor person.1
            
            echo "<legend>Datos Generales</legend><br>";
            echo "<h2> Hijo ".$i." </h2>";
            echo $this->Form->input('Person.'.'Hijo'.($i).'.nombre'
            //, ['required'=>'required']
            ); 
            
            echo $this->Form->input('Person.'.'Hijo'.($i).'.genero', 
                array(
                    'label' => 'Género',
                    'templates' => [ 'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>' ],
                    'type' => 'radio',
                    'options' => $genero
                )
            );
            
            echo $this->Form->input('Person.'.'Hijo'.($i).'.edad', [
                'type'=>'number', 'min'=>'0', 'max'=>'100' ]); 
            
            echo $this->Form->input('Person.'.'Hijo'.($i).'.fecha_de_nacimiento',[
                'type'=>'date', 'required' ,
                'value'=> 'null'
            ]); 
            
            echo $this->Form->input('Person.'.'Hijo'.($i).'.nacionalidad');
        
            echo $this->Form->input('Person.'.'Hijo'.($i).'.escolaridad', [
                'label' => 'Escolaridad',
                'type' => 'select',
                'options' => $escolaridad,
                ]
            );
        
        echo '</div>';
        echo '<div class="large-4 small-4 columns">';
            
            //echo $this->Form->input('PeopleFamily.parentesco',['value'=>$p[$i+1]['cambiar $parentesco'], 'placeholder'=>'Parentesco con usuaria']); 
            //echo $this->Form->input('PeopleFamily.parentesco',['value'=>$p[$i+1]['cambiar $parentesco'], 'placeholder'=>'Parentesco con agresor']); 
            
            echo "<legend>Condición de Salud</legend><br>";
            echo $this->Form->input('Person.'.'Hijo'.($i).'.condicion_salud', [
                    'label' => '',
                    'multiple' => 'checkbox',
                    'options' => $salud
                ]
            );
            
        echo '</div>';
        echo '<div class="large-4 small-4 columns">';
            
            echo "<legend>Tipo de Maltrato</legend><br>";
            echo $this->Form->input('History.'.'Hijo'.($i).'.tipo_maltrato_vivido', [
                    'label' => '',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $tipoMaltrato
                ]
            );
            
            echo "<legend>Abuso Sexual</legend><br>";
            echo $this->Form->input('History.'.'Hijo'.($i).'.abuso_sexual', [
                    'label' => '',
                    'type' => 'select',
                    'options' => $abusosexual
                ]
            );
        
        ?>
    </div>
</fieldset>