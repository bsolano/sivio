<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Entry'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entries'), ['controller' => 'Entries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['controller' => 'Entries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleEntries index large-9 medium-8 columns content">
    <h3><?= __('People Entries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('entries_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_accion') ?></th>
                <th><?= $this->Paginator->sort('fecha_accion') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('rechazo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleEntries as $peopleEntry): ?>
            <tr>
                <td><?= $peopleEntry->has('person') ? $this->Html->link($peopleEntry->person->id, ['controller' => 'People', 'action' => 'view', $peopleEntry->person->id]) : '' ?></td>
                <td><?= $peopleEntry->has('entry') ? $this->Html->link($peopleEntry->entry->id, ['controller' => 'Entries', 'action' => 'view', $peopleEntry->entry->id]) : '' ?></td>
                <td><?= h($peopleEntry->tipo_accion) ?></td>
                <td><?= h($peopleEntry->fecha_accion) ?></td>
                <td><?= $this->Number->format($peopleEntry->id) ?></td>
                <td><?= h($peopleEntry->rechazo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleEntry->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleEntry->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleEntry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleEntry->id)]) ?>
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
