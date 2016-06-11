$(document).ready(function(){
$('#horario').hide();
$('.page').hide(); 
$('.page1').show();

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

});

