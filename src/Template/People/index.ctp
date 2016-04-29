<div class="row">
    <div class="people form large-12 medium-10 columns content">


                <legend>
                    <?= __('Buscar') ?>
                </legend>
                <?php
                echo $this->Form->input('keyword', ['placeholder' => 'Digite el nombre o el número de cédula', 'label' => '']);
                //'required' => true
                ?>

            <?= $this->Form->button(__('Buscar'), ['onclick' => 'loadResults()', 'type' => 'button']) ?>


            <div id="results">Por favor ingrese su criterio de búsqueda.</div>
    </div>
    
</div>

<script>

function loadResults(){

       jQuery.ajax({
             type: "get",  // Request method: post, get
             url: "/people/recordsSearch.ajax?keyword=" + document.getElementById("keyword").value, // URL to request
             //data: data,  // post data
             success: function(response) {
                                  document.getElementById("results").innerHTML = response;
                           },
                           error:function (XMLHttpRequest, textStatus, errorThrown) {
                                   document.getElementById("results").innerHTML = 'No es posible obtener un respuesta, intente de nuevo.';
                           }
          });
          return false;
}
</script>

