<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New People Advocacy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleAdvocacies index large-9 medium-8 columns content">
    <h3><?= __('People Advocacies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('advocacy_id') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peopleAdvocacies as $peopleAdvocacy): ?>
            <tr>
                <td><?= $peopleAdvocacy->has('person') ? $this->Html->link($peopleAdvocacy->person->id, ['controller' => 'People', 'action' => 'view', $peopleAdvocacy->person->id]) : '' ?></td>
                <td><?= $peopleAdvocacy->has('advocacy') ? $this->Html->link($peopleAdvocacy->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $peopleAdvocacy->advocacy->id]) : '' ?></td>
                <td><?= h($peopleAdvocacy->tipo) ?></td>
                <td><?= $this->Number->format($peopleAdvocacy->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peopleAdvocacy->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peopleAdvocacy->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peopleAdvocacy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peopleAdvocacy->id)]) ?>
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
