<fieldset>
    <div id="redesApoyo"><?php
    
        $opciones = ['Primaria' => 'Primaria','Secundaria' => 'Secundaria','Institucional'=>'Institucional'];
        $numAdv=0;
        foreach($advo as $a){
            echo "<legend>Red de apoyo</legend><br>";
            $numAdv++;
            echo $this->Form->input('PeopleAdvocacy.'.$numAdv.'.tipo',['type'=>'select','label'=>'Tipo de red de apoyo','options'=>$opciones,'value'=>$a['tipo']]);
            echo $this->Form->input('PeopleAdvocacy.'.$numAdv.'.nombre',['label'=>'Nombre de la persona o instutición','value'=>$a['nombre']]);
            echo $this->Form->input('PeopleAdvocacy.'.$numAdv.'.telefono',['label'=>'Teléfono','value'=>$a['telefono']]);
            echo "&nbsp";
            
        }    
        
    ?></div>
        <div><?php
        echo $this->Form->button('Agregar redes',['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'hollow secondary button'])
        
    ?></div>
</fieldset>
<?php 
    function incrementar(){
        global $numAdv;
        $numAdv++;
    }
?>