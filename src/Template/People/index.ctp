<div class="row">
    <div class="people form large-12 medium-10 columns content">
        <!-- Se tiene la opción de siempre agregar alguien nueva al sistema. -->
        <input type="button" value="Crear Usuaria" class="primary button float-right" onclick='crearUsuaria()'/>
        
        <h3>Expedientes</h3>

        <legend>
            Filtre expedientes
        </legend>
        <?php
            echo $this->Form->input('keyword', ['placeholder' => 'Digite una parte del nombre o de la identificación', 'label' => '',]);
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
    function crearUsuaria() {
        if(document.getElementById("keyword").value == ""){
            if(confirm("¿Está segura?\nNo ha realizado una busqueda")) {
                document.location = "/people/add";
            }
        } else {
            document.location = "/people/add";
        }
    }
    
    // Aquí muestra un solo boton a oficinisita, es codigo quemado, preguntando si el grupo es 3 = recepcionista delegacion de la mujer.
    function usuariaSelect() {
        //var user_name = "<?php echo $group_name ?>";
        if( "<?php echo $group_name ?>" == 'RecepcionistaDelegacionDeLaMujer' ) {
            document.getElementById("bnt_Atencion").style.display = "none";
            document.getElementById("bnt_Consulta").style.display = "block";
        } else {
            document.getElementById("bnt_Atencion").style.display = "block";
            document.getElementById("bnt_Consulta").style.display = "block";
        }
    }
    
    function esConsulta() {
        document.location = "/consultations/add/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
    
    function esAtencion() {
        document.location = "/people/atencion/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
</script>