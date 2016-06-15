<fieldset>
    
    <h3><?= __('Datos Personales') ?></h3>
    <div class="externalReferences index large-4 medium-9 columns content">
     
     
     <?php
             $p= $persona->toArray();  
         
                echo $this->Form->input('nombre',['value'=>$p[0]['nombre']]); 
                echo $this->Form->input('Apellidos',['value'=>$p[0]['apellidos']]);
                echo $this->Form->input('Identificacion',['label'=>'Identificación','value'=>$p[0]['identificacion']]);
                echo $this->Form->input('tipo_identificacion',['label'=>'Tipo de Identificación','value'=>$p[0]['tipo_identificacion]']]);
                echo $this->Form->input('Fecha de Nacimiento',['value'=>$p[0]['fecha_de_nacimiento']]); 
                echo $this->Form->input('Estado Civil',['value'=>$p[0]['estado_civil']]);

            ?>  
    </div>
      <h3><?= __('') ?></h3>
<div class="externalReferences large-4 medium-9 columns">
     <?php
             
         
                
                echo $this->Form->input('lugar_trabajo',['label'=>'Lugar de Trabajo','value'=>$p[0]['lugar_trabajo']]);
                echo $this->Form->input('Nacionalidad',['label'=>'Nacionalidad','value'=>$p[0]['nacionalidad]']]);
                 echo $this->Form->input('Género',['value'=>$p[0]['genero']]); 
                echo $this->Form->input('Ocupación',['value'=>$p[0]['ocupacion']]);
                echo $this->Form->input('condicion_laboral',['label'=>'Condición Laboral','value'=>$p[0]['condicion_laboral']]);
                echo $this->Form->input('experiencia_laboral',['label'=>'Experiencia Laboral','value'=>$p[0]['experiencia_laboral]']]);

            ?>  
    </div>
      
    <div class="externalReferences large-4 medium-9 columns">
     <?php
               
         
               
                echo $this->Form->input('condicion_migratoria',['label'=>'Condición Migratoria','value'=>$p[0]['condicion_migratoria]']]);
                echo $this->Form->input('Vivienda',['label'=>'Vivienda','value'=>$p[0]['vivienda]']]);
                 echo $this->Form->input('Condición de Salud',['value'=>$p[0]['condicion_salud']]); 
                echo $this->Form->input('telefono',['value'=>$p[0]['telefono']]);
                echo $this->Form->input('edad',['label'=>'Edad','value'=>$p[0]['edad']]);
                echo $this->Form->input('num_de_hijos',['label'=>'Número de Hijos','value'=>$p[0]['num_de_hijos]']]);


            ?>  
    </div>
</fieldset>
