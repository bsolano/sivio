<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultations index large-9 medium-8 columns content">
    <h3><?= __('Consultations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('situacion_enfrentada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultations as $consultation): ?>
            <tr>
                <td><?= $this->Number->format($consultation->id) ?></td>
                <td><?= h($consultation->tipo) ?></td>
                <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->id, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
                <td><?= $consultation->has('person') ? $this->Html->link($consultation->person->id, ['controller' => 'People', 'action' => 'view', $consultation->person->id]) : '' ?></td>
                <td><?= h($consultation->created) ?></td>
                <td><?= h($consultation->modified) ?></td>
                <td><?= h($consultation->situacion_enfrentada) ?></td>
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
