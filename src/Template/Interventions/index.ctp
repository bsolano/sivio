<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Intervention'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="interventions index large-9 medium-8 columns content">
    <h3><?= __('Interventions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('programa_capacitacion') ?></th>
                <th><?= $this->Paginator->sort('certificacion_tecnica') ?></th>
                <th><?= $this->Paginator->sort('bisuteria_artesania') ?></th>
                <th><?= $this->Paginator->sort('cuido_adultos') ?></th>
                <th><?= $this->Paginator->sort('cuido_menores') ?></th>
                <th><?= $this->Paginator->sort('computacion') ?></th>
                <th><?= $this->Paginator->sort('acrilico') ?></th>
                <th><?= $this->Paginator->sort('maquillaje') ?></th>
                <th><?= $this->Paginator->sort('corte_confeccion') ?></th>
                <th><?= $this->Paginator->sort('peluqueria') ?></th>
                <th><?= $this->Paginator->sort('cursos_formacion') ?></th>
                <th><?= $this->Paginator->sort('desea_intervencion') ?></th>
                <th><?= $this->Paginator->sort('resolucion_conflictos') ?></th>
                <th><?= $this->Paginator->sort('egresos_tecnicos') ?></th>
                <th><?= $this->Paginator->sort('valoracion_proceso') ?></th>
                <th><?= $this->Paginator->sort('atencion_quejas') ?></th>
                <th><?= $this->Paginator->sort('individual') ?></th>
                <th><?= $this->Paginator->sort('grupal') ?></th>
                <th><?= $this->Paginator->sort('talleres') ?></th>
                <th><?= $this->Paginator->sort('coordinaciones') ?></th>
                <th><?= $this->Paginator->sort('informes') ?></th>
                <th><?= $this->Paginator->sort('referencias') ?></th>
                <th><?= $this->Paginator->sort('acompanamiento_profesional') ?></th>
                <th><?= $this->Paginator->sort('plan_seguridad') ?></th>
                <th><?= $this->Paginator->sort('criterio_especializado') ?></th>
                <th><?= $this->Paginator->sort('representacion_legal') ?></th>
                <th><?= $this->Paginator->sort('consultorio_juridico') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($interventions as $intervention): ?>
            <tr>
                <td><?= $this->Number->format($intervention->id) ?></td>
                <td><?= h($intervention->programa_capacitacion) ?></td>
                <td><?= h($intervention->certificacion_tecnica) ?></td>
                <td><?= $this->Number->format($intervention->bisuteria_artesania) ?></td>
                <td><?= $this->Number->format($intervention->cuido_adultos) ?></td>
                <td><?= h($intervention->cuido_menores) ?></td>
                <td><?= h($intervention->computacion) ?></td>
                <td><?= h($intervention->acrilico) ?></td>
                <td><?= h($intervention->maquillaje) ?></td>
                <td><?= h($intervention->corte_confeccion) ?></td>
                <td><?= h($intervention->peluqueria) ?></td>
                <td><?= h($intervention->cursos_formacion) ?></td>
                <td><?= h($intervention->desea_intervencion) ?></td>
                <td><?= h($intervention->resolucion_conflictos) ?></td>
                <td><?= h($intervention->egresos_tecnicos) ?></td>
                <td><?= $this->Number->format($intervention->valoracion_proceso) ?></td>
                <td><?= $this->Number->format($intervention->atencion_quejas) ?></td>
                <td><?= h($intervention->individual) ?></td>
                <td><?= $this->Number->format($intervention->grupal) ?></td>
                <td><?= h($intervention->talleres) ?></td>
                <td><?= h($intervention->coordinaciones) ?></td>
                <td><?= $this->Number->format($intervention->informes) ?></td>
                <td><?= $this->Number->format($intervention->referencias) ?></td>
                <td><?= $this->Number->format($intervention->acompanamiento_profesional) ?></td>
                <td><?= h($intervention->plan_seguridad) ?></td>
                <td><?= h($intervention->criterio_especializado) ?></td>
                <td><?= h($intervention->representacion_legal) ?></td>
                <td><?= h($intervention->consultorio_juridico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $intervention->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $intervention->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $intervention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intervention->id)]) ?>
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
