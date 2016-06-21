




<?= $this->Form->create(); ?>
<div class="attentions form large-9 medium-8 columns content" style="width: 100%;" >
    <section class="wrapper">
        <?php include 't7.ctp';?>
    </section>
</div>
<?= $this->Form->end(); ?>



<script type="text/javascript" >
    if (document.getElementById("acepta_seguimiento").selectedIndex != 1) { $('#fldst').hide(); }
    
    $(window).load( function () {
	    
	    hideOrShow( $('#atencion_especializada') , $('#dondeatencion') );/*legal*/
	})
	
	$('#atencion_especializada'      ).change (function () { hideOrShow( $(this), $('#dondeatencion' ) );  });
	
    function hideOrShow ($checkbname, $containerName ) {
        if ( $checkbname.is(":checked")) {
            $containerName.fadeIn();
            return;
        }
        $containerName.fadeOut();
        return;
    }
    
    document.getElementById("acepta_seguimiento").onchange = function(){
      if (this.selectedIndex != 1) {
          $('#fldst').fadeOut();
      } else { $('#fldst').fadeIn(); }
      
    }
    
    function cancelarfollow() {
        swal({
          title: "Cancelar",
          text: "¿Está Segura?",
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
          document.location = "/attentions/";
        });
    }
        
	
    var numAd = 2;
        function addInput(divName) {
            if (numAd++ < 30) {
                var newdiv = document.createElement('div');
                newdiv.innerHTML = 
                
                    "<legend> Red de apoyo</legend><br>"+
                      
                    //Input de seleccion de red de apoyo
                    "<div class=\"input select\">"+
                        "<label for=\"peopleadvocacy-"+numAd+"-tipo\">Tipo de red de apoyo</label>"+
                        "<select name=\"PeopleAdvocacy["+numAd+"][tipo]\" id=\"peopleadvocacy-"+numAd+"-tipo\">"+
                            "<option value=\"Primaria\">Primaria</option>"+
                            "<option value=\"Secundaria\">Secundaria</option>"+
                            "<option value=\"Institucional\">Institucional</option>"+
                        "</select>"+
                    "</div>"+
                    
                    //Input del nombre de la persona o institucion  
                    "<div class=\"input text\">"+
                        "<label for=\"advocacy-"+numAd+"-nombre\">Nombre de la persona o instutición</label>"+
                        "<input name=\"Advocacy["+numAd+"][nombre]\" id=\"advocacy-"+numAd+"-nombre\" value=\"\" type=\"text\">"+
                    "</div>"+
                    
                    //Input del telefono
                    "<div class=\"input text\">"+
                        "<label for=\"advocacy-"+numAd+"-telefono\">Teléfono</label>"+
                        "<input name=\"Advocacy["+numAd+"][telefono]\" id=\"advocacy-"+numAd+"-telefono\" value=\"\" type=\"text\">"+
                    "</div>" ;
                    
                    //Boton de eliminar red de apoyo
                    //+"<input id='eliminarAdv' style='margin: 10px 5px;' type='button' value='Elminar red' class='button float-right' onclick='deleteInput(\'redesApoyo\')'/><br></br>";
                
                document.getElementById(divName).appendChild(newdiv);
             }
        }
</script>