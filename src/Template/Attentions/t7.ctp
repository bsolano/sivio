
<!----------------------------------------------------------------------------->
<!--               SEGUIMIENTOS                                               ->
<!----------------------------------------------------------------------------->


    <fieldset>
        <hr>
    <div class="large-4 small-4 columns"> <?php
        use Cake\I18n\Time;
        echo '<h6>La fecha de este Seguimiento es '.Time::now().'</h6><br>';
        
        echo $this->Form->input('Followup.al_xtiempo_del_egreso', [
                'label'     => 'Seguimiento:'    ,
                'type'      => 'select'                     ,
                'options'   => ['Aceptado???Preguntar', 'No Aplica', 'Rechaza_Seguimiento']
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
                ]
            ]
        );
        
        echo "<br><h5>Aspectos Abordados </h5><br>";
        
        echo "<legend>Sociales </legend><br>"; // ------------------------------

        echo $this->Form->input('Followup.seguimiento_referencia_social: (Efect/rech es parte-de ??????)', [
                'label' => 'Seguimiento a la Referencia',
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    '**************',
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Rechazada'     ,
                ]
            ]
        );
        
        echo "<br>";
        echo $this->Form->input('RecursosApoyo', ['type'=>'checkbox','id'=>'RecursosApoyo','checked'=>false]);echo "<br>";
        ?>  <div class="row" id= "RecursosAp">  <?php
            echo $this->Form->button('Primaria'  ,['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button']);echo "<br>";
            echo $this->Form->button('Secundaria',['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button']);echo "<br>";
        ?> </div> <?php     /*  fin div  ******************************/
        
        echo $this->Form->input('Followup.apoyo_institucional???', [
                'type'      => 'select'                     ,
                'options'   => [
                    'Subsidio Economico'    ,
                    'Vivienda'              ,
                    'Atención Especializada',
                    'OAPVD'                 ,
                    '**********************',
                    'Empleo'                ,
                    'Situación de Riego'
                ]
            ]
        );


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
        
        echo "<br>";
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
        

        // *********************************************************************
        echo "<legend>Psicológicos </legend><br>";
        
        
        
        echo "<br>"; echo $this->Form->input('Followup.seguimiento_plan_seguridad', ['type'=>'checkbox', 'checked'=>false]); 
        
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
        
        echo "<br>"; echo $this->Form->input('Followup.atencion_especializada', ['type'=>'checkbox', 'checked'=>false]); 
        echo "<br>"; echo $this->Form->input('Donde');
        
        echo $this->Form->input('Enfrenta Violencia ????????????????????????', [
                'required'  => 'required'                   ,
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
                'required'  => 'required'                   ,
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
                'required'  => 'required'                   ,
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
