<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $intervention->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $intervention->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Interventions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="interventions form large-9 medium-8 columns content">
    <?= $this->Form->create($intervention) ?>
    <fieldset>
        <legend><?= __('Edit Intervention') ?></legend>
        <?php
            echo $this->Form->input('programa_capacitacion');
            echo $this->Form->input('certificacion_tecnica');
            echo $this->Form->input('bisuteria_artesania');
            echo $this->Form->input('cuido_adultos');
            echo $this->Form->input('cuido_menores');
            echo $this->Form->input('computacion');
            echo $this->Form->input('acrilico');
            echo $this->Form->input('maquillaje');
            echo $this->Form->input('corte_confeccion');
            echo $this->Form->input('peluqueria');
            echo $this->Form->input('cursos_formacion');
            echo $this->Form->input('desea_intervencion');
            echo $this->Form->input('resolucion_conflictos');
            echo $this->Form->input('egresos_tecnicos');
            echo $this->Form->input('valoracion_proceso');
            echo $this->Form->input('atencion_quejas');
            echo $this->Form->input('individual');
            echo $this->Form->input('grupal');
            echo $this->Form->input('talleres');
            echo $this->Form->input('coordinaciones');
            echo $this->Form->input('informes');
            echo $this->Form->input('referencias');
            echo $this->Form->input('acompanamiento_profesional');
            echo $this->Form->input('plan_seguridad');
            echo $this->Form->input('criterio_especializado');
            echo $this->Form->input('representacion_legal');
            echo $this->Form->input('consultorio_juridico');
            echo $this->Form->input('people._ids', ['options' => $people]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
