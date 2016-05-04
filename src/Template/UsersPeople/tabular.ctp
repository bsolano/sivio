<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
        <link type="text/css" rel="stylesheet" href="/webroot/css/style.css" />
        <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script> 
        

    </head>
<!--
    
    <body>

    <div id="form">
        <ul>
            <li><a href="#tab-1">Responsive Tab-1</a></li>
            <li><a href="#tab-2">Responsive Tab-2</a></li>
            <li><a href="#tab-3">Responsive Tab-3</a></li>
            <li><a href="#tab-4">Responsive Tab-4</a></li>
            <li><a href="#tab-5">Responsive Tab-5</a></li>
        </ul>

        <div id="tab-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu scelerisque eros. Fusce ante orci, hendrerit sit amet metus sit amet, venenatis sodales felis. Morbi vel mi in leo dignissim convallis in a neque. Suspendisse sollicitudin nibh non dapibus condimentum. Etiam sit amet arcu ultricies, porttitor justo eget, scelerisque urna. Praesent non ligula nec ligula euismod condimentum eget sed augue. Ut feugiat, turpis id sollicitudin vestibulum, tellus massa adipiscing nisl, quis cursus nisl arcu vel ipsum.</p>
        </div>
        <div id="tab-2">
            <p>Quisque sodales sodales lacus pharetra bibendum. Etiam commodo non velit ac rhoncus. Mauris euismod purus sem, ac adipiscing quam laoreet et. Praesent vulputate ornare sem vel scelerisque. Ut dictum augue non erat lacinia, sed lobortis elit gravida. Proin ante massa, ornare accumsan ultricies et, posuere sit amet magna. Praesent dignissim, enim sed malesuada luctus, arcu sapien sodales sapien, ut placerat eros nunc vel est. Donec tristique mi turpis, et sodales nibh gravida eu. Etiam odio risus, porttitor non lacus id, rhoncus tempus tortor. Curabitur tincidunt molestie turpis, ut luctus nibh sollicitudin vel. Sed vel luctus nisi, at mattis metus. Aenean ultricies dolor est, a congue ante dapibus varius. Nulla at auctor nunc. Curabitur accumsan feugiat felis ut pretium. Praesent semper semper nisi, eu cursus augue.</p>
        </div>
        <div id="tab-3">
            <p>Mauris facilisis elit ut sem eleifend accumsan molestie sit amet dolor. Pellentesque dapibus arcu eu lorem laoreet, vitae cursus metus mattis. Nullam eget porta enim, eu rutrum magna. Duis quis tincidunt sem, sit amet faucibus magna. Integer commodo, turpis consequat fermentum egestas, leo odio posuere dui, elementum placerat eros erat id augue. Nullam at eros eget urna vestibulum malesuada vitae eu mauris. Aliquam interdum rhoncus velit, quis scelerisque leo viverra non. Suspendisse id feugiat dui. Nulla in aliquet leo. Proin vel magna sed est gravida rhoncus. Mauris lobortis condimentum nibh, vitae bibendum tortor vehicula ac. Curabitur posuere arcu eros.</p>
        </div>
        <div id="tab-4">
            <p>Donec egestas facilisis sapien sit amet euismod. Donec mollis lectus neque, in consectetur magna sodales et. Nam rutrum libero vitae magna sollicitudin aliquet. In tristique ultrices euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse pretium congue sodales. Curabitur egestas, metus sed ultrices suscipit, metus nibh vehicula ligula, vel volutpat sapien nibh sed quam. Etiam elementum nisi eu risus congue, ut eleifend lectus ultricies. Vivamus in ligula fermentum, bibendum sapien eget, pretium est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ut ante non risus rutrum faucibus.</p>
        </div>
        <div id="tab-5">
            <p>Proin dignissim faucibus odio sollicitudin sagittis. Phasellus aliquet, erat vitae mollis consectetur, enim lectus ornare libero, et porta mi dui eu tellus. Morbi lobortis, elit at euismod porta, magna lacus mattis massa, a lacinia ligula risus et lectus. Sed et aliquam ligula. Nunc venenatis orci magna, quis facilisis sem porta non. Nunc sodales arcu in consectetur malesuada. Maecenas varius justo lacus, scelerisque viverra tellus luctus eu. Nam imperdiet ultricies suscipit. Ut urna mauris, eleifend quis lacinia non, mollis id libero. Praesent pharetra viverra ipsum at posuere. Quisque commodo tortor nec hendrerit faucibus. Fusce convallis urna et vehicula tincidunt. Duis sed vehicula justo, eu placerat nisi. Donec facilisis augue non turpis semper, eget condimentum mauris malesuada. Nunc in dignissim mi, sed laoreet felis.</p>
        </div>

    </div>

    <script type="text/javascript" language= "JavaScript">
    
        $(document).ready(function () {
            ('#form').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [3,4],
            });
    </script>
</body>
    
</html> -->
    

        <!--
        <fieldset>
            <legend><?= __('Editar Expediente') ?></legend>
            <?= $this->Form->create('People', array('url' => 'people/edit')); ?>
            <?php
                echo $this->Form->input('nombre'); 
                
            ?>
            
            
            
            
        </fieldset>
        -->
<body>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('Ingresos y Egresos'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Perfil de Usuaria'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Historia de Violencia'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Hijas e Hijos'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Intervenciones'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Redes de Apoyo'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Seguimientos'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
        
    <div class="usersPeople form large-9 medium-8 columns content">
        <section class="wrapper">
  <ul class="tabs">
    <li><a href="#tab1">Pestaña 1</a></li>
    <li><a href="#tab2">Pestaña 2</a></li>
    <li><a href="#tab3">Pestaña 3</a></li>
  </ul>
  <div class="clr"></div>
  <section class="block">
    <article id="tab1">
                <fieldset>
       <legend><?= __('Editar Expediente') ?></legend>
            <?= $this->Form->create('People', array('url' => 'people/edit')); ?>
            <?php
                echo $this->Form->input('nombre'); 
                echo $this->Form->input('fecha_nacimiento');
                echo $this->Form->input('apellidos');
                echo $this->Form->input('estado_civil');

                $escolaridad = array('primaria completa'=>'primaria completa',
                                     'primaria incompleta'=>'primaria incompleta',
                                     'secundaria completa'=>'secundaria completa',
                                     'secundaria incompleta'=>'secundaria incompleta',
                                     'para universitario/técnico'=>'para universitario/técnico',
                                     'universitaria completa'=>'universitaria completa',
                                     'universitaria incompleta'=>'universitaria incompleta',
                                     'ningún grado'=>'ningún grado'
                                    );
                echo $this->Form->input('escolaridad', [
                  'type' => 'radio',
                  'options' =>  $escolaridad,
                  'required' => 'required',
                  'label' => 'Escolaridad'
                ]);

                echo $this->Form->input('atencion_especializada');
                echo $this->Form->input('nacionalidad');

                $genero = array('Masculino' => 'Masculino','Femenino'=>'Femenino');
                echo $this->Form->input('genero', array(
                    'label' => 'Genero',
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'options' => $genero
                    )
                );
                
                echo $this->Form->input('ocupacion');
                echo $this->Form->input('lugar_trabajo');
                echo $this->Form->input('adicciones');
                
                $migratoria = array('nacional'=>'nacional','residente'=>'residente',
                                    'refugiada'=>'refugiada','regular'=>'regular',
                                    'irregular'=>'irregular'
                                    );
                echo $this->Form->input('condicion_migratoria',array(
                  'label'=>'Condicion Migratoria',
                  'type' => 'radio',
                  'options' => $migratoria,
                  'required' => 'required'
                  )
                );

                $laboral = array('remunerada'=>'remunerada','no remunerada'=>'no remunerada',
                                'desempleada'=>'desempleada', 'pensionada'=>'pensionada'
                                );
                echo $this->Form->input('condicion_laboral',array(
                  'label'=>'Condicion Laboral',
                  'type' => 'radio',
                  'options' => $laboral,
                  'required' => 'required'
                  )
                );

                echo $this->Form->input('experiencia_laboral',array(
                  'label'=>'Experiencia Laboral',
                  'type' => 'radio',
                  'options' => ['Sí'=>'Sí','No'=>'No'],
                  'required' => 'required'
                  )
                );

                echo $this->Form->input('condicion_aseguramiento');
                echo $this->Form->input('vivienda');
                echo $this->Form->input('num_hijos_ceaam');
                echo $this->Form->input('tipo_familia');
                echo $this->Form->input('embarazo');
                echo $this->Form->input('condicion_salud');
                echo $this->Form->input('identificacion');
                echo $this->Form->input('tipo_identificacion');
            ?>

        </fieldset>
      <p>Lorem ipsum dolor silementum vulputate, nunc.</p>
    </article>
    <article id="tab2">
      <p>Sed egestas, ante et ve eu, fermentum et, dapibus sed, urna.</p>
    </article>
    <article id="tab3">
      <p>Morbi interdum mollis saMdellr leo pedetate vel, nisl.</p>
    </article>
  </section>
</section>
    </div>
	<script type="text/javascript" >
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
