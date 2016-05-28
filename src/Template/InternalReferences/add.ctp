
<div class="row">

    
    <?= $this->Form->create($internalReference) ?>
    <fieldset>
        <legend><?= __('Crear Referencia Interna') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => true]);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('telefono');
            echo $this->Form->input('oficina');
            echo $this->Form->input('location_id', ['options' => $locations, 'empty' => true, 'onclick' => 'loadResults()', 'required' => true]);
            echo $this->Form->input('group', ['options' => $groups, 'empty' => true, 'required' => true]);
        ?>
        <div id="results"></div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>


</row>
<script>
    
function loadResults(){

       jQuery.ajax({
             type: "get",  // Request method: post, get
             url: "/internalReferences/groupsSearch.ajax?keyword=" + document.getElementById("location-id").options[document.getElementById("location-id").selectedIndex].text, // URL to request
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

</script>
