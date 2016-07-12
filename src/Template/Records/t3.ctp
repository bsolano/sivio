<fieldset>
    <h3><?= __('Historial de Atenciones') ?></h3>
    <div>
       <?php
            // $p = $atenciones->toArray();
            foreach($atenciones as $a){
                echo "<legend> Atención </legend><br>"; //Encabezado
                
                echo $this->Form->input('Fecha de atención'         ,['value'=> $a['created']           ,'readonly' => 'readonly']); 
                echo $this->Form->input('Tipo'                      ,['value'=> $a['tipo']              ,'readonly' => 'readonly']); 
                echo $this->Form->input('Datos adicionales'         ,['value'=> $a['datos_adicionales'] ,'readonly' => 'readonly']); 
                echo $this->Form->input('Última persona en editar'  ,['value'=> $a['user']['username' ] ,'readonly' => 'readonly']); 
            }
        ?>  
    </div>
</fieldset>