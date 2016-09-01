<!--
********************************************************************************
               Intervenciones                                                     
********************************************************************************
@jasonanx
-->
<fieldset>
    <div class="large-4 small-4 columns">
            <?php
                /*   VARIABLES   ---------------------------------------------*/
                $legal = array(
                    'individual'                 => 'Individual'  ,
                    'grupal'                     => 'Grupal'      ,
                    'talleres'                   => 'Talleres'    ,
                    'coordinaciones'             => 'Coordinaciones'      ,
                    'representacion_legal'       => 'Representación legal'   ,
                    'informes'                   => 'Informes'           , 
                    'acompanamiento_profesional' => 'Acompañamiento Profesional', 
                    'consultorio_juridico'       => 'Consultorio Jurídico'    ,
                    'referencias'                => 'Referencias'         ,
                    'escrito'                    => 'Escritos'
                );
                $psicoadultas = array(
                    'individual'                 => 'Individual',
                    'plan_seguridad'             => 'Plan de Seguridad',
                    'grupal'                     => 'Grupal',
                    'talleres'                   => 'Talleres',
                    'coordinaciones'             => 'Coordinaciones',
                    'informes'                   => 'Informes',
                    'referencias'                => 'Referencias',
                    'criterio_especializado'     => 'Criterio Especializado',
                    'acompanamiento_profesional' => 'Acompañamiento Profesional'
                );
                $psiconinos = array(
                    'individual'                 => 'Individual',
                    'plan_seguridad'             => 'Plan de Seguridad',
                    'grupal'                     => 'Grupal',
                    'talleres'                   => 'Talleres',
                    'coordinaciones'             => 'Coordinaciones',
                    'informes'                   => 'Informes',
                    'referencias'                => 'Referencias'
                );
                $trabSocial = array(
                    'individual'                 => 'Individual',
                    'grupal'                     => 'Grupal',
                    'talleres'                   => 'Talleres',
                    'coordinaciones'             => 'Coordinaciones',
                    'informes'                   => 'Informes',
                    'referencias'                => 'Referencias',
                    'acompanamiento_profesional' => 'Acompañamiento Profesional'
                );
                $interdis = array(
                    'resolucion_conflictos'      => 'Resolución de conflictos',
                    'egresos_tecnicos'           => 'Egreso Tecnico',
                    'valoracion_proceso'         => 'Valoración del proceso',
                    'atencion_quejas'            => 'Atención de quejas'    ,
                    'prog_form_cap_tecnica'      => 'Programa de formación y capacitación técnica'  ,
                    'capacitacion_certificada'   => 'Capacitación certificada'   ,
                    'cuido_menores'              => 'Cuido de menores'   ,
                    'corte_confeccion'           => 'Corte y confección'   ,
                    'acrilico'                   => 'Uñas acrilicas'   ,
                    'computacion'                => 'Computación'   ,
                    'maquillaje'                 => 'Maquillaje'   ,
                    'peluqueria'                 => 'Peluqueria'
                );
                /*   -------------------------------------------------------  */
                
                
                
                /* * NOTA
                 * -------------------------------------------------------------
                 * div se usa para ocultar seccion en caso de que no se
                 * requiera atencion
                 * -------------------------------------------------------------
                 * */
                 
                 
                
                echo "<legend></legend><br>";
                /* checkbox para atencion legal        ------------------------*/
                echo $this->Form->input('InterventionsPerson.legal.tipo_intervencion', [
                    'type'=>'checkbox','id'=>'desea_intervencion', 
                    'label'=>'¿Desea recibir atención legal?', 
                    'value'=>'legal'
                    ]);
                    
                echo '<div class="row" id= "atencionl">';
                    echo $this->Form->input('InterventionsPerson.legal.options', array(
                        'label' => 'Legal',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        'options' => $legal,
                        )
                    );
                echo '</div>';
                /*  fin div  *****************************---------------------*/
                
                
  
                /*         para atencion psicologica  -------------------------*/
                echo "<legend></legend><br>";
                echo $this->Form->input('InterventionsPerson.psicoadulta.tipo_intervencion',
                    ['type'=>'checkbox','id'=>'deseaAtencionp',
                    'label'=>'¿Desea recibir atención psicologica?',
                    'value'=>'psicoadulta'
                    ]);

                echo '<div class="row" id= "atencionp">  ';
                    echo $this->Form->input('InterventionsPerson.psicoadulta.options', array(
                        'label'     => 'Psicología de Adultas'  ,
                        'type'      => 'select'             ,
                        'multiple'  => 'checkbox'           ,
                        'options'   =>  $psicoadultas,
                        )
                    );
                echo '</div> '; /*  fin      ----------------------------------*/
                
                
                
                echo '</div> <div class="large-4 small-4 columns">';
                
                

                echo "<legend></legend><br>";
                /*** checkbox para atencion psicologica    --------------------*/
                echo $this->Form->input(
                    'InterventionsPerson.psiconinyos.tipo_intervencion', [
                        'type'=>'checkbox',
                        'id'=>'deseaAtencionn',
                        'value'=>'psiconinyos',
                        'label'=>'¿Desea que los niños reciban atención psicologica?',
                    ]
                ); 
                
                echo '<div class="row" id= "atencionn">  ';
                echo $this->Form->input('InterventionsPerson.psiconinyos.options', array(
                        'label'     => 'Psicología de Adultas'  ,
                        'type'      => 'select'             ,
                        'multiple'  => 'checkbox'           ,
                        'options'   =>  $psiconinos,
                        )
                    );

                echo "<hr>";
                echo $this->Form->input('InterventionsPerson.psiconinyos.madre', [
                    'type'=>'checkbox',
                    'label'=>'¿Acompañado por la madre?',
                    ]);
                echo "<br>";
                
                echo '</div> ';
                

                echo "<legend></legend><br>";
                /* checkbox para atencion psicologica  ------------------------*/
                
                echo $this->Form->input('InterventionsPerson.trabajosocial.tipo_intervencion', [
                    'type'=>'checkbox','id'=>'trabajosocial', 
                    'label'=>'¿Desea recibir atención de una trabajadora social?', 
                    'value' => 'trabajosocial']
                    );
                
                ?>
                <!--
                <div id='intsocial'  class="switch-toggle switch-3 switch-holo" style = 'display: inline-table;float:right;'>
                    
                    <input id="on" name="state-d" type="radio" checked="" value="trabajosocial">
                    <label for="on" onclick="chgcheck('trabajosocial', true, 'tsocial' )">✔</label>
                    
                    <input id="na" name="state-d" type="radio" disabled checked="checked">
                    <label id = "nalbl" for="na" onclick="">&nbsp;</label>

                    <input id="off" name="state-d" type="radio">
                    <label for="off" onclick="chgcheck('trabajosocial', false, 'tsocial' )">✘</label>
                
                    <a></a>
                </div>
                <label id = "nalbl" for="intsocial" style='display: inline-table;' onclick=""> ¿Desea recibir atención de una trabajadora social? </label>
                -->
                
                <div class="row" id= "tsocial">  
                <?php
                
                echo $this->Form->input('InterventionsPerson.trabajosocial.options', array(
                    'label' => 'Trabajo Social',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $trabSocial,
                    )
                );

                echo '</div> ';
                echo '</div>';
                
                echo '<div class="large-4 small-4 columns"> ';
                
                
                
                
                echo "<legend></legend><br>";
                echo '<h> Interdisciplinarias <br><br></h>';
                
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.tipo_intervencion ', [
                    'type'  => 'hidden',
                    'value' => 'interdisp'
                    ]
                );
                
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.options', [
                    'label' => 'Interdisciplinarias',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $interdis,
                    ]
                );
    
                echo "<hr>";
                

                $bisart = [ '0' => 'Elija una Opción', '1'=> 'Nivel 1', '2' => 'Nivel 2', '3'=>'No'];
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.bisuteria_artesania', array(
                    'label' => 'Bisutería y Artesanía',
                    'type' => 'select',
                    'options' => $bisart,
                    )
                );
         
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.cuido_adultos', [
                    'label' => 'Cuido de personas adultas mayores',
                    'type' => 'select',
                    'options' => $bisart,
                    ]
                );
                
                echo "<hr>";
                echo '<h> Cursos de Formación <br><br></h>';
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.CF_nutri_salud'       , [ 'type'=>'checkbox', 'label'  => 'Nutrición, Cocina y habitos de Salud'    ] );
                echo $this->Form->input('InterventionsPerson.Interdisciplinaria.CF_est_fisica_mental' , [ 'type'=>'checkbox', 'label'  => 'Estimulación Física y Mental'    ] );
                
                ?>
                </div>
        </fieldset>