<fieldset>
        <div class="large-6 medium-6 columns">
            <?php
                //Primera columna
                /**Arrays y declaraciones a las preguntas **/
                
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
                $kit = ['Sí'=>'Sí','No'=>'No','No indica'=>'No indica'];
                
                //INPUTS      
                $p = $persona->toArray();
                echo $this->Form->input('Family.num_familia',['label'=>'Número de familia']); 

                echo "<legend>Datos de la usuaria</legend>";
                echo $this->Form->input('Person.nombre',['value'=>$p[0]['nombre']]); 
                echo $this->Form->input('Person.apellidos',['value'=>$p[0]['apellidos']]);
                echo $this->Form->input('Person.identificacion',['label'=>'Identificación','value'=>$p[0]['identificacion']]);
                echo $this->Form->input('Person.tipo_identificacion',['label'=>'Tipo de identificación','value'=>$p[0]['tipo_identificacion']]);

                echo "<legend>Lugar de procedencia</legend><br>";
                echo $this->Form->input('dconfidencial', ['type'=>'checkbox','id'=>'dconfidencial', 'label'=>'¿La ubicación es confidencial o no la indica?','checked'=>false]);
                echo "<br>";
            ?>  
                <div class="row" id= "direccion">  
                    <?php
                        echo $this->Form->input('Person.provincia',['value'=>$p[0]['provincia']]);
                        echo $this->Form->input('Person.canton',['label' => 'Cantón','value'=>$p[0]['canton']]);
                        echo $this->Form->input('Person.direccion', ['type'=>'textarea','label'=>'Dirección']);
                    ?> 
                </div> 
            <?php 
                echo $this->Form->input('Entry.ceaam_ingresa', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $ceaam,
                  'required' => 'required',
                  'label' => 'CEAAM al que ingresa'
                ]);
                
            ?>
        </div>
        <div class="large-6 medium-6 columns">
            <?php            
                echo $this->Form->input('PeopleEntry[].fecha_accion',['type'=>'datetime','label'=>'Fecha de ingreso actual']);
                //fecha ingreso anterior
                echo $this->Form->input('Entry.motivo_ingreso', array(
                    'label' => 'Motivo de ingreso',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $motivoIngreso
                    )
                );
                echo $this->Form->input('Entry.ultimo_episodio', ['type'=>'textarea','label'=>'Descripción del último episodio']);
                
                echo $this->Form->input('PeopleEntry[].fecha_accion',['type'=>'datetime','label'=>'Fecha de egreso']);
                echo $this->Form->input('History.kit', [
                    'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                    ],
                    'type' => 'radio',
                    'options' =>  $kit,
                    'required' => 'required',
                    'label' => 'Entrega del kit de emergencia'
                    ]
                );
                echo "<legend>Lugar de destino</legend><br>";
                

            ?>
        </div>        
</fieldset>
