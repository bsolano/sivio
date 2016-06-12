$(document).ready(function(){
$('#horario').hide();
$('.page').hide(); 
$('.page1').show();
$('.tab_page1').show();

 $('#tipo').on('change', function() {
  
  if(this.value==1){
   $('#horario').show();
  }
  else{
   $('#horario').hide();
  }
 
 });
 $('ul.tabs li').on('click',function(){
                var current_tab = $('ul.tabs li.active').attr('id');
                $('.'+current_tab).hide();
                $('ul.tabs li').removeClass('active');
                $(this).addClass('active')
                
                var activeTab = $(this).attr('id');
                $('.'+activeTab).show();
                
              });
              
  $('ul.tabs_modal li').on('click',function(){
                var current_tab = $('ul.tabs_modal li.active').attr('id');
                $('.'+current_tab).hide();
                $('ul.tabs_modal li').removeClass('active');
                $(this).addClass('active')
                
                var activeTab = $(this).attr('id');
                $('.'+activeTab).show();
                
              });
              
  $('#calcular').on('click',function(){
  
   var AltoRiesgo = $('.Alto_riesgo');
   var RiesgoSevero = $('.Riesgo_severo');
   var Precaucion= $('.Precaucion');
   var AltoRiesgoResult = false;
   var RiesgoSeveroResult = false;
   var PrecaucionResult = false;
   
   for (var i = 0; i < AltoRiesgo.length; i++) {
    
    if(AltoRiesgo[i].checked){
     AltoRiesgoResult = true;
     }
    }
   for (var i = 0; i < RiesgoSevero.length; i++) {
    if(RiesgoSevero[i].checked){
     RiesgoSeveroResult = true;
     }
    }
   for (var i = 0; i < Precaucion.length; i++) {
    if(Precaucion[i].checked){
     PrecaucionResult = true;
     }
    }
    
   if(AltoRiesgoResult && RiesgoSeveroResult){
    $("#nivel_de_riesgo").html("Riesgo Severo");
   }
   else if(AltoRiesgoResult){
    $("#nivel_de_riesgo").html("Alto Riesgo");
   }
   else if(PrecaucionResult){
    $("#nivel_de_riesgo").html("Precaución");
   }
   
   $('#myModal').foundation('close');
  });
});

