<html>
<head>
    <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script> 
</head>
    
<body>
    <?= $this->Form->create(); ?>
    <div class="usersPeople form large-9 medium-8 columns content" style="width: 100%;">
    
    <!-- TABS -->
    <section class="wrapper">
        <ul class="tabs">
            <li><a href="#tab1">Ingresos y Egresos</a></li>
            <li><a href="#tab2">Perfil de Usuaria</a></li>
            <li><a href="#tab3">Redes de Apoyo</a></li>
            <li><a href="#tab4">Historia de Violencia</a></li>
            <li><a href="#tab5">Hijos</a></li>
            <li><a href="#tab6">Intervenciones</a></li>
            <li><a href="#tab7">Seguimientos</a></li>
        </ul>
        <section class="block">
            <article id="tab1"> <?php include 't1.ctp';?> </article>
            <article id="tab2"> <?php include 't2.ctp';?> </article>
            <article id="tab3"> <?php include 't3.ctp';?> </article>
            <article id="tab4"> <?php include 't4.ctp';?> </article>
            <article id="tab5"> <?php include 't5.ctp';?> </article>
            <article id="tab6"> <?php include 't6.ctp';?> </article> <!-- TAB de Intervenciones -->
            <article id="tab7"> <?php include 't7.ctp';?> </article>
        </section>
    </section>
    
    <!-- $this->Form->submit('Guardar',['class'=>'shallow secondary button'])  -->
    
    </div>
    <?= $this->Form->button(__('Submit'),['class'=>'shallow secondary button']) ?>
    <?= $this->Form->end() ?>

	<script type="text/javascript" id='scpts'>
	    $(window).load( function () {
	            //tab 1
                showOrHide( $('#dconfidencial') , $('#direccion') );/*legal*/
                
                //	            
	            hideOrShow( $('#desea_intervencion') , $('#atencionl') );/*legal*/
	            hideOrShow( $('#deseaAtencionp') , $('#atencionp') );/*psico*/
	            hideOrShow( $('#deseaAtencionn') , $('#atencionn') );/*psico (niños)*/
	            hideOrShow( $('#trabajosocial') , $('#tsocial') );/*psico (niños)*/

	    })
        //tab 1
        $('#dconfidencial').change(function () { showOrHide( $(this), $('#direccion') );});

        $('#desea_intervencion').change(function () { hideOrShow( $(this), $('#atencionl') );});
        $('#trabajosocial').change(function () { hideOrShow( $(this), $('#tsocial') ); });
        $('#deseaAtencionp').change(function () { hideOrShow( $(this), $('#atencionp') ); });
        $('#deseaAtencionn').change(function () { hideOrShow( $(this), $('#atencionn') ); });

    /*function radioButtonInput($radiobname, $containerName, $option){*/
    /*    if( $radiobname[0] = $option && $radiobname[0].chec )*/
    /*}*/
    
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
	</script>
</body>
</html>
