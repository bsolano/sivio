
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
        
        echo $this->Form->input('Egreso .fecha',['type'=>'date', 'required'=>'required' ]); 
        
        echo $this->Form->input('????????????????????????', [
                'required'  => 'required'                   ,
                'label'     => 'Medio de Comunicación: '    ,
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

        echo $this->Form->input('Seguimiento a la Referencia: (Efect/rech es parte-de ??????)', [
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
        
        echo $this->Form->input('????????????????????????', [
                'required'  => 'required'                   ,
                'label'     => 'Recursos de Apoyo'          ,
                'type'      => 'select'                     ,
                'options'   => [
                    'No tiene'      ,
                    'Primaria'      ,
                    'Secundaria'    
                ]
            ]
        );
        
        echo 'nombre tel <br>';echo 'nombre tel <br>';echo 'nombre tel <br>';echo '[TODO]';
    
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
        
        
        echo "<legend>Legales </legend><br>";
        
        echo $this->Form->input('Seguimiento a la Referencia ????????????????????????', [
                'required'  => 'required'                   ,
                'type'      => 'select'                     ,
                'options'   => [
                    'No aplica'     ,
                    'No la Gestionó',
                    'No'            ,
                    'En proceso'    ,
                    'Efectiva'      ,
                    'Medidas de Protección Vigentes'     ,
                ]
            ]
        );
        
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
        
        echo "<br>"; echo $this->Form->input('Audiencia pendiente ????', ['type'=>'checkbox','id'=>'deseaAtencionn','checked'=>false]); 
        
        echo "<br>"; echo $this->Form->input('En seguimiento con OAPVD ????', ['type'=>'checkbox','id'=>'deseaAtencionn','checked'=>false]); 
        
        
    ?> </div>
</fieldset>