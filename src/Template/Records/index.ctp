<?= $this->Html->css('sivio.tabs.css') ?>
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
