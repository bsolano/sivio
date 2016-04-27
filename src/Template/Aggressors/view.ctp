<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aggressor'), ['action' => 'edit', $aggressor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aggressor'), ['action' => 'delete', $aggressor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggressor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aggressors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aggressor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aggressors view large-9 medium-8 columns content">
    <h3><?= h($aggressor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Vinculo') ?></th>
            <td><?= h($aggressor->vinculo) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Relacion') ?></th>
            <td><?= h($aggressor->tiempo_relacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Agresion') ?></th>
            <td><?= h($aggressor->tiempo_agresion) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Separaciones') ?></th>
            <td><?= h($aggressor->num_separaciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $aggressor->has('person') ? $this->Html->link($aggressor->person->id, ['controller' => 'People', 'action' => 'view', $aggressor->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Person Id') ?></th>
            <td><?= $this->Number->format($aggressor->person_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($aggressor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('People Id') ?></th>
            <td><?= $this->Number->format($aggressor->people_id) ?></td>
        </tr>
    </table>
</div>
