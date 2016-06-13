
<!----------------------------------------------------------------------------->
<!--               SEGUIMIENTOS                                               ->
<!----------------------------------------------------------------------------->

    <fieldset>
<div style= 'width: 100%;border: 1px solid rgb(236, 236, 236);padding: 1rem; padding: .4rem 1rem;'>
    <?php
        use Cake\I18n\Time;
        echo '<h style=\'margin-right:1em;\'> '.$persona->nombre.' '.$persona->apellidos.'    '.'</h>';
        
        echo $this->Form->input('Followup.al_xtiempo_del_egreso', [
                'label'     => 'Seguimiento:'    ,
                'type'      => 'select'                     ,
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
        
        echo '<h style="display: inline-block; margin-right:.5rem;">La fecha de este Seguimiento es '.Time::now().'</h>';
        ?>
    <input type="submit" value="Guardar" class="hollow button float-right" onclick='submit'style='margin-left:1em;' />
    <input type="button" value="Cancelar" class="hollow button float-right" onclick='cancelarfollow()'/>
</div>
    <br>
    <div class="large-4 small-4 columns"> <?php
        /*echo "<br><h5>Aspectos Abordados </h5><br>";*/
        
        echo "<legend>Sociales </legend><br>"; // ------------------------------

        echo $this->Form->input('Followup.seguimiento_referencia_social', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    null             => '[No aplica]'   ,
                    'No'             => 'No'            ,
                    'No la Gestionó' => 'No la Gestionó',
                    'En proceso'     => 'En proceso'    ,
                    'Efectiva'       => 'Efectiva'      ,
                    'Rechazada'      => 'Rechazada'     ,
                ]
            ]
        );
        
        echo '<h> Apoyo Institucional <h><br>';
        echo $this->Form->input('Followup.apoyo_institucional', [
                'label'     =>  false              ,
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'       ,
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
            'type'=>'checkbox','checked'=>false ]); 
            
        echo $this->Form->input('Followup.situacion_riesgo', [
            'type'=>'checkbox','checked'=>false ]);

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
                ]
            ]
        );
        
        echo $this->Form->input('Followup.medidas_protec_vig', [
            'type'=>'checkbox'                          ,
            'label' => 'Medidas de protección vigentes' ,
            'checked'=>false
        ]); 
        
        echo $this->Form->input('Followup.incump_medidas', [
                'type'      => 'select'                     ,
                'options'   => [
                    'No'                             => 'No'                        ,
                    'Sí: Incumplió y denunció'       => 'Sí: Incumplió y denunció'   ,
                    'Sí: Incumplió y no denunció'    => 'Sí: Incumplió y no denunció',
                ]
            ]
        );
        echo $this->Form->input('Followup.audiencia_pendiente' , ['type'=>'checkbox', 'checked'=>false]); 
        echo $this->Form->input('Followup.seguimientoOAPVD'    , ['type'=>'checkbox', 'checked'=>false, 'label'=> 'Seguimiento OAPVD']); 
        
        echo "<br>";

    ?> 
    </div>
    
    <div class="large-4 small-4 columns"> <?php
        

        // *********************************************************************
        echo "<legend>Psicológicos </legend><br>";
        
        echo $this->Form->input('Followup.seguimiento_referencia_psicologico', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    null                        => '[No aplica]'           ,
                    'No la Gestionó'            => 'No la Gestionó'        ,
                    'No'                        => 'No'                    ,
                    'En proceso'                => 'En proceso'            ,
                    'Efectiva'                  => 'Efectiva'              ,
                    'Rechazada*no viene'        => 'Rechazada*no viene'    ,
                ]
            ]
        );
        
        echo $this->Form->input('Followup.seguimiento_plan_seguridad', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo $this->Form->input('Followup.seguimiento_kit', [
                'type'      => 'select'                     ,
                'options'   => [
                    null                =>  '[No aplica]'     ,
                    'En uso'            =>  'En uso'        ,
                    'No lo utiliza'     =>  'No lo utiliza' ,
                    'Lo devolvió'       =>  'Lo devolvió'   ,
                    'No'                =>  'No'            ,
                ]
            ]
        );
        echo "<br>";
        
        
        /*--------------------------------------------------------*/
        echo $this->Form->input('Followup.atencion_especializada', [
            'type'=>'checkbox', 
            'id'=>'atencion_especializada', 
            'checked'=>false
        ]); 
        
        echo '<div id = \'dondeatencion\' >';
            echo $this->Form->input('Followup.lugar_atencion', [ 'label' => 'Lugar donde la recibe:' ] );
        echo '</div >';
        /*--------------------------------------------------------*/
        
        echo "<br>";
        echo $this->Form->input('Followup.enfrenta_violencia', [
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => [
                    'Fisica', 
                    'Psicológica',
                    'Patrimonial', 
                    'Sexual'
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Followup.convive_agresor', ['type'=>'checkbox', 'checked'=>false]); 
        
        
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
                ]
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
                    'PANI'                               => 'PANI'                              ,
                    'OAVPD'                              => 'OAVPD'                             ,
                    'Enseñanza Especial'                 => 'Enseñanza Especial'                ,
                    'Seguimiento al plan de Seguridad'   => 'Seguimiento al plan de Seguridad'  , 
                    'Situación de riesgo'                => 'Situación de riesgo'               ,
                ]
            ]
        );
        /*
        echo '<hr>';
        echo $this->Form->input('PANI ????', ['type'=>'checkbox', 'checked'=>false]);
        echo $this->Form->input('OAPVD ????', ['type'=>'checkbox', 'checked'=>false]);
        echo $this->Form->input('Enseñanza especial ????', ['type'=>'checkbox', 'checked'=>false]);
        echo $this->Form->input('Seguimiento al plan de seguridad ????', ['type'=>'checkbox', 'checked'=>false]);
        echo $this->Form->input('Situación de Riesgo ????', ['type'=>'checkbox', 'checked'=>false]); 
        */
    ?> </div>
</fieldset>
