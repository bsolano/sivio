<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultations index large-9 medium-8 columns content">
    <h3><?= __('Consultations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('horario') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('hora_inicio') ?></th>
                <th><?= $this->Paginator->sort('hora_finalizacion') ?></th>
                <th><?= $this->Paginator->sort('fecha_finalizacion') ?></th>
                <th><?= $this->Paginator->sort('institucion_que_refiere') ?></th>
                <th><?= $this->Paginator->sort('nombre_que_refiere') ?></th>
                <th><?= $this->Paginator->sort('telefono_que_refiere') ?></th>
                <th><?= $this->Paginator->sort('valoracion_de_riesgo') ?></th>
                <th><?= $this->Paginator->sort('familiares_requieren_proteccion') ?></th>
                <th><?= $this->Paginator->sort('vinculo_con_persona_agresora') ?></th>
                <th><?= $this->Paginator->sort('tiempo_relacion_con_agresor') ?></th>
                <th><?= $this->Paginator->sort('tiempo_agresion') ?></th>
                <th><?= $this->Paginator->sort('medidas_proteccion') ?></th>
                <th><?= $this->Paginator->sort('denuncia_penal') ?></th>
                <th><?= $this->Paginator->sort('fecha_vencimiento') ?></th>
                <th><?= $this->Paginator->sort('recurso_apoyo_fuera_zona_riesgo') ?></th>
                <th><?= $this->Paginator->sort('nombre_recurso') ?></th>
                <th><?= $this->Paginator->sort('telefono_recurso') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultations as $consultation): ?>
            <tr>
                <td><?= $this->Number->format($consultation->id) ?></td>
                <td><?= $consultation->has('person') ? $this->Html->link($consultation->person->id, ['controller' => 'People', 'action' => 'view', $consultation->person->id]) : '' ?></td>
                <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->id, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
                <td><?= h($consultation->horario) ?></td>
                <td><?= h($consultation->tipo) ?></td>
                <td><?= h($consultation->fecha) ?></td>
                <td><?= h($consultation->hora_inicio) ?></td>
                <td><?= h($consultation->hora_finalizacion) ?></td>
                <td><?= h($consultation->fecha_finalizacion) ?></td>
                <td><?= h($consultation->institucion_que_refiere) ?></td>
                <td><?= h($consultation->nombre_que_refiere) ?></td>
                <td><?= h($consultation->telefono_que_refiere) ?></td>
                <td><?= h($consultation->valoracion_de_riesgo) ?></td>
                <td><?= h($consultation->familiares_requieren_proteccion) ?></td>
                <td><?= h($consultation->vinculo_con_persona_agresora) ?></td>
                <td><?= h($consultation->tiempo_relacion_con_agresor) ?></td>
                <td><?= h($consultation->tiempo_agresion) ?></td>
                <td><?= h($consultation->medidas_proteccion) ?></td>
                <td><?= h($consultation->denuncia_penal) ?></td>
                <td><?= h($consultation->fecha_vencimiento) ?></td>
                <td><?= h($consultation->recurso_apoyo_fuera_zona_riesgo) ?></td>
                <td><?= h($consultation->nombre_recurso) ?></td>
                <td><?= h($consultation->telefono_recurso) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
