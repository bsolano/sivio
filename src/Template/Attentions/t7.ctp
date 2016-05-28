
<!----------------------------------------------------------------------------->
<!--               SEGUIMIENTOS                                               ->
<!----------------------------------------------------------------------------->

<fieldset>
    <div class="large-4 small-4 columns"> <?php
            /*   VARIABLES                                                    */
            
        echo $this->Form->input('????????????????????????', [
                'required'  => 'required'                   ,
                'label'     => 'A la semana del egreso:'    ,
                'type'      => 'select'                     ,
                'multiple'  => 'checkbox'                   ,
                'options'   => ['Rechaza_Seguimiento', 'N/A']
            ]
        );
        
        echo $this->Form->input('Followup.created',['type'=>'date', 'required'=>'required' ]); 
        
        echo $this->Form->input('Followup.medio_comunicacion', [
                'required'  => 'required'                   ,
                //'label'     => 'Medio de Comunicación: '    ,
                'type'      => 'select'                     ,
                'options'   => [
                    'Visita Domiciliar', 'Via Telefónica',
                    'No fue posible localizarla', 
                    'Interinstitucional',
                    'Visita Domiciliar no localizable'
                ]
            ]
        );
        
        echo "<br><h5>Aspectos Abordados </h5><br>";
        
        echo "<legend>Sociales </legend><br>";

        echo $this->Form->input('Followup.seguimiento_referencia: (Efect/rech es parte-de ??????)', [
                'required'  => 'required'                   ,
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
        
        echo "<br>";
        echo $this->Form->input('RecursosApoyo', ['type'=>'checkbox','id'=>'RecursosApoyo','checked'=>false]);echo "<br>";
        ?>  <div class="row" id= "RecursosAp">  <?php
            echo $this->Form->button('Primaria'  ,['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button']);echo "<br>";
            echo $this->Form->button('Secundaria',['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button']);echo "<br>";
        ?> </div> <?php     /*  fin div  ******************************/
        
        echo $this->Form->input('Apoyo Institucional ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'Subsidio Economico'    ,
                    'Vivienda'              ,
                    'Atención Especializada',
                    'OAPVD'                 ,
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Empleo ????', ['type'=>'checkbox','id'=>'deseaAtencionn','checked'=>false]);
        
        echo "<br>"; echo $this->Form->input('Situación de riesgo ????', ['type'=>'checkbox','id'=>'deseaAtencionn','checked'=>false]);

    ?> </div>
    
    <div class="large-4 small-4 columns"> <?php
        
        
        echo "<legend>Legales </legend><br>"; /*              LEGALES          */
        
        echo $this->Form->input('Seguimiento a la Referencia ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    'En proceso'    ,
                    'Efectiva'      
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Medidas de Protección Vigentes ????', ['type'=>'checkbox','id'=>'deseaAtencionn','checked'=>false]); 
        
        echo $this->Form->input('Incumplimiento de Medidas ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'No'            ,
                    'Sí'            ,
                    'Incumplió y denunció',
                    'Incumplió y no denunció',
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Audiencia pendiente ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('En seguimiento con OAPVD ????', ['type'=>'checkbox', 'checked'=>false]); 
        

        // *********************************************************************
        echo "<legend>Psicológicos </legend><br>";
        
        
        
        echo "<br>"; echo $this->Form->input('Seguimiento al Plan de Seguridad ????', ['type'=>'checkbox', 'checked'=>false]); 
        
        echo $this->Form->input('Seguimiento al Kit ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'En uso'        ,
                    'No lo utiliza' ,
                    'Lo devolvió'   ,
                    'No'            ,
                    'No aplica'
                ]
            ]
        );
        
        echo $this->Form->input('Seguimiento a la Referencia ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'No'            ,
                    'No aplica'     ,
                    'No la Gestonó' ,
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Rechazada'
                ]
            ]
        );
        
        echo "<br>"; echo $this->Form->input('Recibe Atención Especializada ????', ['type'=>'checkbox', 'checked'=>false]); 
        echo "<br>"; echo $this->Form->input('Donde ????');
        
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