<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Followup'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="followups index large-9 medium-8 columns content">
    <h3><?= __('Followups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('medio_comunicacion') ?></th>
                <th><?= $this->Paginator->sort('aspectos_sociales') ?></th>
                <th><?= $this->Paginator->sort('apoyo_institucional') ?></th>
                <th><?= $this->Paginator->sort('legales') ?></th>
                <th><?= $this->Paginator->sort('seguridad') ?></th>
                <th><?= $this->Paginator->sort('seguimiento_kit') ?></th>
                <th><?= $this->Paginator->sort('seguimiento_referencia') ?></th>
                <th><?= $this->Paginator->sort('lugar_atencion') ?></th>
                <th><?= $this->Paginator->sort('enfrenta_violencia') ?></th>
                <th><?= $this->Paginator->sort('convivencia') ?></th>
                <th><?= $this->Paginator->sort('atencion_especializada') ?></th>
                <th><?= $this->Paginator->sort('advocacy_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($followups as $followup): ?>
            <tr>
                <td><?= $this->Number->format($followup->id) ?></td>
                <td><?= $followup->has('person') ? $this->Html->link($followup->person->id, ['controller' => 'People', 'action' => 'view', $followup->person->id]) : '' ?></td>
                <td><?= h($followup->created) ?></td>
                <td><?= $this->Number->format($followup->user_id) ?></td>
                <td><?= h($followup->medio_comunicacion) ?></td>
                <td><?= h($followup->aspectos_sociales) ?></td>
                <td><?= h($followup->apoyo_institucional) ?></td>
                <td><?= h($followup->legales) ?></td>
                <td><?= h($followup->seguridad) ?></td>
                <td><?= h($followup->seguimiento_kit) ?></td>
                <td><?= h($followup->seguimiento_referencia) ?></td>
                <td><?= h($followup->lugar_atencion) ?></td>
                <td><?= h($followup->enfrenta_violencia) ?></td>
                <td><?= h($followup->convivencia) ?></td>
                <td><?= h($followup->atencion_especializada) ?></td>
                <td><?= $followup->has('advocacy') ? $this->Html->link($followup->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $followup->advocacy->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $followup->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $followup->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $followup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followup->id)]) ?>
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
