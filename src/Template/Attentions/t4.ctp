
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
            echo $this->Form->input('History.0.antecedente_psiquiatrico',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Antecedentes Psiquiátricos',
              'type' => 'radio',
              'options' => $apsiq,
              )
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
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_fisica', array(
                'label' => 'Violencia física',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vfisica
                )
            );
            
            echo $this->Form->input('History.0.vfisica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia física?']);
            
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_psicologica', array(
                'label' => 'Violencia psicológica',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vpsic
                )
            );                 
            
            echo $this->Form->input('History.0.vpsicologica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia psicológica?']);
    
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
            
            
            
            
    <div class="large-4 small-4 columns"> 
        <?php
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_sexual', array(
                'label' => 'Violencia sexual',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vsex
                )
            );
            
            echo $this->Form->input('History.0.vsexual_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia sexual?']);
            
    
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.impacto_violencia', array(
                'label' => 'Impacto de la violencia',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $impacto
                )
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
            
    
            echo $this->Form->input('History.0.medida_proteccion', array(
                'label' => 'Medidas de protección',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $medidasProteccion
                )
            ); 
            
            echo $this->Form->input('History.0.vencimiento_proteccion',['type'=>'date','label'=>'Fecha de vencimiento de la protección']);
    
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
