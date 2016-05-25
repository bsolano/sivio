<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultation'), ['action' => 'edit', $consultation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultation'), ['action' => 'delete', $consultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultations view large-9 medium-8 columns content">
    <h3>Consulta de <?= h($person->nombre) ?></h3>
    
    <?php if($references != null):?> 
        <?=$this->Html->link("Referencia Externa", ['controller' => 'ExternalReferences', 'action' => 'add', $consultation->person->id], ['class' => 'button']) ?>
        <?=$this->Html->link("Referencia Interna", ['controller' => 'InternalReferences', 'action' => 'add', $consultation->person->id], ['class' => 'button']) ?>
    <?php endif ?>
    <table class="vertical-table">
        <tr>
            <th><?= __('Identificación') ?></th>
            <td><?= $consultation->has('person') ? $this->Html->link($consultation->person->id, ['controller' => 'People', 'action' => 'view', $consultation->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Funcionario que atendió la consulta') ?></th>
            <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->username, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Horario') ?></th>
            <td><?= h($consultation->horario) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($consultation->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Institucion referente') ?></th>
            <td><?= h($consultation->institucion_que_refiere) ?></td>
        </tr>
        <tr>
            <th><?= __('Funcionario institución referente') ?></th>
            <td><?= h($consultation->nombre_que_refiere) ?></td>
        </tr>
        <tr>
            <th><?= __('Teléfono del funcionario institución referente') ?></th>
            <td><?= h($consultation->telefono_que_refiere) ?></td>
        </tr>
        <tr>
            <th><?= __('Valoracion De Riesgo') ?></th>
            <td><?= h($consultation->valoracion_de_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Vinculo Con Persona Agresora') ?></th>
            <td><?= h($consultation->vinculo_con_persona_agresora) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Relacion Con Agresor') ?></th>
            <td><?= h($consultation->tiempo_relacion_con_agresor) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Agresion') ?></th>
            <td><?= h($consultation->tiempo_agresion) ?></td>
        </tr>
        <tr>
            <th><?= __('Recurso Apoyo Fuera Zona Riesgo') ?></th>
            <td><?= h($consultation->recurso_apoyo_fuera_zona_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre Recurso') ?></th>
            <td><?= h($consultation->nombre_recurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono Recurso') ?></th>
            <td><?= h($consultation->telefono_recurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Hora Inicio') ?></th>
            <td><?= h($consultation->hora_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Hora Finalizacion') ?></th>
            <td><?= h($consultation->hora_finalizacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Finalizacion') ?></th>
            <td><?= h($consultation->fecha_finalizacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Familiares Requieren Proteccion') ?></th>
            <td><?= $consultation->familiares_requieren_proteccion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Medidas Proteccion') ?></th>
            <td><?= $consultation->medidas_proteccion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Denuncia Penal') ?></th>
            <td><?= $consultation->denuncia_penal ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Situacion Enfrentada') ?></h4>
            <td><?php foreach($consultation->situacion_enfrentada as $consult): ?> 
            <ul><?= h($consult)  ?></ul>
            <?php endforeach?></td>
    </div>
    <div class="row">
        <h4><?= __('Ultimo Incidente') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->ultimo_incidente)); ?>
    </div>
    <div class="row">
        <h4><?= __('Familiares En Riesgo') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->familiares_en_riesgo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->observaciones)); ?>
    </div>
</div>
