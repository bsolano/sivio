<fieldset>
    
    <h3><?= __('Datos Personales') ?></h3>
    <div class="externalReferences index large-4 medium-9 columns content">
     
     
     <?php
             $p= $persona->toArray();  
         
                echo $this->Form->input('nombre',array('value'=>$p[0]['nombre'], 'readonly' => 'readonly' )); 
                echo $this->Form->input('Apellidos',array('value'=>$p[0]['apellidos'],'readonly' => 'readonly'));
                echo $this->Form->input('Identificacion',array('label'=>'Identificación','value'=>$p[0]['identificacion'],'readonly' => 'readonly'));
                echo $this->Form->input('tipo_identificacion',array('label'=>'Tipo de Identificación','value'=>$p[0]['tipo_identificacion'],'readonly' => 'readonly'));
                echo $this->Form->input('Fecha de Nacimiento',array('value'=>$p[0]['fecha_de_nacimiento'],'readonly' => 'readonly')); 
                echo $this->Form->input('Estado Civil',array('value'=>$p[0]['estado_civil'],'readonly' => 'readonly'));
            ?>  
    </div>
      <h3><?= __('') ?></h3>
<div class="externalReferences large-4 medium-9 columns">
     <?php
             
         if($p[0]['genero']=='F')
            $genero = "Femenino";
        else {
            $genero = "Masculino";
        }
        
        if($p[0]['experiencia_laboral'])
            $e_laboral = "Sí";
        else {
            $e_laboral = "No";
        }
                
                echo $this->Form->input('lugar_trabajo',array('label'=>'Lugar de Trabajo','value'=>$p[0]['lugar_trabajo'],'readonly' => 'readonly'));
                echo $this->Form->input('Nacionalidad',array('label'=>'Nacionalidad','value'=>$p[0]['nacionalidad'],'readonly' => 'readonly'));
                 echo $this->Form->input('Género',array('value'=>$genero,'readonly' => 'readonly' )); 
                echo $this->Form->input('Ocupación',array('value'=>$p[0]['ocupacion'],'readonly' => 'readonly' ));
                echo $this->Form->input('condicion_laboral',array('label'=>'Condición Laboral','value'=>$p[0]['condicion_laboral'],'readonly' => 'readonly'));
                echo $this->Form->input('experiencia_laboral',array('label'=>'Experiencia Laboral','value'=>$e_laboral,'readonly' => 'readonly'));
            ?>  
    </div>
      
    <div class="externalReferences large-4 medium-9 columns">
     <?php
               
         
               
                echo $this->Form->input('condicion_migratoria',array('label'=>'Condición Migratoria','value'=>$p[0]['condicion_migratoria'],'readonly' => 'readonly'));
                echo $this->Form->input('Vivienda',array('label'=>'Vivienda','value'=>$p[0]['vivienda'],'readonly' => 'readonly'));
                 echo $this->Form->input('Condición de Salud',array('value'=>$p[0]['condicion_salud'],'readonly' => 'readonly')); 
                echo $this->Form->input('telefono',array('value'=>$p[0]['telefono'],'readonly' => 'readonly'));
                echo $this->Form->input('edad',array('label'=>'Edad','value'=>$p[0]['edad'],'readonly' => 'readonly'));
                echo $this->Form->input('num_de_hijos',array('label'=>'Número de Hijos','value'=>$p[0]['num_de_hijos'],'readonly' => 'readonly'));
            ?>  
    </div>
    <input type="button" value="Editar" display:"block" class="primary button float-right" onclick="editar(<?= $p[0]['id'] ?>)"/>
</fieldset>
<script type="text/javascript">
    function editar(id) {
       
                document.location = "/People/edit/"+id;
       
    }
</script>