<fieldset>

            <div class="large-6 medium-6 columns">
            <?php
                
                
                /*   VARIABLES   */

                $legal = array(
                    'individual',
                    'grupal',
                    'talleres',
                    'coordinaciones',
                    'representacion_legal'=> 'Representación legal',
                    'informes', 
                    'acompanamiento_profesional'=>'Acompañamiento Profesional', 
                    'consultorio_juridico'=>'Consultorio Jurídico', 
                    'referencias', 
                    'escrito' => 'Escritos'
                );
                
                $psicoadultas = array(
                    'Individual',
                    'Plan de Seguridad',
                    'Grupal',
                    'Talleres',
                    'Coordinaciones',
                    'Informes',
                    'Criterio Especializado',
                    'Acompañamiento Profesional', 
                    'Referencias', 
                );
                
                $psiconinos = array(
                    'Individual (Menor)',
                    'Grupal (Menor)',
                    'Individual (Madre)',
                    'Grupal (Madre)',
                    'Coordinaciones',
                    'Acompañamiento Profesional', 
                    'Talleres (Menor)',
                    'Talleres (Madre)',
                    'Informes',
                    'Referencias'
                );
                
                $trabSocial = array(
                    'Individual',
                    'Grupal',
                    'Talleres',
                    'Coordinaciones',
                    'Informes',
                    'Acompañamiento Profesional', 
                    'Referencias', 
                );
                
                $interdis = array(
                    'Resolución de conflictos',
                    'Egreso Tecnico',
                    'Valoración del proceso',
                    'Atención de quejas'
                );
                /*   *********   */
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion legal
                 */
                echo "<legend></legend><br>";
                echo $this->Form->input('InterventionsPerson.1.tipo_intervencion', [
                    'type'=>'checkbox','id'=>'desea_intervencion', 
                    'label'=>'¿Desea recibir atención legal?','checked'=>false, 
                    'value'=>'legal'
                    ]); echo "<br>";
                ?>  <div class="row" id= "atencionl">  <?php
                /* checkbox para atencion legal  */
                echo $this->Form->input('sinterventions_people', array(
                    'label' => 'Legal',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $legal,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion psicologica
                 */
                 
                 
                /* checkbox para atencion psicologica  */
                echo "<legend></legend><br>";
                
                echo $this->Form->input('InterventionsPerson.2.tipo_intervencion',
                ['type'=>'checkbox','id'=>'deseaAtencionp',
                'label'=>'¿Desea recibir atención psicologica?',
                'checked'=>false,
                'value'=>'psicoadulta'
                ]);
                echo "<br>";
                
                ?>  <div class="row" id= "atencionp">  <?php
                echo $this->Form->input('PsicoAdultas', array(
                    'label' => 'Psicología de Adultas',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $psicoadultas,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion psicologica
                 */
                /* checkbox para atencion psicologica  */
                //echo "<legend></legend><br>";
                //echo $this->Form->input('InterventionsPerson.tipo_intervencion[]',
                //['type'=>'checkbox','id'=>'deseaAtencionn', 'label'=>'¿Desea que 
                //los niños reciban atención psicologica?','checked'=>false]);echo "<br>";
                //?>  <div class="row" id= "atencionn">  <?php
                //echo $this->Form->input('PsicoNinos', array(
                //    'label' => 'Psicología de Niños',
                //    'type' => 'select',
                //    'multiple' => 'checkbox',
                //    'options' => $psiconinos,
                //    'required'=>'required'
                //    )
                //);
                //?> </div> <?php     /*  fin div  ******************************/
                
                
                
                
                
                
                /*   div se usa para ocultar seccion en caso de que no se ------
                 *   requiera atencion de trabajo social 
                 */
                /* checkbox para atencion psicologica  */
                echo "<legend></legend><br>";
                
                echo $this->Form->input('InterventionsPerson.3.tipo_intervencion', [
                    'type'=>'checkbox','id'=>'trabajosocial', 
                    'label'=>'¿Desea recibir atención de una trabajadora social?', 
                    'checked'=>false, 'value' => 'trabajosocial']); echo "<br>";
                
                ?>  <div class="row" id= "tsocial">  <?php
                echo $this->Form->input('TrabSocial', array(
                    'label' => 'Trabajo Social',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $trabSocial,
                    'required'=>'required'
                    )
                );
                ?> </div> <?php     /*  fin div  ******************************/
                
                ?> </div> <!-- <div class="large-6 medium-6 columns">  -->
                
                <div class="large-6 medium-6 columns">
                
                <?php     
                
                echo $this->Form->input('interd', array(
                    'label' => 'Interdisciplinarias',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $interdis,
                    'required'=>'required'
                    )
                );
                
                
                
                echo "<legend></legend><br>";
                echo $this->Form->input('capTecnica', ['type'=>'checkbox','id'=>'capTecnica', 'label'=>'Programa de Formacion y capacitación Técnica','checked'=>false]);
                
                echo $this->Form->input('capCert', ['type'=>'checkbox','id'=>'capCert', 'label'=>'Capacitación Certificada','checked'=>false]);

                echo $this->Form->input('cuidNins', ['type'=>'checkbox','id'=>'cuidNins', 'label'=>'Cuido de niños y niñas','checked'=>false]);
                
                echo $this->Form->input('crteconf', ['type'=>'checkbox','id'=>'crteconf', 'label'=>'Corte y Confección','checked'=>false]);
                
                echo $this->Form->input('unyas', ['type'=>'checkbox','id'=>'unyas', 'label'=>'Uñas acrilicas','checked'=>false]);
                
                echo $this->Form->input('comput', ['type'=>'checkbox','id'=>'comput', 'label'=>'Computación','checked'=>false]);
                
                echo $this->Form->input('maquillaje', ['type'=>'checkbox','id'=>'maquillaje', 'label'=>'Maquillaje','checked'=>false]);
                
                echo $this->Form->input('peluqeria', ['type'=>'checkbox','id'=>'peluqeria', 'label'=>'Peluqueria','checked'=>false]);
                echo "<br>";
                
                echo "<legend></legend><br>";
                $bisart = ['No', 'Nivel 1', 'Nivel 2'];
                echo $this->Form->input('bisuteria', array(
                    'label' => 'Bisutería y Artesanía',
                    'type' => 'select',
                    'options' => $bisart,
                    'required'=>'required'
                    )
                );
                
                
                
                $cuidomayor = ['No', 'Nivel 1', 'Nivel 2'];
                echo $this->Form->input('$cuidoAMayorF', [
                    'label' => 'Cuido de personas adultas mayores',
                    'type' => 'select',
                    'options' => $cuidomayor,
                    'required'=>'required'
                    ]
                );
                
                
                
                $cursosform = ['Nutrición, Cocina y habitos de Salud', 'Estimulación Física y Mental'];
                echo $this->Form->input('$cursosformacion', [
                    'label' => 'Cursos de Formación',
                    'type' => 'select',
                    'options' => $cursosform,
                    'multiple' => 'checkbox',
                    'required'=>'required'
                    ]
                );
                
                ?>
                </div>
        </fieldset>