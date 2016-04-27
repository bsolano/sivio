<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Interventions Person'), ['action' => 'edit', $interventionsPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Interventions Person'), ['action' => 'delete', $interventionsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interventionsPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Interventions People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interventions Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Interventions'), ['controller' => 'Interventions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intervention'), ['controller' => 'Interventions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="interventionsPeople view large-9 medium-8 columns content">
    <h3><?= h($interventionsPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Intervention') ?></th>
            <td><?= $interventionsPerson->has('intervention') ? $this->Html->link($interventionsPerson->intervention->id, ['controller' => 'Interventions', 'action' => 'view', $interventionsPerson->intervention->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $interventionsPerson->has('person') ? $this->Html->link($interventionsPerson->person->id, ['controller' => 'People', 'action' => 'view', $interventionsPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Intervencion') ?></th>
            <td><?= h($interventionsPerson->tipo_intervencion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($interventionsPerson->id) ?></td>
        </tr>
    </table>
</div>
