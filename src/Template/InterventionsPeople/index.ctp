<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Interventions Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Interventions'), ['controller' => 'Interventions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Intervention'), ['controller' => 'Interventions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="interventionsPeople index large-9 medium-8 columns content">
    <h3><?= __('Interventions People') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('intervention_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_intervencion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($interventionsPeople as $interventionsPerson): ?>
            <tr>
                <td><?= $interventionsPerson->has('intervention') ? $this->Html->link($interventionsPerson->intervention->id, ['controller' => 'Interventions', 'action' => 'view', $interventionsPerson->intervention->id]) : '' ?></td>
                <td><?= $this->Number->format($interventionsPerson->id) ?></td>
                <td><?= $interventionsPerson->has('person') ? $this->Html->link($interventionsPerson->person->id, ['controller' => 'People', 'action' => 'view', $interventionsPerson->person->id]) : '' ?></td>
                <td><?= h($interventionsPerson->tipo_intervencion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $interventionsPerson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $interventionsPerson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $interventionsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interventionsPerson->id)]) ?>
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
