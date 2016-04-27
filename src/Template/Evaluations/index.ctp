<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations index large-9 medium-8 columns content">
    <h3><?= __('Evaluations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('people_id') ?></th>
                <th><?= $this->Paginator->sort('horario_habil') ?></th>
                <th><?= $this->Paginator->sort('disponibilidad') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('nombre_locutor_coavif') ?></th>
                <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th><?= $this->Paginator->sort('advocacy_id') ?></th>
                <th><?= $this->Paginator->sort('institucion_referente') ?></th>
                <th><?= $this->Paginator->sort('persona_referente') ?></th>
                <th><?= $this->Paginator->sort('telefono_referente') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
            <tr>
                <td><?= $this->Number->format($evaluation->id) ?></td>
                <td><?= $evaluation->has('person') ? $this->Html->link($evaluation->person->id, ['controller' => 'People', 'action' => 'view', $evaluation->person->id]) : '' ?></td>
                <td><?= h($evaluation->horario_habil) ?></td>
                <td><?= h($evaluation->disponibilidad) ?></td>
                <td><?= h($evaluation->tipo) ?></td>
                <td><?= $evaluation->has('user') ? $this->Html->link($evaluation->user->id, ['controller' => 'Users', 'action' => 'view', $evaluation->user->id]) : '' ?></td>
                <td><?= h($evaluation->nombre_locutor_coavif) ?></td>
                <td><?= h($evaluation->fecha_inicio) ?></td>
                <td><?= h($evaluation->fecha_fin) ?></td>
                <td><?= $evaluation->has('advocacy') ? $this->Html->link($evaluation->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $evaluation->advocacy->id]) : '' ?></td>
                <td><?= h($evaluation->institucion_referente) ?></td>
                <td><?= h($evaluation->persona_referente) ?></td>
                <td><?= h($evaluation->telefono_referente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evaluation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id)]) ?>
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
