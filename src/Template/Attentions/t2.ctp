<fieldset>
    <div class="large-4 small-4 columns" id ="tabular2">
        <?php

            echo $this->Form->input('Person.0.edad',                ['value'=>$persona->edad,'type'=>'number']);            
            
            echo $this->Form->input('Person.0.fecha_de_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento','value'=>$persona->fecha_de_nacimiento]);
            
            echo $this->Form->input('Person.0.estado_civil',        [
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'type' => 'radio',
              'options' =>  $estadocivil,
              'label' => 'Estado civil',
              'value' => $persona->estado_civil
            ]);
            
            echo $this->Form->input('Person.0.escolaridad', [
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'type' => 'radio',
              'options' =>  $escolaridad,
              'label' => 'Escolaridad',
              'value' => $persona->escolaridad
            ]);
            
            echo $this->Form->input('Person.0.num_hijos',      ['value'=>$persona->num_hijos,'label'=>'Número total de hijos','type'=>'number']);            
            
            echo $this->Form->input('Person.0.num_hijos_ceaam',['label'=>'Número de hijos con los que ingresa al CEAAM',
                'type'=>'number','value'=>$persona->num_hijos_ceaam
            ]);
            
            echo $this->Form->input('Person.0.tipo_familia',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Tipo de Familia',
              'type' => 'radio',
              'options' => $familia,
              'value' => $persona->tipo_familia
              )
            );  
        ?>
    </div>
    <div class="large-4 small-4 columns">
        <?php
            //Segunda columna
            echo $this->Form->input('Person.0.nacionalidad',        ['value'=>$persona->nacionalidad]);
            
            echo $this->Form->input('Person.0.condicion_migratoria',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Condición Migratoria',
              'type' => 'radio',
              'options' => $migratoria,
              'value' => $persona->condicion_migratoria
    
              )
            );                
            echo $this->Form->input('Person.0.ocupacion',        ['label'=>'Ocupación','value'=>$persona->ocupacion]);
            
            echo $this->Form->input('Person.0.condicion_laboral',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Condición Laboral',
              'type' => 'radio',
              'options' => $laboral,
              'value' => $persona->condicion_laboral
    
              )
            );
            
            echo $this->Form->input('Person.0.experiencia_laboral',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Experiencia Laboral',
              'type' => 'radio',
              'options' => ['Sí'=>'Sí','No'=>'No'],
              'value' => $persona->experiencia_laboral
              )
            );
            echo $this->Form->input('Person.0.lugar_trabajo',['label'=>'Lugar de trabajo','value'=>$persona->lugar_trabajo]);
            
            echo $this->Form->input('Person.0.adicciones', array(
                'label' => 'Adicciones',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $adicciones,
                'value'=>$persona->adicciones
                )
            );
        ?>
    </div>
    <div class="large-4 small-4 columns">
        <?php
            //Tercera columna
            echo $this->Form->input('Person.0.condicion_aseguramiento', array(
                'label' => 'Condición de Aseguramiento',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $aseguramiento,
                'value'=>$persona->condicion_aseguramiento
                )
            );                
            echo $this->Form->input('Person.0.vivienda',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Tipo de Vivienda',
              'type' => 'radio',
              'options' => $vivienda,
              'value' => $persona->vivienda
    
              )
            );
            echo $this->Form->input('Person.0.condicion_salud', array(
                'label' => 'Condición de Salud',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $salud,
                'value'=>$persona->condicion_salud
                )
            );    
            echo $this->Form->input('Person.0.embarazo',['label'=>'Embarazo','type'=>'select','options'=>$embarazo,'value'=>$persona->embarazo]);
        
        ?>
    </div>
</fieldset>