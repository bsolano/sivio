<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entries index large-9 medium-8 columns content">
    <h3><?= __('Entries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('provincia') ?></th>
                <th><?= $this->Paginator->sort('canton') ?></th>
                <th><?= $this->Paginator->sort('ceaam_ingresa') ?></th>
                <th><?= $this->Paginator->sort('tipo_ingreso') ?></th>
                <th><?= $this->Paginator->sort('tipo_egreso') ?></th>
                <th><?= $this->Paginator->sort('motivo_ingreso') ?></th>
                <th><?= $this->Paginator->sort('destino_extranjero') ?></th>
                <th><?= $this->Paginator->sort('kit') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('entidad_traslada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entries as $entry): ?>
            <tr>
                <td><?= $this->Number->format($entry->id) ?></td>
                <td><?= h($entry->provincia) ?></td>
                <td><?= h($entry->canton) ?></td>
                <td><?= h($entry->ceaam_ingresa) ?></td>
                <td><?= h($entry->tipo_ingreso) ?></td>
                <td><?= h($entry->tipo_egreso) ?></td>
                <td><?= h($entry->motivo_ingreso) ?></td>
                <td><?= h($entry->destino_extranjero) ?></td>
                <td><?= h($entry->kit) ?></td>
                <td><?= $entry->has('user') ? $this->Html->link($entry->user->id, ['controller' => 'Users', 'action' => 'view', $entry->user->id]) : '' ?></td>
                <td><?= h($entry->entidad_traslada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entry->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entry->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entry->id)]) ?>
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
