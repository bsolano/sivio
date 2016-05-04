<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="/webroot/css/responsive-tabs.css" />
        <link type="text/css" rel="stylesheet" href="/webroot/css/style.css" />
        <script src="/webroot/js/jquery.responsiveTabs.js" type="text/javascript"></script> 
        

    </head>


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
            <li class="heading"><?= __('Historial') ?></li>
            <li><?= $this->Html->link(__('Motivo del regreso'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Antecedente legal'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Antecedente psiquiátrico'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Atención por agresión'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Centro de salud'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Violencia física'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Violencia psicológica'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Violencia sexual'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Violencia patrimonial'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Impacto de violencia'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Riesgo'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Programa OAPVD'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Protección'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Valoración del riesgo'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Medidas de protección'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Vencimiento de protección'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Situación enfrentada'), ['action' => 'index']) ?></li>
            
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

                /*$escolaridad = array('primaria completa'=>'primaria completa',
                                     'primaria incompleta'=>'primaria incompleta',
                                     'secundaria completa'=>'secundaria completa',
                                     'secundaria incompleta'=>'secundaria incompleta',
                                     'para universitario/técnico'=>'para universitario/técnico',
                                     'universitaria completa'=>'universitaria completa',
                                     'universitaria incompleta'=>'universitaria incompleta',
                                     'ningún grado'=>'ningún grado'
                                    );
                */
                
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
