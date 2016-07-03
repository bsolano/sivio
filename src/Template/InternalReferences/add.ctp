
<div class="row">
<div class="large-6 medium-6 columns">
    
    
    <?= $this->Form->create($internalReference, ['id' => 'id']) ?>
    <fieldset>
        <legend><?= __('Crear Referencia Interna') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => false, 'label' => 'Usuaria']);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => false, 'label' => 'Profesional que hace la referencia']);
            echo $this->Form->input('location_id', [ 'templates' => ['radio' => '<input type="radio" onclick="loadResults()" name="{{name}}" value="{{value}}"{{attrs}}>'], 'options' => $locations,'type'=>'radio', 'required' => true, 'label' => 'Instancia o ubicación donde desea hacer la referencia', 'onclick' => 'loadResults()']);
            echo $this->Form->input('persona_coordina', ['label' => 'Persona con quien se coordina']);
            echo $this->Form->input('telefono');
            echo $this->Form->input('consultation_id', ['type' => 'text', 'value' => $consultation_id, 'style' => 'display:none', 'label' => '']);
            ?>
            <div id="acceso" style="display:none;">
                <?php
                 echo $this->Form->input('se_deniega_acceso', [ 'type'=>'radio', 'options' => $accesoDenegado, 'empty' => false, 'label' => 'Se deniega el acceso', 'style' => 'display:none']);
                ?>
            </div>
        <div id="results"></div>
    </fieldset>
    <?= $this->Form->submit('Generar referencia interna',['class'=>'button']) ?>
    <?= $this->Form->end() ?>

</div>
</row>
<script>

/*
    Muestra las opciones de rechazo de la referencia en caso de que sea un albergue. 
*/
function loadResults(){
    
    var val;
    // get list of radio buttons with specified name
    var radios = document.getElementById('id').elements['location_id'];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].parentElement.textContent; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    
    if(val.includes("Albergue")){
         
        document.getElementById("acceso").style = "display:/"/";";
    }
    else{
        document.getElementById("acceso").style = "display:none;";
    }
}    

</script>
