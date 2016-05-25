<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
-->
<div class="histories index large-9 medium-8 columns content">
    <h3><?= __('Histories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('motivo_regreso') ?></th>
                <th><?= $this->Paginator->sort('antecedente_legal') ?></th>
                <th><?= $this->Paginator->sort('antecedente_psiquiatrico') ?></th>
                <th><?= $this->Paginator->sort('atencion_por_agresion') ?></th>
                <th><?= $this->Paginator->sort('centro_salud') ?></th>
                <th><?= $this->Paginator->sort('impacto_violencia') ?></th>
                <th><?= $this->Paginator->sort('riesgo') ?></th>
                <th><?= $this->Paginator->sort('programa_oapvd') ?></th>
                <th><?= $this->Paginator->sort('proteccion') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('valoracion_riesgo') ?></th>
                <th><?= $this->Paginator->sort('medida_proteccion') ?></th>
                <th><?= $this->Paginator->sort('vencimiento_proteccion') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('vinculo_usuaria') ?></th>
                <th><?= $this->Paginator->sort('tiempo_relacion') ?></th>
                <th><?= $this->Paginator->sort('tiempo_agresion') ?></th>
                <th><?= $this->Paginator->sort('num_separaciones') ?></th>
                <th><?= $this->Paginator->sort('familiar_requiere_proteccion') ?></th>
                <th><?= $this->Paginator->sort('aggressor_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($histories as $history): ?>
            <tr>
                <td><?= h($history->motivo_regreso) ?></td>
                <td><?= h($history->antecedente_legal) ?></td>
                <td><?= h($history->antecedente_psiquiatrico) ?></td>
                <td><?= h($history->atencion_por_agresion) ?></td>
                <td><?= h($history->centro_salud) ?></td>
                <td><?= h($history->impacto_violencia) ?></td>
                <td><?= h($history->riesgo) ?></td>
                <td><?= h($history->programa_oapvd) ?></td>
                <td><?= h($history->proteccion) ?></td>
                <td><?= $this->Number->format($history->id) ?></td>
                <td><?= h($history->valoracion_riesgo) ?></td>
                <td><?= h($history->medida_proteccion) ?></td>
                <td><?= h($history->vencimiento_proteccion) ?></td>
                <td><?= $this->Number->format($history->person_id) ?></td>
                <td><?= h($history->vinculo_usuaria) ?></td>
                <td><?= h($history->tiempo_relacion) ?></td>
                <td><?= h($history->tiempo_agresion) ?></td>
                <td><?= h($history->num_separaciones) ?></td>
                <td><?= h($history->familiar_requiere_proteccion) ?></td>
                <td><?= $this->Number->format($history->aggressor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $history->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $history->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
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
