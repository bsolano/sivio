<div class="row">
    <div class="people form large-12 medium-10 columns content">
        <h3>Expedientes</h3>
        <legend>
            Filtre expedientes
        </legend>
        <?php
            echo $this->Form->input('keyword', ['placeholder' => 'Digite una parte del nombre o de la identificación', 'label' => '']);
        ?>
        <?= $this->Form->button('Buscar expediente', ['onclick' => 'loadResults()', 'type' => 'button', 'class' => 'button secondary']) ?>
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
<script type="text/javascript">
    function esConsulta() {
        document.location = "/consultations/add/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
    
    function esAtencion() {
        document.location = "/people/atencion/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
</script>