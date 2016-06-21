
<!----------------------------------------------------------------------------->
<!--               Historia de Violencia                                      ->
<!----------------------------------------------------------------------------->
<fieldset>
    <div class="large-4 small-4 columns"> 
        <legend>Perfil del agresor</legend>
        <?php
            
            echo $this->Form->input('Person.1.nombre',['value' => $agrsr->nombre]); 
            
            echo $this->Form->input('Person.1.apellidos',['value' => $agrsr->apellidos]);
            
            echo $this->Form->input('Person.1.edad',['type'=>'number','min'=>'0','value' => $agrsr->edad]);
            
            echo $this->Form->input('Person.1.genero', array(
                'templates' => [
                  'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
                ],
                'label'   => 'Género',
                'type'    => 'radio',
                'value'   => $agrsr->genero,
                'options' => $genero
                )
            );
            
            echo $this->Form->input('Person.1.ocupacion',['label'=>'Ocupación','value' => $agrsr->ocupacion]);
            
            echo $this->Form->input('Person.1.lugar_trabajo',['label'=>'Lugar de trabajo','value' => $agrsr->lugar_trabajo]);
            
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
            echo $this->Form->input('History.0.vinculo_usuaria',['label'=>'Vínculo con el agresor','value' => $histV->vinculo_usuaria]);
            
            echo $this->Form->input('History.0.tiempo_relacion',['label'=>'Tiempo de la relación','value' => $histV->tiempo_relacion]);
            
            echo $this->Form->input('History.0.tiempo_agresion',['label'=>'Tiempo de la agresión','value' => $histV->tiempo_agresion]);
            
            echo $this->Form->input('History.0.num_separaciones',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Número de separaciones de la persona agresora',
              'type' => 'radio',
              'value' => $histV->num_separaciones,
              'options' => $sep
              )
            );             
                 
            ?>
            <legend>Historia de violencia</legend>
            <?php 
            
            echo $this->Form->input('History.0.situacion_enfrentada',['label'=>'Situación enfrentada','type'=>'textarea','value' => $histV->situacion_enfrentada]);
    
            echo $this->Form->input('History.0.motivo_regreso', array(
                'label' => 'Motivos para regresar',
                'type' => 'select',
                'multiple' => 'checkbox',
                'value' => $histV->motivo_regreso,
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
              'value' => $histV->antecedente_psiquiatrico
              )
            );  
            
            echo $this->Form->input('History.0.atencion_por_agresion', array(
                'label' => 'Atención médica producto de agresión',
                'type' => 'select',
                'multiple' => 'checkbox',
                'value' => $histV->atencion_por_agresion,
                'options' => $atencionMedica
                )
            );                
            
            echo $this->Form->input('History.0.centro_salud',['label'=>'Nombre del centro de salud','value' => $histV->centro_salud]);                              
        ?>
                
    </div>
            
            
    <div class="large-4 small-4 columns"> 
        <?php
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_fisica', array(
                'label' => 'Violencia física',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vfisica,
                'value' => $histV->violencia_fisica
                )
            );
            
            echo $this->Form->input('History.0.vfisica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia física?','value' => $histV->vfisica_text]);
            
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_psicologica', array(
                'label' => 'Violencia psicológica',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vpsic,
                'value' => $histV->violencia_psicologica
                )
            );                 
            
            echo $this->Form->input('History.0.vpsicologica_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia psicológica?','value' => $histV->vpsicologica_text]);
    
            echo "<br><legend></legend><br>";
    
            echo $this->Form->input('History.0.violencia_patrimonial', array(
                'label' => 'Violencia patrimonial',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vpat,
                'value' => $histV->violencia_patrimonial
                )
            );
            echo $this->Form->input('History.0.vpatrimonial_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia patrimonial?','value' => $histV->vpatrimonial_text]);
    
        ?>
    </div>
            
            
            
            
    <div class="large-4 small-4 columns"> 
        <?php
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.violencia_sexual', array(
                'label' => 'Violencia sexual',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $vsex,
                'value' => $histV->violencia_sexual
                )
            );
            
            echo $this->Form->input('History.0.vsexual_text',['type'=>'text','label' =>'¿Alguna otra situación de violencia sexual?','value' => $histV->vsexual_text]);
            
    
            echo "<br><legend></legend><br>";
            
            echo $this->Form->input('History.0.impacto_violencia', array(
                'label' => 'Impacto de la violencia',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $impacto,
                'value' => $histV->impacto_violencia
                )
            );                             

            echo $this->Form->input('History.0.valoracion_riesgo',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Valoración de riesgo',
              'type' => 'radio',
              'options' => $riesgo,
              'value' => $histV->valoracion_riesgo
              )
            );                 
            
    
            echo $this->Form->input('History.0.medida_proteccion', array(
                'label' => 'Medidas de protección',
                'type' => 'select',
                'multiple' => 'checkbox',
                'options' => $medidasProteccion,
                'value' => $histV->medida_proteccion
                )
            ); 
            
            echo $this->Form->input('History.0.vencimiento_proteccion',['type'=>'date','label'=>'Fecha de vencimiento de la protección','value' => $histV->vencimiento_proteccion]);
    
            echo $this->Form->input('History.0.programa_oapvd',array(
              'templates' => [
                    'radioWrapper' => '<div class="radio-inline screen-center screen-radio">{{label}}</div>'
              ],
              'label'=>'Se encuentra en el programa OAPVD',
              'type' => 'radio',
              'options' => $oapvd,
              'value' => $histV->programa_oapvd
              )
            );      
        ?>
    </div>
</fieldset>
