
<!----------------------------------------------------------------------------->
<!--               SEGUIMIENTOS                                               ->
<!----------------------------------------------------------------------------->
<?= $this->Html->css('sivio.modal.css') ?>
<div style= 'width: 100%;border: 1px solid rgb(236, 236, 236);padding: 1rem; padding: .4rem 1rem;'>
    <?php
        use Cake\I18n\Time;
        echo '<h style=\'margin-right:1em;\'> '.$persona->nombre.' '.$persona->apellidos.'    '.'</h>';
        
        echo $this->Form->input('Followup.al_xtiempo_del_egreso', [
                'label'     => 'Seguimiento:'               ,
                'type'      => 'select'                     ,
                'id'        => 'acepta_seguimiento'         ,
                'value'     => $seg->al_xtiempo_del_egreso ,
                'options'   => [
                    null                    => '[No Aplica]'           ,
                    'Aceptado'              => 'Aceptado'              ,
                    'Rechaza_Seguimiento'   => 'Rechaza_Seguimiento'   ,
                ],
                'style'     => 'display:inline-table; width: auto; margin:0; margin-right:1rem;',
                'templates' => [
                    'inputContainer' => '<div style="display: inline-block;" >{{content}}</div>'
                ]
            ]
        );
        //echo $this->Form->input('Followup.created',['type'=>'date', 'required'=>'required', 'value'=>Time::now() ]); 
        
        echo $this->Form->input('Followup.medio_comunicacion', [
                //'label'     => 'Medio de Comunicación: '    ,
                'type'      => 'select'                     ,
                'value'     => $seg->medio_comunicacion     ,

                'options'   => [
                    null                                 => '[Seleccione uno]'                  ,
                    'Visita Domiciliar'                  => 'Visita Domiciliar'                 ,
                    'Via Telefónica'                     => 'Via Telefónica'                    ,
                    'No fue posible localizarla'         => 'No fue posible localizarla'        ,
                    'Interinstitucional'                 => 'Interinstitucional'                ,
                    'Visita Domiciliar no localizable'   => 'Visita Domiciliar no localizable'  ,
                ],
                
                'style'     => 'display:inline-table; width: auto; margin:0; margin-right:1rem; ',
                'templates' => [
                    'inputContainer' => '<div style="display: inline-block;" >{{content}}</div>'
                ]
            ]
        );
        
        ?>
    <input type="submit" value="Guardar" class="hollow button float-right" onclick='submit'style='margin-left:1em;' />
    <input type="button" value="Cancelar" class="hollow button float-right" onclick='cancelarfollow()'/>
    <h style="display: inline-block; margin-right:.5rem;">La fecha de este Seguimiento es <?=Time::now()?> </h>
</div>
    <br>
    <fieldset id="fldst">
    <div class="large-4 small-4 columns"> <?php
        /*echo "<br><h5>Aspectos Abordados </h5><br>";*/
        
        echo "<legend>Sociales </legend><br>"; // ------------------------------

        echo $this->Form->input('Followup.seguimiento_referencia_social', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                 ,
                'options'   => [
                    null             => '[No aplica]'   ,
                    'No'             => 'No'            ,
                    'No la Gestionó' => 'No la Gestionó',
                    'En proceso'     => 'En proceso'    ,
                    'Efectiva'       => 'Efectiva'      ,
                    'Rechazada'      => 'Rechazada'     ,
                ],
                'value'     => $seg->seguimiento_referencia_social ,
            ]
        );
        
        echo '<h> Apoyo Institucional <h><br>';
        echo $this->Form->input('Followup.apoyo_institucional', [
                'label'     =>  false                       ,
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'value'     => $seg->apoyo_institucional    ,
                'options'   => [
                    'Subsidio Economico'      => 'Subsidio Economico'     ,
                    'Vivienda'                => 'Vivienda'               ,
                    'Atención Especializada'  => 'Atención Especializada' ,
                    'OAPVD'                   => 'OAPVD'                  ,
                ],
            ]
        );
        
        echo "<br>";
        ?>

        <a class="hollow primary button" href="#openModal">Ver Redes de Apoyo</a> 
        
        <div id="openModal" class="modalDialog">
            <a href="#close" title="Close" class="close">X</a>
            <?php
                include 't3.ctp';
            ?>
        </div>
        <br><br>

        <?php
        
        echo $this->Form->input('Followup.apoyo_empleo', [
            'type'=>'checkbox',
            'value'     => $seg->apoyo_empleo ,
            ]); 
            
        echo $this->Form->input('Followup.situacion_riesgo', [
            'type'=>'checkbox',
            'value'     => $seg->situacion_riesgo ,
            ]);

        // *********************************************************************
        echo "<legend>Legales </legend><br>"; 
        
        echo $this->Form->input('Followup.seguimiento_referencia_legal', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    null                     => 'No aplica'             ,
                    'No la Gestionó'         => 'No la Gestionó'        ,
                    'No'                     => 'No'                    ,
                    'En proceso'             => 'En proceso'            ,
                    'Efectiva'               => 'Efectiva'              ,
                    'Rechazada*no viene'     => 'Rechazada*no viene'    ,
                    'value'     => $seg->seguimiento_referencia_legal ,
                ]
            ]
        );
        
        echo $this->Form->input('Followup.medidas_protec_vig', [
            'type'=>'checkbox'                          ,
            'label' => 'Medidas de protección vigentes' ,
            'value'     => $seg->medidas_protec_vig ,
        ]); 
        
        echo $this->Form->input('Followup.incump_medidas', [
                'type'      => 'select'                     ,
                'options'   => [
                    'No'                             => 'No'                        ,
                    'Sí: Incumplió y denunció'       => 'Sí: Incumplió y denunció'   ,
                    'Sí: Incumplió y no denunció'    => 'Sí: Incumplió y no denunció',
                    'value'     => $seg->incump_medidas ,
                ]
            ]
        );
        echo $this->Form->input('Followup.audiencia_pendiente' , ['type'=>'checkbox','value' => $seg->audiencia_pendiente]); 
        echo $this->Form->input('Followup.seguimientoOAPVD'    , ['type'=>'checkbox','value' => $seg->seguimientoOAPVD, 'label'=> 'Seguimiento OAPVD']); 
        
        echo "<br>";

    ?> 
    </div>
    
    <div class="large-4 small-4 columns"> <?php
        

        // *********************************************************************
        echo "<legend>Psicológicos </legend><br>";
        
        echo $this->Form->input('Followup.seguimiento_referencia_psicologico', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                 ,
                'options'   => [
                    null                        => '[No aplica]'           ,
                    'No la Gestionó'            => 'No la Gestionó'        ,
                    'No'                        => 'No'                    ,
                    'En proceso'                => 'En proceso'            ,
                    'Efectiva'                  => 'Efectiva'              ,
                    'Rechazada*no viene'        => 'Rechazada*no viene'    ,
                    'value'     => $seg->seguimiento_referencia_psicologico,
                ]
            ]
        );
        
        echo $this->Form->input('Followup.seguimiento_plan_seguridad', ['type'=>'checkbox','value' => $seg->seguimiento_plan_seguridad ,]); 
        
        echo $this->Form->input('Followup.seguimiento_kit', [
                'type'      => 'select'                     ,
                'options'   => [
                    null                =>  '[No aplica]'   ,
                    'En uso'            =>  'En uso'        ,
                    'No lo utiliza'     =>  'No lo utiliza' ,
                    'Lo devolvió'       =>  'Lo devolvió'   ,
                    'No'                =>  'No'            ,
                ],
                'value'     => $seg->seguimiento_kit        ,
            ]
        );
        echo "<br>";
        
        
        /*--------------------------------------------------------*/
        echo $this->Form->input('Followup.atencion_especializada', [
            'type'=>'checkbox', 
            'id'=>'atencion_especializada', 
            'value'     => $seg->atencion_especializada ,
        ]); 
        
        echo '<div id = \'dondeatencion\' >';
            echo $this->Form->input('Followup.lugar_atencion', [ 'label' => 'Lugar donde la recibe:','value'     => $seg->lugar_atencion , ] );
        echo '</div >';
        /*--------------------------------------------------------*/
        
        echo "<br>";
        echo $this->Form->input('Followup.enfrenta_violencia', [
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => [
                    'Fisica'        =>  'Fisica'        ,
                    'Psicológica'   =>  'Psicológica'   ,
                    'Patrimonial'   =>  'Patrimonial'   ,
                    'Sexual'        =>  'Sexual'        ,
                ],
                'value'     => $seg->enfrenta_violencia ,
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Followup.convive_agresor', ['type'=>'checkbox','value'     => $seg->convive_agresor ,]); 
        
        
    ?> </div>
    
    <div class="large-4 small-4 columns"> <?php
            // *********************************************************************
        echo "<legend> Hijos e Hijas </legend><br>";
        
        echo $this->Form->input('Followup.escolarizacion', [
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     => 'No aplica'     ,
                    'Si'            => 'Si'            , 
                    'No'            => 'No'            ,
                    'En proceso'    => 'En proceso'    ,  
                ],
                'value'     => $seg->escolarizacion ,
            ]
        );
        
        echo '<h>Atención Especializada<h>';
        echo $this->Form->input('Followup.hijos_atencion_especializada', [
                'label'     => false,
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => [
                    'Psicológica'       => 'Psicológica'       , 
                    'Médica'            => 'Médica'            ,
                    'Apoyo Escolar'     => 'Apoyo Escolar'     ,
                    'Enseñanza Especial'                 => 'Enseñanza Especial'                ,
                    'PANI'                               => 'PANI'                              ,
                    'OAVPD'                              => 'OAVPD'                             ,

                ],
                'value'     => $seg->hijos_atencion_especializada ,
            ]
        );
        
        echo '<hr>';
        echo $this->Form->input('Followup.hijos_situacion_riesgo', ['type'=>'checkbox','value'     => $seg->hijos_situacion_riesgo ,]); 
        echo $this->Form->input('Followup.hijos_seguimiento_plan_seguridad', ['type'=>'checkbox', 'value'     => $seg->hijos_seguimiento_plan_seguridad ,]);
    ?> </div>
</fieldset>
