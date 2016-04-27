<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transfer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transfers index large-9 medium-8 columns content">
    <h3><?= __('Transfers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('entidad_traslada') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('consentimiento') ?></th>
                <th><?= $this->Paginator->sort('plan_emergencia') ?></th>
                <th><?= $this->Paginator->sort('dependientes_directos') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transfers as $transfer): ?>
            <tr>
                <td><?= $this->Number->format($transfer->id) ?></td>
                <td><?= $this->Number->format($transfer->person_id) ?></td>
                <td><?= h($transfer->entidad_traslada) ?></td>
                <td><?= h($transfer->nombre) ?></td>
                <td><?= h($transfer->telefono) ?></td>
                <td><?= h($transfer->direccion) ?></td>
                <td><?= h($transfer->consentimiento) ?></td>
                <td><?= h($transfer->plan_emergencia) ?></td>
                <td><?= h($transfer->dependientes_directos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transfer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transfer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id)]) ?>
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
