/*
* Clase que pagina un formulario con JS, es una paginación ciruclar, 
* si se le da siguiente a la ultima pagina regresa a la primera y viceversa
* con el botón de regresar
* Para que la clase funcione se debe dividir el formulario en "div" con la clase "page"
* y una clase "page" + "i" donde i corresponde al número de división (número de págin)
* @author Erick
*/

var current_page = 1; 
$(document).ready(function(){
    /*
     Esconde todas las paginas y solo muestra la primera
    */
    var pages = document.getElementsByClassName("page");
    $("#submit").hide();
    var num_pages = pages.length;
    for(i = 1;i<=num_pages;i++){
        if(i == current_page){
            $("#num_page").html("Página " + current_page + " de " + num_pages);
            $(".page" + i).show();
        }
        else{
            $(".page" + i).hide();
        }
    }
    /*
     Cambio a la pagina siguiente
    */
    $("#foward").click(function(){
        $(".page"+current_page).hide();
        current_page = current_page + 1;
       
        
        if(current_page > num_pages){
            current_page = 1;
        }
        if(current_page == num_pages){
            $("#submit").show();
        }
        else{
            $("#submit").hide();
        }
        
        $("#num_page").html("Página " + current_page + " de " + num_pages);
        $(".page"+current_page).show();
        
    });
    /*
     Cambio a la pagina anterior
    */
     $("#backward").click(function(){
        $(".page"+current_page).hide();
        current_page = current_page - 1;
       
        
        if(current_page < 1){
            current_page = num_pages;
        }
        if(current_page == num_pages){
            $("#submit").show();
        }
        else{
            $("#submit").hide();
        }
        $("#num_page").html("Página " + current_page + " de " + num_pages);
        $(".page"+current_page).show();
        
    });
});