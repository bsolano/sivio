<?= $this->Form->create(); ?>
    <div class="usersPeople form large-9 medium-8 columns content" style="width: 100%;">
    <!-- TABS -->
    <section class="wrapper">
        <ul class="tabs">
            <li><a href="#tab1">Datos Personales</a></li>
            <li><a href="#tab2">Historial de Consultas</a></li>
            <li><a href="#tab3">Historial de Atenciones</a></li>
            
          
        </ul>
        
        <section class="block">
            <article id="tab1"> <?php include 't1.ctp';?> </article>
            <article id="tab2"> <?php include 't2.ctp';?> </article>
            <article id="tab3"> <?php include 't3.ctp';?> </article>
     <!-- TAB de Intervenciones -->
        </section>
    </section>
    <!-- $this->Form->submit('Guardar',['class'=>'shallow secondary button'])  -->
    
    </div>
    <?= $this->Form->end() ?>


<!----------------------------------------------------------------------------->
<!--               JS's                                                       ->
<!----------------------------------------------------------------------------->
	<script type="text/javascript" id='scpts'>
	    $(window).load( function () {
	            //tab 1
                showOrHide( $('#dconfidencial') , $('#direccion') );/*legal*/
                showOrHide( $('#ddconfidencial') , $('#direccion_destino') );/*legal*/
                showOrHide( $('#dextranjero') , $('#direccion_extranjero') );/*legal*/

                //	            
	            hideOrShow( $('#desea_intervencion') , $('#atencionl') );/*legal*/
	            hideOrShow( $('#deseaAtencionp') , $('#atencionp') );/*psico*/
	            hideOrShow( $('#deseaAtencionn') , $('#atencionn') );/*psico (niños)*/
	            hideOrShow( $('#trabajosocial') , $('#tsocial') );/*psico (niños)*/
	            hideOrShow( $('#RecursosApoyo') , $('#RecursosAp') );/*psico (niños)*/
	    })
	    
	    
        //tab 1
        $('#dextranjero'        ).change (function () { showOrHide( $(this), $('#direccion_extranjero'  ) );  });
        $('#ddconfidencial'     ).change (function () { showOrHide( $(this), $('#direccion_destino'  ) );  });
        $('#dconfidencial'      ).change (function () { showOrHide( $(this), $('#direccion'  ) );  });
        $('#desea_intervencion' ).change (function () { hideOrShow( $(this), $('#atencionl'  ) );  });
        $('#trabajosocial'      ).change (function () { hideOrShow( $(this), $('#tsocial'    ) );  });
        $('#deseaAtencionp'     ).change (function () { hideOrShow( $(this), $('#atencionp'  ) );  });
        $('#deseaAtencionn'     ).change (function () { hideOrShow( $(this), $('#atencionn'  ) );  });
        $('#RecursosApoyo'      ).change (function () { hideOrShow( $(this), $('#RecursosAp' ) );  });

        function showOrHide ($checkbname, $containerName ) {
            if ( $checkbname.is(":checked")) {
                $containerName.fadeOut();
                return;
            }
            $containerName.fadeIn();
            return;
        }        
        
        function hideOrShow ($checkbname, $containerName ) {
            if ( $checkbname.is(":checked")) {
                $containerName.fadeIn();
                return;
            }
            $containerName.fadeOut();
            return;
        }
        
        $(function(){
            $('ul.tabs li:first').addClass('active');
            $('.block article').hide();
            $('.block article:first').show();
            $('ul.tabs li').on('click',function(){
                $('ul.tabs li').removeClass('active');
                $(this).addClass('active')
                $('.block article').hide();
                var activeTab = $(this).find('a').attr('href');
                $(activeTab).show();
                return false;
              });
        })
        
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
        
        function deleteInput(divName){
           document.getElementById('divName').remove();
        }
	</script>
