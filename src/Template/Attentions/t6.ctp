<!--
********************************************************************************
               Intervenciones                                                     
********************************************************************************
@jasonanx
-->
<fieldset>
    <div class="large-4 small-4 columns">
            <?php
                /*   VARIABLES   ---------------------------------------------*//*
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
                );*/
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
                    'label'=>'¿Desea recibir atención legal?','checked'=>false, 
                    'value'=>'legal'
                    ]);
                /*  ver NOTA   */ ?>  <div class="row" id= "atencionl">  <?php
                /* checkbox para atencion legal  */
                //echo $this->Form->input('Interventions.legal', array(
                //    'label' => 'Legal',
                //    'type' => 'select',
                //    'multiple' => 'checkbox',
                //    'options' => $legal,
                //    'required'=>'required'
                //    )
                //);
                echo $this->Form->input('Interventions.legal.individual'                 , [ 'type'=>'checkbox', 'label' => 'Individual'   ] );
                echo $this->Form->input('Interventions.legal.grupal'                     , [ 'type'=>'checkbox', 'label' => 'Grupal'       ] );
                echo $this->Form->input('Interventions.legal.talleres'                   , [ 'type'=>'checkbox', 'label' => 'Talleres'     ] );
                echo $this->Form->input('Interventions.legal.coordinaciones'             , [ 'type'=>'checkbox', 'label' => 'Coordinaciones'       ] );
                echo $this->Form->input('Interventions.legal.representacion_legal'       , [ 'type'=>'checkbox', 'label' => 'Representación legal' ] );
                echo $this->Form->input('Interventions.legal.informes'                   , [ 'type'=>'checkbox', 'label' => 'Informes'            ] ); 
                echo $this->Form->input('Interventions.legal.acompanamiento_profesional' , [ 'type'=>'checkbox', 'label' => 'Acompañamiento Profesional']); 
                echo $this->Form->input('Interventions.legal.consultorio_juridico'       , [ 'type'=>'checkbox', 'label' => 'Consultorio Jurídico'    ] );
                echo $this->Form->input('Interventions.legal.referencias'                , [ 'type'=>'checkbox', 'label' => 'Referencias'         ] );
                echo $this->Form->input('Interventions.legal.escrito'                    , [ 'type'=>'checkbox', 'label' => 'Escritos' ] );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
  
                echo "<legend></legend><br>";
                /* checkbox para atencion psicologica  ------------------------*/
                echo $this->Form->input('InterventionsPerson.psicoadulta.tipo_intervencion',
                ['type'=>'checkbox','id'=>'deseaAtencionp',
                'label'=>'¿Desea recibir atención psicologica?',
                'checked'=>false,
                'value'=>'psicoadulta'
                ]);
                ?>  <div class="row" id= "atencionp">  <?php
                //echo $this->Form->select('Interventions.psicoadulta', $psicoadultas, array(
                //    'label' => 'Psicología de Adultas',
                //    'multiple' => 'checkbox',
                //    'required'=>'required'
                //    )
                //);
                echo $this->Form->input('Interventions.psicoadulta.individual'                , [ 'type'=>'checkbox', 'label'  => 'Individual' ] );
                echo $this->Form->input('Interventions.psicoadulta.plan_seguridad'            , [ 'type'=>'checkbox', 'label'  => 'Plan de Seguridad' ] );
                echo $this->Form->input('Interventions.psicoadulta.grupal'                    , [ 'type'=>'checkbox', 'label'  => 'Grupal' ] );
                echo $this->Form->input('Interventions.psicoadulta.talleres'                  , [ 'type'=>'checkbox', 'label'  => 'Talleres' ] );
                echo $this->Form->input('Interventions.psicoadulta.coordinaciones'            , [ 'type'=>'checkbox', 'label'  => 'Coordinaciones' ] );
                echo $this->Form->input('Interventions.psicoadulta.informes'                  , [ 'type'=>'checkbox', 'label'  => 'Informes' ] );
                echo $this->Form->input('Interventions.psicoadulta.referencias'               , [ 'type'=>'checkbox', 'label'  => 'Referencias' ] );
                echo $this->Form->input('Interventions.psicoadulta.criterio_especializado'    , [ 'type'=>'checkbox', 'label'  => 'Criterio Especializado' ] );
                echo $this->Form->input('Interventions.psicoadulta.acompanamiento_profesional', [ 'type'=>'checkbox', 'label'  => 'Acompañamiento Profesional' ] );

                ?> </div> 
                </div> <div class="large-4 small-4 columns">
                <?php     /*  fin div  ******************************/
                
                
                
                

                echo "<legend></legend><br>";
                /*** checkbox para atencion psicologica    --------------------*/
                echo $this->Form->input(
                    'InterventionsPerson.psiconinyos.tipo_intervencion', [
                        'type'=>'checkbox',
                        'id'=>'deseaAtencionn',
                        'value'=>'psiconinyos',
                        'label'=>'¿Desea que los niños reciban atención psicologica?',
                        'checked'=>false
                    ]
                ); ?>
                <div class="row" id= "atencionn">  <?php
                /***    Conjunto de checkboxes ***/
                echo $this->Form->input( 'Interventions.psiconinyos.individual'     , [ 'type'=>'checkbox', 'label' => 'Individual'             ]);
                echo $this->Form->input( 'Interventions.psiconinyos.plan_seguridad' , [ 'type'=>'checkbox', 'label' => 'Plan de Seguridad'      ]);
                echo $this->Form->input( 'Interventions.psiconinyos.grupal'         , [ 'type'=>'checkbox', 'label' => 'Grupal'                 ]);
                echo $this->Form->input( 'Interventions.psiconinyos.talleres'       , [ 'type'=>'checkbox', 'label' => 'Talleres'               ]);
                echo $this->Form->input( 'Interventions.psiconinyos.coordinaciones' , [ 'type'=>'checkbox', 'label' => 'Coordinaciones'         ]);
                echo $this->Form->input( 'Interventions.psiconinyos.informes'       , [ 'type'=>'checkbox', 'label' => 'Informes'               ]);
                echo $this->Form->input( 'Interventions.psiconinyos.referencias'    , [ 'type'=>'checkbox', 'label' => 'Referencias'            ]);
                    
                echo "<hr>";
                echo $this->Form->input('Interventions.psiconinyos.madre', [
                    'type'=>'checkbox',
                    'label'=>'¿Acompañado por la madre?','checked'=>false, 
                    ]);
                echo "<br>";
                ?> </div> <?php     /*  fin div  ******************************/
                

                echo "<legend></legend><br>";
                /* checkbox para atencion psicologica  ------------------------*/
                
                ?>
                
                <div class="switch-toggle switch-3 switch-holo">
                    <input id="on" name="state-d" type="radio" checked="">
                    <label for="on" onclick="">Sí</label>
                    
                    <input id="na" name="state-d" type="radio" disabled checked="checked">
                    <label id = "nalbl" for="na" onclick="">N/A</label>
                
                    <input id="off" name="state-d" type="radio">
                    <label for="off" onclick="">No</label>
                
                    <a></a>
                </div>
                
                <?php
                
                echo $this->Form->input('InterventionsPerson.trabajosocial.tipo_intervencion', [
                    'type'=>'checkbox','id'=>'trabajosocial', 
                    'label'=>'¿Desea recibir atención de una trabajadora social?', 
                    'checked'=>false, 'value' => 'trabajosocial']);
                
                ?>  <div class="row" id= "tsocial">  <?php
                //echo $this->Form->input('Interventions.trabajosocial', array(
                //    'label' => 'Trabajo Social',
                //    'type' => 'select',
                //    'multiple' => 'checkbox',
                //    'options' => $trabSocial,
                //    'required'=>'required'
                //    )
                //);
                echo $this->Form->input( 'Interventions.trabajosocial.individual'                 , [ 'type'=>'checkbox', 'label' => 'Individual'             ]);
                echo $this->Form->input( 'Interventions.trabajosocial.grupal'                     , [ 'type'=>'checkbox', 'label' => 'Grupal'      ]);
                echo $this->Form->input( 'Interventions.trabajosocial.talleres'                   , [ 'type'=>'checkbox', 'label' => 'Talleres'                 ]);
                echo $this->Form->input( 'Interventions.trabajosocial.coordinaciones'             , [ 'type'=>'checkbox', 'label' => 'Coordinaciones'               ]);
                echo $this->Form->input( 'Interventions.trabajosocial.informes'                   , [ 'type'=>'checkbox', 'label' => 'Informes'         ]);
                echo $this->Form->input( 'Interventions.trabajosocial.referencias'                , [ 'type'=>'checkbox', 'label' => 'Referencias'               ]);
                echo $this->Form->input( 'Interventions.trabajosocial.acompanamiento_profesional' , [ 'type'=>'checkbox', 'label' => 'Acompañamiento Profesional'            ]);
                ?> </div> <?php     /*  fin div  ******************************/
                ?> </div><div class="large-4 small-4 columns"> <!-- <div class="large-6 medium-6 columns">  -->
                
                
                
                
                <?php     
                echo "<legend></legend><br>";
                echo '<h> Interdisciplinarias <br><br></h>';
                //echo $this->Form->input('Interventions.Interdisciplinaria', [
                //    'label' => 'Interdisciplinarias',
                //    'type' => 'select',
                //    'multiple' => 'checkbox',
                //    'options' => $interdis,
                //    ]
                //);
                echo $this->Form->input('Interventions.interdisciplinaria.resolucion_conflictos'    , [ 'type'=>'checkbox', 'label'  => 'Resolución de conflictos'    ] );
                echo $this->Form->input('Interventions.interdisciplinaria.egresos_tecnicos'         , [ 'type'=>'checkbox', 'label'  => 'Egreso Tecnico'    ] );
                echo $this->Form->input('Interventions.interdisciplinaria.valoracion_proceso'       , [ 'type'=>'checkbox', 'label'  => 'Valoración del proceso'    ] );
                echo $this->Form->input('Interventions.interdisciplinaria.atencion_quejas'          , [ 'type'=>'checkbox', 'label'  => 'Atención de quejas'        ] );
                echo $this->Form->input('Interventions.interdisciplinaria.prog_form_cap_tecnica'    , [ 'type'=>'checkbox', 'label'  => 'Programa de formación y capacitación técnica'      ] );
                echo $this->Form->input('Interventions.interdisciplinaria.capacitacion_certificada' , [ 'type'=>'checkbox', 'label'  => 'Capacitación certificada'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.cuido_menores'            , [ 'type'=>'checkbox', 'label'  => 'Cuido de menores'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.corte_confeccion'         , [ 'type'=>'checkbox', 'label'  => 'Corte y confección'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.acrilico'                 , [ 'type'=>'checkbox', 'label'  => 'Uñas acrilicas'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.computacion'              , [ 'type'=>'checkbox', 'label'  => 'Computación'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.maquillaje'               , [ 'type'=>'checkbox', 'label'  => 'Maquillaje'       ] );
                echo $this->Form->input('Interventions.interdisciplinaria.peluqueria'               , [ 'type'=>'checkbox', 'label'  => 'Peluqueria'    ] );
                echo "<hr>";
                //echo $this->Form->input('Interventions.Interdisciplinaria.
                //echo $this->Form->input('Interventions.Interdisciplinaria.
                //echo $this->Form->input('Interventions.Interdisciplinaria.
                //echo $this->Form->input('Interventions.Interdisciplinaria.

                $bisart = [ '0' => 'Elija una Opción', '1'=> 'Nivel 1', '2' => 'Nivel 2', '3'=>'No'];
                echo $this->Form->input('Interventions.interdisciplinaria.bisuteria_artesania', array(
                    'label' => 'Bisutería y Artesanía',
                    'type' => 'select',
                    'options' => $bisart,
                    )
                );
         
                echo $this->Form->input('Interventions.interdisciplinaria.cuido_adultos', [
                    'label' => 'Cuido de personas adultas mayores',
                    'type' => 'select',
                    'options' => $bisart,
                    ]
                );
                
                echo "<hr>";
                echo '<h> Cursos de Formación <br><br></h>';
                echo $this->Form->input('Interventions.interdisciplinaria.CF_nutri_salud'       , [ 'type'=>'checkbox', 'label'  => 'Nutrición, Cocina y habitos de Salud'    ] );
                echo $this->Form->input('Interventions.interdisciplinaria.CF_est_fisica_mental' , [ 'type'=>'checkbox', 'label'  => 'Estimulación Física y Mental'    ] );
                
                ?>
                </div>
        </fieldset>