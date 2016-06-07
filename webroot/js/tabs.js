$(document).ready(function(){

$('.page').hide(); 
$('.page1').show();

 $('ul.tabs li').on('click',function(){
                var current_tab = $('ul.tabs li.active').attr('id');
                $('.'+current_tab).hide();
                $('ul.tabs li').removeClass('active');
                $(this).addClass('active')
                
                var activeTab = $(this).attr('id');
                $('.'+activeTab).show();
                
              });

});

