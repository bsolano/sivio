<fieldset>
    <div id="redesApoyo"><?php
    
        $opciones = ['Primaria','Secundaria','Institucional'];
        echo "<legend>Red de apoyo número 1</legend><br>";
        echo $this->Form->input('PeopleAdvocacy.tipo',['type'=>'select','label'=>'Tipo de red de apoyo','options'=>$opciones]);
        echo $this->Form->input('Advocacy.nombre',['label'=>'Nombre de la persona o instutición']);
        echo $this->Form->input('Advocacy.telefono',['label'=>'Teléfono']);
    ?></div>
        <div><?php
        echo $this->Form->button('Agregar redes',['type'=>'button','onClick'=>'addInput(\'redesApoyo\');','class' =>'secondary button'])
        
    ?></div>
</fieldset>
<script type="text/javascript">
    
    var counter = 1;
    
    function addInput(divName){
         if (counter++ < 15) {
             var legend = "<legend> Red de apoyo número "+counter+"</legend><br>";
              var newdiv = document.createElement('div');
              newdiv.innerHTML = legend+
              '<?php
                    echo $this->Form->input('PeopleAdvocacy.tipo',['type'=>'select','label'=>'Tipo de red de apoyo','options'=>$opciones]);
                    echo $this->Form->input('Advocacy.nombre',['label'=>'Nombre de la persona o instutición']);
                    echo $this->Form->input('Advocacy.telefono',['label'=>'Teléfono']); 
              ?>';
              document.getElementById(divName).appendChild(newdiv);
         }
    }
</script>   