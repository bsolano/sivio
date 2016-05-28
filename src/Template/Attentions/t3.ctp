<fieldset>
    <div id="redesApoyo"><?php
    
        $opciones = ['Primaria' => 'Primaria','Secundaria' => 'Secundaria','Institucional'=>'Institucional'];
        
        echo "<legend>Red de apoyo número 1</legend><br>";
        echo $this->Form->input('PeopleAdvocacy[].tipo',['type'=>'select','label'=>'Tipo de red de apoyo','options'=>$opciones]);
        echo $this->Form->input('Advocacy[].nombre',['label'=>'Nombre de la persona o instutición']);
        echo $this->Form->input('Advocacy[].telefono',['label'=>'Teléfono']);
    ?></div>
        <div><?php
        echo $this->Form->button('Agregar redes',['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button'])
        
    ?></div>
</fieldset>
