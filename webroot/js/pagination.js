

var current_page = 1; 
$(document).ready(function(){
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