<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aggressor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aggressors index large-9 medium-8 columns content">
    <h3><?= __('Aggressors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('vinculo') ?></th>
                <th><?= $this->Paginator->sort('tiempo_relacion') ?></th>
                <th><?= $this->Paginator->sort('tiempo_agresion') ?></th>
                <th><?= $this->Paginator->sort('num_separaciones') ?></th>
                <th><?= $this->Paginator->sort('people_id') ?></th>
                <th><?= $this->Paginator->sort('people_aggressors_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aggressors as $aggressor): ?>
            <tr>
                <td><?= $this->Number->format($aggressor->person_id) ?></td>
                <td><?= $this->Number->format($aggressor->id) ?></td>
                <td><?= h($aggressor->vinculo) ?></td>
                <td><?= h($aggressor->tiempo_relacion) ?></td>
                <td><?= h($aggressor->tiempo_agresion) ?></td>
                <td><?= h($aggressor->num_separaciones) ?></td>
                <td><?= $this->Number->format($aggressor->people_id) ?></td>
                <td><?= $aggressor->has('person') ? $this->Html->link($aggressor->person->id, ['controller' => 'People', 'action' => 'view', $aggressor->person->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aggressor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aggressor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aggressor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggressor->id)]) ?>
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
