<?= $this->Html->css('sivio.tabs.css') ?>
<?= $this->Form->create(); ?>
    <?php $p = $persona->toArray(); ?>
    
    <input id="bnt_Vista"    style="margin: 10px 5px;"  type="button" value="Ver Perfil" class="hollow secondary button float-right" onclick='ver       ( <?= $p[0]['id'] ?> )'/>
    <input id="bnt_logs"     style="margin: 10px 5px; " type="button" value="Versiones"  class="hollow secondary button float-right" onclick='verLogs   ( <?= $p[0]['id'] ?> )'/>
    <input id="bnt_Consulta" style="margin: 10px 5px; " type="button" value="Consulta"   class="hollow secondary button float-right" onclick='esConsulta( <?= $p[0]['id'] ?> )'/>
    <?php if ($group_name  != 'RecepcionistaDelegacionDeLaMujer' ): ?>
        <input id="bnt_Atencion" style="margin: 10px 5px; " type="button" value="Atención"   class="hollow secondary button float-right" onclick='esAtencion( <?= $p[0]['id'] ?> )'/>
    <?php endif; ?>
    
    <div class="records form large-9 medium-8 columns content" style="width: 100%;">
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

        </section>
    </section>

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
        
        function ver(id) {
            window.location.replace("http://"+ window.location.hostname + "/people/view/"       + id);
        }
        //Crea una consulta para la usuaria seleccionada.
        function esConsulta(id) {
            window.location.replace("http://"+ window.location.hostname + "/consultations/add/" + id);
        }
        
        // Crea una atención para la usuaria seleccionada.
        function esAtencion(id) {
            window.location.replace("http://"+ window.location.hostname + "/attentions/add/"    + id);
        }
        
        function verLogs(id) {
            window.location.replace("http://"+ window.location.hostname + "/logs/indicePersona/"+ id);
        }

	</script>