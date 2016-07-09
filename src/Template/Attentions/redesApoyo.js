// JavaScript File
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
                        "<label for=\"PeopleAdvocacy-"+numAd+"-nombre\">Nombre de la persona o instutición</label>"+
                        "<input name=\"PeopleAdvocacy["+numAd+"][nombre]\" id=\"peopleadvocacy-"+numAd+"-nombre\" value=\"\" type=\"text\">"+
                    "</div>"+
                    
                    //Input del telefono
                    "<div class=\"input text\">"+
                        "<label for=\"peopleadvocacy-"+numAd+"-telefono\">Teléfono</label>"+
                        "<input name=\"PeopleAdvocacy["+numAd+"][telefono]\" id=\"peopleadvocacy-"+numAd+"-telefono\" value=\"\" type=\"text\">"+
                    "</div>" ;
                    
                    //Boton de eliminar red de apoyo
                    //+"<input id='eliminarAdv' style='margin: 10px 5px;' type='button' value='Elminar red' class='button float-right' onclick='deleteInput(\'redesApoyo\')'/><br></br>";
                
                document.getElementById(divName).appendChild(newdiv);
             }
        }