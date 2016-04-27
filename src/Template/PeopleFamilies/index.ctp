<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Family'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleFamilies index large-9 medium-8 columns content">
    <h3><?= __('People Families') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('family_id') ?></th>
                <th><?= $this->Paginator->sort('parentesco') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleFamilies as $peopleFamily): ?>
            <tr>
                <td><?= $this->Number->format($peopleFamily->id) ?></td>
                <td><?= $peopleFamily->has('person') ? $this->Html->link($peopleFamily->person->id, ['controller' => 'People', 'action' => 'view', $peopleFamily->person->id]) : '' ?></td>
                <td><?= $peopleFamily->has('family') ? $this->Html->link($peopleFamily->family->id, ['controller' => 'Families', 'action' => 'view', $peopleFamily->family->id]) : '' ?></td>
                <td><?= h($peopleFamily->parentesco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleFamily->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleFamily->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleFamily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleFamily->id)]) ?>
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
