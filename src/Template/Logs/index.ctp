<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
-->
<div class="logs index columns content">
    <h3><?= __('Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('apellidos') ?></th>
                <th><?= $this->Paginator->sort('fecha_de_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('estado_civil') ?></th>
                <th><?= $this->Paginator->sort('escolaridad') ?></th>
                <th><?= $this->Paginator->sort('atencion_especializada') ?></th>
                <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('genero') ?></th>
                <th><?= $this->Paginator->sort('ocupacion') ?></th>
                <th><?= $this->Paginator->sort('lugar_trabajo') ?></th>
                <th><?= $this->Paginator->sort('adicciones') ?></th>
                <th><?= $this->Paginator->sort('condicion_migratoria') ?></th>
                <th><?= $this->Paginator->sort('condicion_laboral') ?></th>
                <th><?= $this->Paginator->sort('experiencia_laboral') ?></th>
                <th><?= $this->Paginator->sort('condicion_aseguramiento') ?></th>
                <th><?= $this->Paginator->sort('vivienda') ?></th>
                <th><?= $this->Paginator->sort('tipo_familia') ?></th>
                <th><?= $this->Paginator->sort('embarazo') ?></th>
                <th><?= $this->Paginator->sort('condicion_salud') ?></th>
                <th><?= $this->Paginator->sort('identificacion') ?></th>
                <th><?= $this->Paginator->sort('tipo_identificacion') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('edad') ?></th>
                <th><?= $this->Paginator->sort('num_de_hijos') ?></th>
                <th><?= $this->Paginator->sort('provincia') ?></th>
                <th><?= $this->Paginator->sort('canton') ?></th>
                <th><?= $this->Paginator->sort('hijos_mayor_doce') ?></th>
                <th><?= $this->Paginator->sort('num_hijos_ceaam') ?></th>
                <th><?= $this->Paginator->sort('num_familia') ?></th>
                <th><?= $this->Paginator->sort('rol_familia') ?></th>
                <th><?= $this->Paginator->sort('acepta_seguimiento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= $this->Number->format($log->id) ?></td>
                <td><?= $log->has('person') ? $this->Html->link($log->person->id, ['controller' => 'People', 'action' => 'view', $log->person->id]) : '' ?></td>
                <td><?= h($log->nombre) ?></td>
                <td><?= h($log->apellidos) ?></td>
                <td><?= h($log->fecha_de_nacimiento) ?></td>
                <td><?= h($log->estado_civil) ?></td>
                <td><?= h($log->escolaridad) ?></td>
                <td><?= h($log->atencion_especializada) ?></td>
                <td><?= h($log->nacionalidad) ?></td>
                <td><?= h($log->genero) ?></td>
                <td><?= h($log->ocupacion) ?></td>
                <td><?= h($log->lugar_trabajo) ?></td>
                <td><?= h($log->adicciones) ?></td>
                <td><?= h($log->condicion_migratoria) ?></td>
                <td><?= h($log->condicion_laboral) ?></td>
                <td><?= h($log->experiencia_laboral) ?></td>
                <td><?= h($log->condicion_aseguramiento) ?></td>
                <td><?= h($log->vivienda) ?></td>
                <td><?= h($log->tipo_familia) ?></td>
                <td><?= $this->Number->format($log->embarazo) ?></td>
                <td><?= h($log->condicion_salud) ?></td>
                <td><?= $this->Number->format($log->identificacion) ?></td>
                <td><?= h($log->tipo_identificacion) ?></td>
                <td><?= h($log->telefono) ?></td>
                <td><?= $this->Number->format($log->edad) ?></td>
                <td><?= $this->Number->format($log->num_de_hijos) ?></td>
                <td><?= h($log->provincia) ?></td>
                <td><?= h($log->canton) ?></td>
                <td><?= h($log->hijos_mayor_doce) ?></td>
                <td><?= $this->Number->format($log->num_hijos_ceaam) ?></td>
                <td><?= h($log->num_familia) ?></td>
                <td><?= h($log->rol_familia) ?></td>
                <td><?= $this->Number->format($log->acepta_seguimiento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $log->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $log->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?>
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
