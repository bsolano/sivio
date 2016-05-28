<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $history->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Histories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="histories form large-9 medium-8 columns content">
    <?= $this->Form->create($history) ?>
    <fieldset>
        <legend><?= __('Edit History') ?></legend>
        <?php
            echo $this->Form->input('motivo_regreso');
            echo $this->Form->input('antecedente_legal');
            echo $this->Form->input('antecedente_psiquiatrico');
            echo $this->Form->input('atencion_por_agresion');
            echo $this->Form->input('centro_salud');
            echo $this->Form->input('violencia_fisica');
            echo $this->Form->input('violencia_psicologica');
            echo $this->Form->input('violencia_sexual');
            echo $this->Form->input('violencia_patrimonial');
            echo $this->Form->input('impacto_violencia');
            echo $this->Form->input('riesgo');
            echo $this->Form->input('programa_oapvd');
            echo $this->Form->input('proteccion');
            echo $this->Form->input('valoracion_riesgo');
            echo $this->Form->input('medida_proteccion');
            echo $this->Form->input('vencimiento_proteccion', ['empty' => true]);
            echo $this->Form->input('situacion_enfrentada');
            echo $this->Form->input('person_id');
            echo $this->Form->input('vinculo_usuaria');
            echo $this->Form->input('tiempo_relacion');
            echo $this->Form->input('tiempo_agresion');
            echo $this->Form->input('num_separaciones');
            echo $this->Form->input('familiares_en_riesgo');
            echo $this->Form->input('familiar_requiere_proteccion');
            echo $this->Form->input('aggressor_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
