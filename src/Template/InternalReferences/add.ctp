
<div class="row">
<div class="large-6 medium-6 columns">
    
    <?= $this->Form->create($internalReference, ['id' => 'id']) ?>
    <fieldset>
        <legend><?= __('Crear Referencia Interna') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => false, 'label' => 'Usuaria']);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => false, 'label' => 'Profesional que hace la referencia']);
            echo $this->Form->input('location_id', [ 'templates' => ['radio' => '<input type="radio" onclick="loadResults()" name="{{name}}" value="{{value}}"{{attrs}}>'], 'options' => $locations,'type'=>'radio', 'required' => true, 'label' => 'Instancia o ubicación donde desea hacer la referencia', 'onclick' => 'loadResults()']);
            echo $this->Form->input('person_name', ['label' => 'Persona con quien se coordina']);
            echo $this->Form->input('telefono');
            ?>
            <div id="acceso" style="display:none;">
                <?php
                 echo $this->Form->input('accesoDenegado', [ 'type'=>'radio', 'options' => $accesoDenegado, 'empty' => false, 'label' => 'Se deniega el acceso', 'style' => 'display:none']);
                 //echo $this->Form->input('group', ['options' => $groups, 'empty' => true, 'required' => true]);
                ?>
            </div>
        <div id="results"></div>
    </fieldset>
    <?= $this->Form->submit('Generar referencia interna',['class'=>'button']) ?>
    <?= $this->Form->end() ?>

</div>
</row>
<script>
    
function loadResults(){
    
    /*
    if(!document.getElementById("location-id").options[document.getElementById("location-id").selectedIndex].text.includes("Albergue")){
        document.getElementById("location-id").disabled = false;
       jQuery.ajax({
             type: "get",  // Request method: post, get
             url: "/internalReferences/groupsSearch.ajax?keyword=" + document.getElementById("location-id").options[document.getElementById("location-id").selectedIndex].value, // URL to request
             //data: data,  // post data
             success: function(response) {
                                  var group = document.getElementById("group-id");
                                  if (group){
                                      group.remove()
                                  }
                                  var group = document.getElementById("group");
                                  if (group){
                                      group.remove()
                                  }
                                  document.getElementById("results").innerHTML = response;
                                  
                           },
                           error:function (XMLHttpRequest, textStatus, errorThrown) {
                                   document.getElementById("results").innerHTML = 'Error al seleccionar la ubicacion.';
                           }
          });
          return false;
    }
    else{
        var group = document.getElementById("group-id");
        if (group){
            group.disabled = true;
        }
        var group = document.getElementById("group");
        if (group){
            group.disabled = true;
        }
    }
    */
    
   
    
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
    
    //document.getElementById("oficina").value = val;
    
    if(val.includes("Albergue")){
         /*var group = document.getElementById("oficina");
        if (group){
            group.disabled = true;
        }*/
        document.getElementById("acceso").style = "display:/"/";";
    }
    else{
        document.getElementById("acceso").style = "display:none;";
    }
}    

</script>
