<div class="row">
    <div class="people form large-12 medium-10 columns content">
        <!-- Se tiene la opción de siempre agregar alguien nueva al sistema. -->
        <input type="button" value="Crear Usuaria" class="primary button float-right" onclick='crearUsuaria()'/>
        
        <h3>Expedientes</h3>

        <legend>
            Filtre expedientes
        </legend>
        <?php
            echo $this->Form->input('keyword', [
                    'placeholder' => 'Digite una parte del nombre o de la identificación', 'label' => '', 'onkeydown' => "pressed(event)",
                    'style' => 'background:url(img/magglass.svg) no-repeat scroll right center / 1.3rem 1.3rem content-box;'
                ]
            );
        ?>
        <!-- icon by Creative Stall --> 
        <?= $this->Form->button('Buscar expediente', ['onclick' => 'loadResults()', 'type' => 'button', 'id'=> 'btnBExp', 'class' => 'button secondary']) ?>
        <div id="results">Por favor ingrese su criterio de búsqueda.</div>
    </div>
    
</div>

<script>
    
    /*
     * Permite realizar busquedas con solo presionar [Enter] 
     * -Jason
     */
    function pressed(e) {
        if ( (window.event ? event.keyCode : e.which) == 13) { // [Enter]
            loadResults();
        }
    }
    
    
    /* Evita que se realicen busquedas vacias (porque se 'trae' toda la base de datos)
     * y evita que se re-haga una busqueda que ya fue realizada 
     * -Jason
     */
    var lastKwd;
    function loadResults(){
        var keywd = document.getElementById("keyword").value;
        var rslts = document.getElementById("results")      ;
        
        if ( lastKwd == keywd ) { return false; }
        if ( keywd == ""      ) {
            rslts.innerHTML = 'Ingrese un criterio de busqueda';
            return false;
        }
        lastKwd = keywd;
        
        // animacion mientras se espera la respuesta del query
        // solo añade una clase asociada a un css que contiene la animación -Jason
        rslts.innerHTML = "\
            <div class=\"cssload-container\">\
    	    <div class=\"cssload-whirlpool\"></div>\
            </div>\ "
        ;
        
        // Query    -Jose Pablo Ruiz    
        jQuery.ajax({
            type: "get",  // Request method: post, get
            url: "/people/recordsSearch.ajax?keyword=" + keywd, // URL to request
            //data: data,  // post data
            success: function(response) {
                rslts.innerHTML = response;
            },
            error:function (XMLHttpRequest, textStatus, errorThrown) {
                rslts.innerHTML = 'No es posible obtener un respuesta, intente de nuevo.';
            }
        });
    
        return false;
    }

    function crearUsuaria() {
        
        if(document.getElementById("keyword").value == ""){
            swal({
              title:"¿Está segura?",
              text: "No ha realizado una busqueda",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Sí",
              cancelButtonText: "No",
              closeOnConfirm: false     ,
              showLoaderOnConfirm: true
            },
            
            // si la respuesta es 'si'
            function(){
              document.location = "/people/add";
            });
        } 
    }
    
    // Aquí muestra un solo boton a oficinisita, es codigo quemado, preguntando si el grupo es 3 = recepcionista delegacion de la mujer.
    function usuariaSelect() {
        //var user_name = "<?php echo $group_name ?>";
        if( "<?php echo $group_name ?>" == 'RecepcionistaDelegacionDeLaMujer' ) {
            document.getElementById("bnt_Atencion").style.display = "none";
            document.getElementById("bnt_Consulta").style.display = "block";
            document.getElementById("bnt_Expediente").style.display = "block";
        } else {
            document.getElementById("bnt_Atencion").style.display = "block";
            document.getElementById("bnt_Consulta").style.display = "block";
            document.getElementById("bnt_Expediente").style.display = "block";
        }
    }
    
    function esConsulta() {
        document.location = "/consultations/add/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
    
    function esAtencion() {
        document.location = "/attentions/add/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
    
    function expediente() {
        document.location = "/records/index/" + document.querySelector('input[name = "usuaria"]:checked').value;
    }
</script>