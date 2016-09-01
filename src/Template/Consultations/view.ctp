<div class="consultations view large-9 medium-8 columns content">
    <h3>Consulta de <?= h($person->nombre) ?></h3>
    
    <?php if($references != null):?> 
        <?=$this->Html->link("Referencia Externa", ['controller' => 'ExternalReferences', 'action' => 'add', $consultation->person->id, 'consultation_id' => $consultation->id], ['class' => 'button']) ?>
        <?=$this->Html->link("Referencia Interna", ['controller' => 'InternalReferences', 'action' => 'add', $consultation->person->id, 'consultation_id' => $consultation->id], ['class' => 'button']) ?>
    <?php endif ?>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($consultation->person->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($consultation->person->apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificación') ?></th>
            <td><?= $consultation->has('person') ? $this->Html->link($consultation->person->id, ['controller' => 'People', 'action' => 'view', $consultation->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($consultation->person->nacionalidadgi)?></td>
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
            <th><?= __('Funcionario de la institución referente') ?></th>
            <td><?= h($consultation->nombre_que_refiere) ?></td>
        </tr>
        <tr>
            <th><?= __('Teléfono del funcionario de la institución referente') ?></th>
            <td><?= h($consultation->telefono_que_refiere) ?></td>
        </tr>
        <tr>
            <th><?= __('Valoración de riesgo') ?></th>
            <td><?= h($consultation->valoracion_de_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Vínculo con la persona agresora') ?></th>
            <td><?= h($consultation->vinculo_con_persona_agresora) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo de relacion con el agresor') ?></th>
            <td><?= h($consultation->tiempo_relacion_con_agresor) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo de la agresion') ?></th>
            <td><?= h($consultation->tiempo_agresion) ?></td>
        </tr>
        <tr>
            <th><?= __('Recurso de apoyo fuera zona riesgo') ?></th>
            <td><?= h($consultation->recurso_apoyo_fuera_zona_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre del recurso apoyo') ?></th>
            <td><?= h($consultation->nombre_recurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono del recurso de apoyo') ?></th>
            <td><?= h($consultation->telefono_recurso) ?></td>
        </tr>
        <tr>
            <th><?= __('Hora inicio') ?></th>
            <td><?= h($consultation->hora_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Hora finalizacion') ?></th>
            <td><?= h($consultation->hora_finalizacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha finalizacion') ?></th>
            <td><?= h($consultation->fecha_finalizacion) ?></td>
        </tr>
        <tr>
            <th><?= __('¿Familiares requieren protección?') ?></th>
            <td><?= $consultation->familiares_requieren_proteccion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Medidas de proteccion') ?></th>
            <td><?= $consultation->medidas_proteccion ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Denuncia penal') ?></th>
            <td><?= $consultation->denuncia_penal ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Situación enfrentada') ?></h4>
            <td><?php foreach($consultation->situacion_enfrentada as $consult): ?> 
            <ul><?= h($consult)  ?></ul>
            <?php endforeach?></td>
    </div>
    <div class="row">
        <h4><?= __('Último incidente') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->ultimo_incidente)); ?>
    </div>
    <div class="row">
        <h4><?= __('Familiares en riesgo') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->familiares_en_riesgo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($consultation->observaciones)); ?>
    </div>
</div>
