<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internalReferences index large-9 medium-8 columns content">
    <h3><?= __('Internal References') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('oficina') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->id, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= h($internalReference->oficina) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internalReference->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internalReference->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internalReference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalReference->id)]) ?>
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
