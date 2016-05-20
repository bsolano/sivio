<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="consultations form small-8 large-centered medium-8 columns content">
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Add Consultation') ?></legend>
        <div class = "row page page1">
        <?php
            echo $this->Form->input('horario');
            $tipo = ["Delegación de la Mujer", "PLANOVI"];
            
            echo $this->Form->input('tipo',['label'=>'Tipo','type'=>'select','options'=>$tipo]);
            ?>
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
            echo $this->Form->input('institucion_que_refiere',['label'=>'Institución que refiere','type'=>'select','options'=>$InstitucionRefiere]);
            echo $this->Form->input('nombre_que_refiere',['label' => 'Nombre que refiere']);
            echo $this->Form->input('telefono_que_refiere',['label' => 'Teléfono que refiere']);
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
            echo $this->Form->input('ultimo_incidente');
             $riesgo = [
                'Precaución' => 'Precaución',
                'Alto Riesgo' => 'Alto Riesgo',
                 'Riesgo Severo' => 'Riesgo Severo',
                ];
            echo $this->Form->input('valoracion_de_riesgo', [
                    'label' => 'Nivel de riesgo',
                    'type' => 'radio',
                    'options' => $riesgo]);
            echo $this->Form->input('familiares_en_riesgo');
            echo $this->Form->input('familiares_requieren_proteccion');
             $vinculo = [
                'Compañero/a' => 'Compañero/a',
                'Esposo' => 'Esposo',
                'Novio/a' => 'Novio/a',
                'Ex pareja' => 'Ex pareja',
                'Suegro/a' => 'Suengro/a',
                'Yerno' => 'Yerno',
                'Hijo/a' => 'Hijo/a',
                'Padre' => 'Padre',
                'Madre' => 'Madre',
                'Hermano/a' => 'Hermano/a',
                'Tío/a' => 'Tío/a',
                'Cuñado/a' => 'Cuñado/a',
                'Nuera' => 'Nuera',
                'Desconocido/a' => 'Desconocido/a'
                ];?>
                    <?php
            echo $this->Form->input('vinculo_con_persona_agresora', [
                    'label' => 'Vinculo con la persona agresora',
                    'type' => 'radio',
                    'options' => $vinculo]); ?>
                    
                </div> <!-- / page 3 vinculo -->
                    <div class = "page page4">
                
                    <?php echo $this->Form->input('tiempo_relacion_con_agresor'); ?>
               
               
                    <?php echo $this->Form->input('tiempo_agresion'); ?>
            
            
            <div class="row">
            <div class="medium-6 columns">
            <?php echo $this->Form->input('medidas_proteccion');?>
             </div>
              <div class="medium-6 columns">
            <?php echo $this->Form->input('denuncia_penal');?>
                </div>
            </div> <!--/ row medidas -->
            <?php
            echo $this->Form->input('fecha_vencimiento', ['empty' => true]);
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
            echo $this->Form->input('telefono_recurso');
            echo $this->Form->input('observaciones');
        ?>
    </fieldset>
       <span id="num_page"></span>
    
    <div id="submit"><?= $this->Form->button(__('Submit')) ?></div>
    <?= $this->Form->end() ?>
    
    <div class = "row">
        <div class class="medium-9 large-9 columns">
            </div>
        <div class class="medium-3 large-3 columns">
        <button id="backward">Regresar</button>
        <button id="foward">Siguiente</button>
        </div>
    </div> <!-- row pages-->
</div> <!-- /page 4-->
<?php echo $this->Html->script('jquery');?>
<?php echo $this->Html->script('pagination');?>
