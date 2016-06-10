
<!----------------------------------------------------------------------------->
<!--               SEGUIMIENTOS                                               ->
<!----------------------------------------------------------------------------->

    <fieldset><hr>
<div style= 'width: 100%;border: 1px solid rgb(236, 236, 236);padding: 1rem; padding: .4rem 1rem;'>
    <?php
        use Cake\I18n\Time;
        
        
        echo $this->Form->input('Followup.al_xtiempo_del_egreso', [
                'label'     => 'Seguimiento:'    ,
                'type'      => 'select'                     ,
                'options'   => ['No Aplica', 'Aceptado', 'Rechaza_Seguimiento'],
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
                    'Visita Domiciliar',
                    'Via Telefónica',
                    'No fue posible localizarla', 
                    'Interinstitucional',
                    'Visita Domiciliar no localizable'
                ],
                'style'     => 'display:inline-table; width: auto; margin:0; margin-right:1rem; ',
                'templates' => [
                    'inputContainer' => '<div style="display: inline-block;" >{{content}}</div>'
                ]
            ]
        );
        
        echo '<h6 style="display: inline-block; margin-right:.5rem;">La fecha de este Seguimiento es '.Time::now().'</h6>';
        ?>
    <input style="" type="submit" value="Guardar" class="button float-right" onclick='submit'/>
</div>
    <div class="large-4 small-4 columns"> <?php
        
        echo "<br><h5>Aspectos Abordados </h5><br>";
        
        echo "<legend>Sociales </legend><br>"; // ------------------------------

        echo $this->Form->input('Followup.seguimiento_referencia_social: (Efect/rech es parte-de ??????)', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Rechazada'     ,
                ]
            ]
        );
        
        echo "<br><hr>";
        echo $this->Form->input('RecursosApoyo', [
            'type'=>'checkbox','id'=>'RecursosApoyo','checked'=>false
        ]);
        ?>
        <div class="row" id= "RecursosAp">  <?php
            include 't3.ctp';
        ?> </div> <?php     /*  fin div  ******************************/
        echo "<hr>";
        
        
        
        echo $this->Form->input('Followup.apoyo_institucional???', [
                'type'      => 'select'                     ,
                'options'   => [
                    'Subsidio Economico'    ,
                    'Vivienda'              ,
                    'Atención Especializada',
                    'OAPVD'                 
                ]
            ]
        );
        echo "<br>";
        echo $this->Form->input('Empleo', [
            'type'=>'checkbox','checked'=>false ]); 
            
        echo $this->Form->input('Situación de Riego', [
            'type'=>'checkbox','checked'=>false ]);


    ?> </div>
    
    <div class="large-4 small-4 columns"> <?php
        
        // *********************************************************************
        echo "<legend>Legales </legend><br>"; 
        
        echo $this->Form->input('Followup.seguimiento_referencia_legal', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Rechazada*no viene'     ,
                ]
            ]
        );
        
        echo $this->Form->input('Followup.medidas_protec_vig', 
            ['type'=>'checkbox',
            'label' => 'Medidas de protección vigentes',
            'checked'=>false]); 
        
        echo $this->Form->input('Followup.incump_medidas', [
                'type'      => 'select'                     ,
                'options'   => [
                    'No'            ,
                    'Sí'            ,
                    'Incumplió y denunció',
                    'Incumplió y no denunció',
                ]
            ]
        );
        echo $this->Form->input('Followup.audiencia_pendiente' , ['type'=>'checkbox', 'checked'=>false]); 
        echo $this->Form->input('Followup.seguimientoOAPVD'    , ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>";
        // *********************************************************************
        echo "<legend>Psicológicos </legend><br>";
        
        
        echo $this->Form->input('Followup.seguimiento_plan_seguridad', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo $this->Form->input('Followup.seguimiento_kit', [
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'En uso'        ,
                    'No lo utiliza' ,
                    'Lo devolvió'   ,
                    'No'            
                ]
            ]
        );
        echo $this->Form->input('Followup.seguimiento_referencia_psicologico', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Rechazada*no viene'     ,
                ]
            ]
        );
        
        echo "<br><hr>";
        echo $this->Form->input('Followup.atencion_especializada', ['type'=>'checkbox', 'checked'=>false]); 
        echo $this->Form->input('Donde');
        echo "<hr><br>";
        
        echo $this->Form->input('Enfrenta Violencia ????????????????????????', [
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
        
        echo "<br>"; echo $this->Form->input('Convive con la persona agresora ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        
    ?> </div>
    
    <div class="large-4 small-4 columns"> <?php
            // *********************************************************************
        echo "<legend> Hijos </legend><br>";
        
        echo $this->Form->input('Escolarización ????????????????????????', [
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => [
                    'Si', 
                    'No',
                    'En proceso', 
                    'No aplica'
                ]
            ]
        );
        
        echo $this->Form->input('Recibe Atención Especializada ????????????????????????', [
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => [
                    'Psicológica', 
                    'Médica',
                    'Apoyo Escolar'
                    
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('PANI ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('OAPVD ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('Enseñanza especial ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('Seguimiento al plan de seguridad ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('Situación de Riesgo ????', ['type'=>'checkbox', 'checked'=>false]); 
    ?> </div>
</fieldset>
