<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->

<div class="consultations form small-12  large-10 large-centered medium-10 columns content">
    <?= $this->Form->create($consultation) ?>
    <legend><?= __('Añadir consulta') ?></legend>
    <section class="wrapper">
        <ul class="tabs">
            <li id="page1" class="active" onclick='switchTabs()'><a href="#tab1">Página 1</a></li>
            <li id="page2" onclick='switchTabs()'><a href="#tab2">Página 2</a></li>
            <li id="page3" onclick='switchTabs()'><a href="#tab3">Página 3</a></li>
            <li id="page4" onclick='switchTabs()'><a href="#tab4">Página 4</a></li>
            <li id="page5" onclick='switchTabs()'><a href="#tab5">Página 5</a></li>
            <li id="page6" onclick='switchTabs()'><a href="#tab6">Página 6</a></li>
            <input id="agregarAt" style="line-height: unset; padding: 0.25em 0.5em; margin-bottom: -1px !important;" type="submit" value="Guardar" class="button float-right" onclick='submit'/>
        </ul>
    </section>
    
    <fieldset>
        
        <div class = "row page page1">
            
            <?php
            $tipo = ["-Seleccione una opción-","Delegación de la Mujer", "PLANOVI"];
            echo $this->Form->input('tipo',['label'=>'Tipo','type'=>'select','options'=>$tipo,'id'=>'tipo']);
            ?>
            
            <div id="horario">
            <?php
            echo $this->Form->input('Horario', ['label' => 'Horario', 'type' => 'radio','options'=>['Laboral','Disponibilidad']]);
            
            ?>
            </div>
            <div class = "row">
                <div class = "large-6 medium-6 columns">
                    <?php echo $this->Form->input('fecha', ['empty' => true, 'label' => 'Fecha de inicio']); ?>
                </div>
                
                <div class = "large-6 medium-6 columns">
                    <?php echo $this->Form->input('hora_inicio', ['empty' => true, 'label' => 'Hora de inicio']); ?>
                </div> 
            </div> <!--/ First row dates-->
            <div class = "row">
                <div class = "small-6 large-6 columns">
                   <?php echo $this->Form->input('fecha_finalizacion', ['empty' => true, 'label' => 'Fecha de finalización']); ?>
                </div> 
                <div class = "small-6 large-6 columns">
                    <?php echo $this->Form->input('hora_finalizacion', ['empty' => true, 'label' => 'Hora de Finalización']); ?>
                </div>
                
            </div> <!--/ Second row dates-->
            </div> <!--/page 1-->
            <div class = "row page page2">
            <?php
            $InstitucionRefiere = ["COAVIF","Usuaria","Pariente","Oficina Regional INAMU","IMAS","PANI",
                                    "OFIM", "Red local", "Juzgado", "Def. Habitantes", "CCSS","Ministerio púbilco",
                                    "MSP","IAFA","OAPV","Otro"];
            echo $this->Form->input('institucion_que_refiere',['label'=>'Institución referente','type'=>'select','options'=>$InstitucionRefiere]);
            echo $this->Form->input('nombre_que_refiere',['label' => 'Funcionario de la institución referente']);
            echo $this->Form->input('telefono_que_refiere',['label' => 'Teléfono del funcionario de la institución referente']);
            $situacion_enfrentada = [
                'Violencia Sexual' => 'Violencia Sexual',
                'Violencia Fisica' => 'Violencia Física',
                'Acoso Laboral' => 'Acoso Laboral',
                'Violencia Psicologica' => 'Violencia Psicológica',
                'Hostigamiento Sexual' => 'Hostigamiento Sexual',
                'Violencia Patrimonial' => 'Violencia Patrimonial',
                'Trata' => 'Trata'
                ];
                echo $this->Form->input('situacion-enfrentada', array(
                    'label' => 'Situación Enfrentada',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $situacion_enfrentada
                    ));   
            ?></div> <!-- page 2 -->
            <div class = "row page page3">
            <?php
            echo $this->Form->input('ultimo_incidente', ['label' => 'Último incidente']);
             $riesgo = [
                'Precaución' => 'Precaución',
                'Alto Riesgo' => 'Alto Riesgo',
                 'Riesgo Severo' => 'Riesgo Severo',
                ];
            echo $this->Form->input('valoracion_de_riesgo', [
                    'label' => 'Nivel de riesgo',
                    'type' => 'radio',
                    'options' => $riesgo]);
            echo $this->Form->input('familiares_en_riesgo', ['label' => 'Familiares en riesgo']);
            echo $this->Form->input('familiares_requieren_proteccion', ['label' => '¿Los familiares necesitan protección?']);?>
            </div> <!-- / page3 -->
            <div class = "row page page4">
            <?php
             $vinculo = [
                'Compañero/a' => 'Compañero/a',
                'Esposo' => 'Esposo',
                'Novio/a' => 'Novio/a',
                'Ex pareja' => 'Ex pareja',
                'Suegro/a' => 'Suegro/a',
                'Yerno' => 'Yerno',
                'Hijo/a' => 'Hijo/a',
                'Padre' => 'Padre',
                'Madre' => 'Madre',
                'Hermano/a' => 'Hermano/a',
                'Tío/a' => 'Tío/a',
                'Cuñado/a' => 'Cuñado/a',
                'Nuera' => 'Nuera',
                'Desconocido/a' => 'Desconocido/a'
                ];
                echo $this->Form->input('vinculo_con_persona_agresora', [
                    'label' => 'Vínculo con la persona agresora',
                    'type' => 'radio',
                    'options' => $vinculo]); ?>
                    
                </div> <!-- / page 4 vinculo -->
                    <div class = "page page5">
                
                    <?php echo $this->Form->input('tiempo_relacion_con_agresor', ['label' => 'Tiempo de relación con el agresor']); ?>
               
               
                    <?php echo $this->Form->input('tiempo_agresion', ['label' => 'Tiempo de la agresión']); ?>
            
            
            <div class="row">
            <div class="medium-6 columns">
            <?php echo $this->Form->input('medidas_proteccion', ['label' => 'Medidas de protección']);?>
             </div>
              <div class="medium-6 columns">
            <?php echo $this->Form->input('denuncia_penal', ['label' => '¿Existe denuncia penal?']);?>
                </div>
            </div> <!--/ row medidas -->
            <?php
            echo $this->Form->input('fecha_vencimiento', ['empty' => true, 'label' => 'Fecha de vencimiento de la denuncia']);
            $apoyo = [
                'Familiar' => 'Familiar',
                'Amistad' => 'Amistad',
                'Comunal' => 'Comunal',
                'Institución' => 'Institución'
                ];?>
                <?php
            echo $this->Form->input('recurso_apoyo_fuera_zona_riesgo',['label' => 'Recurso de apoyo fuera de la zona de riesgo',
                    'type' => 'radio',
                    'options' => $apoyo]);
            echo $this->Form->input('nombre_recurso');
            echo $this->Form->input('telefono_recurso');?>
            </div> <!-- / page 5 -->
            <div class="row page page6">
            <?php  echo $this->Form->input('observaciones');?>
        
 

    
    <div id="submit"><?= $this->Form->button(__('Enviar Formulario'), ['class' => 'secondary button']) ?></div>
    <?= $this->Form->end() ?>
  
</div> <!-- /page 6-->
<a onclick="$('#myModal').foundation('open');"href="#" data-reveal-id="myModal">Click Me For A Modal</a>



   </fieldset>
   
<div class="reveal" id="myModal" data-reveal>
  <div class="row">
      <div class="medium-8-columns">
     <h2 id="modalTitle">Valoración de Riesgo</h2>  
      <section class="wrapper">
        <ul class="tabs">
            <li id="page1" class="active" onclick='switchTabs()'><a href="#tab1">Página 1</a></li>
            <li id="page2" onclick='switchTabs()'><a href="#tab2">Página 2</a></li>
            <li id="page3" onclick='switchTabs()'><a href="#tab3">Página 3</a></li>
        </ul>
        </section>
    <fieldset>
       <ol>
     
      <li><input class="Alto_riesgo" type="checkbox" value="1">¿Han habido agresiones físicas graves que
      causaron lesiones a la víctima o ameritaron una intervención médica?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="2">¿Ha usado o amenazado con usar un arma
      de fuego, cuchillo y otra arma letal contra la víctima?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="3">¿Ha intentado el agresor ahorcar a la víctima?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="4">¿Ha forzado a la víctima a tener relaciones
      o practicar actos de contenido sexual en contra de su voluntad?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="5">¿Ha amenazado con matar a la víctima?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="6">¿Presenta el agresor celos muy intensos,
      violentos y/o conductas controladoras sobre la pareja?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="7">¿Ha habido un aumento en la frecuencia y/o
      gravedad de los incidentes violentos en el último mes?</li><br>
      <li><input class="Alto_riesgo" type="checkbox"  value="8">El agresor NO expresa responsabilidad ni culpa por su conducta.</li><br>
      
      
       </ol>
    </fieldset>
  
   </div>
   </div>
</div> <!-- /end modal -->    
<?php echo $this->Html->script('jquery');?>

<?php echo $this->Html->script('tabs');?>