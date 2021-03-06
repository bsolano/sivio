<fieldset>
        <div class="large-6 medium-6 columns">
            <?php
                echo $this->Form->input('Person.0.num_familia',['label'=>'Número de familia','value'=>$persona->num_familia]); 

                echo "<legend>Datos de la usuaria</legend>";
                echo $this->Form->input('Person.0.nombre',['value'=>$persona->nombre]); 
                echo $this->Form->input('Person.0.apellidos',['value'=>$persona->apellidos]);
                echo $this->Form->input('Person.0.identificacion',['label'=>'Identificación','value'=>$persona->identificacion]);
                echo $this->Form->input('Person.0.tipo_identificacion',['label'=>'Tipo de identificación','value'=>$persona->tipo_identificacion]);

                echo "<legend>Lugar de procedencia</legend><br>";
                echo $this->Form->input('Person.0.direccion_oculta', ['type'=>'checkbox','id'=>'dconfidencial', 'label'=>'¿La ubicación es confidencial o no la indica?','checked'=>false]);
                echo "<br>";
            ?>  
                <div class="row" id= "direccion">  
                    <?php
                        echo $this->Form->input('Person.0.provincia',['value'=>$persona->provincia]);
                        echo $this->Form->input('Person.0.canton',['label' => 'Cantón','value'=>$persona->canton]);
                        echo $this->Form->input('Person.0.direccion', ['type'=>'textarea','label'=>'Dirección','value'=>$persona->direccion]);
                    ?> 
                </div> 
            <?php 
                echo "<br><legend>Datos de ingreso/egreso</legend><br>";
                echo $this->Form->input('PeopleEntry.0.ceaam_ingresa', [
                  'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                  ],
                  'type' => 'radio',
                  'options' =>  $ceaam,
                  'label' => 'CEAAM al que ingresa'
                ]);
                
            ?>
            <label>Tipo de ingreso</label>
            <input name="PeopleEntry[0][tipo_ing_eg]" value="" type="hidden">
            <div class="radio-inline screen-center screen-radio">
            	<label for="PeopleEntry-0-tipo-ing-eg-primario">
            		<input name="PeopleEntry[0][tipo_ing_eg]" value="Primario" id="PeopleEntry-0-tipo-ing-eg-primario" type="radio">Primario
            	</label>
            </div>
            <div class="radio-inline screen-center screen-radio">
            	<label for="PeopleEntry-0-tipo-ing-eg-transitorio">
            		<input name="PeopleEntry[0][tipo_ing_eg]" value="Transitorio" id="PeopleEntry-0-tipo-ing-eg-transitorio" type="radio">Transitorio
            	</label>
            </div>
            <div class="radio-inline screen-center screen-radio">
            	<label for="PeopleEntry-0-tipo-ing-eg-reingreso-ceaam">
            		<input name="PeopleEntry[0][tipo_ing_eg]" value="Reingreso CEAAM" id="PeopleEntry-0-tipo-ing-eg-reingreso-ceaam" type="radio">
            		    Reingreso CEAAM <input type="text" name="PeopleEntry[0][ceaam_reingreso]" placeholder="Número de CEAAM" style=" width: 40% "> 
            		</input>
            	</label>
            </div>
            <div class="radio-inline screen-center screen-radio">
            	<label for="PeopleEntry-0-tipo-ing-eg-traslado-ceaam">
            		<input name="PeopleEntry[0][tipo_ing_eg]" value="Traslado CEAAM" id="PeopleEntry-0-tipo-ing-eg-traslado-ceaam" type="radio">
            		    Traslado CEAAM<input type="text" name="PeopleEntry[0][ceaam_traslado]" placeholder="Número de CEAAM" style=" width: 40%" /> 
        		    </input>
            	</label>
            </div>
            
        <?php   echo $this->Form->input('PeopleEntry.0.fecha_accion',['type'=>'datetime','label'=>'Fecha de ingreso actual']); ?>
        </div>

        <div class="large-6 medium-6 columns">
            <?php            
                echo $this->Form->input('PeopleEntry.0.motivo_ing_eg', array(
                    'label' => 'Motivo de ingreso',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $motivoIngreso
                    )
                );
                
                echo $this->Form->input('History.0.ultimo_episodio', ['type'=>'textarea','label'=>'Descripción del último episodio']);
                
                echo $this->Form->input('PeopleEntry.1.fecha_accion',['type'=>'datetime','label'=>'Fecha de egreso']);
            ?>
                <label>Tipo de egreso</label>
                <input name="PeopleEntry[1][tipo_ing_eg]" value="" type="hidden">
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-proceso-cumplido">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Proceso cumplido" id="PeopleEntry-1-tipo-ing-eg-primario" type="radio">Proceso cumplido
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-transitorio">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Transitorio" id="PeopleEntry-1-tipo-ing-eg-transitorio" type="radio">Transitorio
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-tecnico">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Técnico" id="PeopleEntry-1-tipo-ing-eg-tecnico" type="radio">Técnico
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-voluntario-con-valoracion">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Voluntario con valoración" id="PeopleEntry-1-tipo-ing-eg-voluntario-con-valoracion" type="radio">Voluntario con valoración
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-voluntario-sin-valoracion">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Voluntario sin valoración" id="PeopleEntry-1-tipo-ing-eg-voluntario-sin-valoracion" type="radio">Voluntario sin valoración
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-abandono-servicio">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Abandono del servicio" id="PeopleEntry-1-tipo-ing-eg-abandono-servicio" type="radio">Abandono del servicio
                	</label>
                </div>
                <div class="radio-inline screen-center screen-radio">
                	<label for="PeopleEntry-1-tipo-ing-eg-traslado-ceaam">
                		<input name="PeopleEntry[1][tipo_ing_eg]" value="Traslado CEAAM" id="PeopleEntry-1-tipo-ing-eg-traslado-ceaam" type="radio">
                		    Traslado CEAAM<input type="text" name="PeopleEntry[1][ceaam_traslado]" placeholder="Número de CEAAM" style=" width: 40%" /> 
            		    </input>
                	</label>
                </div>
            
            <?php
                echo "<legend>Lugar de destino</legend><br>";
                
                echo $this->Form->input('PeopleEntry.1.direccion_oculta', ['type'=>'checkbox','id'=>'ddconfidencial', 'label'=>'¿La ubicación es confidencial o no la indica?','checked'=>false]);
                echo "<br>";
            ?>  
                <div id= "direccion_destino" style = "margin-left: auto">  
                    <?php
                        echo $this->Form->input('dextranjero', ['type'=>'checkbox','id'=>'dextranjero', 'label'=>'¿Su destino es fuera del país?','checked'=>false]);
                        ?><div class="row" id= "direccion_extranjero"><?php
                            echo $this->Form->input('PeopleEntry.1.provincia_destino',['label'=>'Provincia']);
                            echo $this->Form->input('PeopleEntry.1.canton_destino',['label'=>'Cantón']);
                        ?></div><?php
                        echo $this->Form->input('PeopleEntry.1.destino_extranjero',['label'=>'Destino fuera del país']);
                    ?>
                </div>
            <?php
                
                echo $this->Form->input('Person.0.telefono',['label'=>'Teléfono','value' => $persona->telefono]);
                echo "<br><legend></legend><br>";
                echo $this->Form->input('History.0.kit', [
                    'templates' => [
                        'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                    ],
                    'type' => 'radio',
                    'options' =>  $kit,
                    'label' => 'Entrega del kit de emergencia'
                    ]
                );
                echo $this->Form->input('Person.0.acepta_seguimiento',
                [
                    'type'=>'checkbox', 
                    'label'=>'¿Acepta los seguimientos? De no marcarse, se toma como un no.',
                    'checked'=>$persona->acepta_seguimiento,
                ]);

            ?>
        </div>        
</fieldset>
