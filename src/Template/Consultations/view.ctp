<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consultation'), ['action' => 'edit', $consultation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consultation'), ['action' => 'delete', $consultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consultations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consultations view large-9 medium-8 columns content">
    <h3><?= h($consultation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($consultation->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $consultation->has('user') ? $this->Html->link($consultation->user->id, ['controller' => 'Users', 'action' => 'view', $consultation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $consultation->has('person') ? $this->Html->link($consultation->person->id, ['controller' => 'People', 'action' => 'view', $consultation->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Situacion Enfrentada') ?></th>
         
            <td><?php foreach($consultation->situacion_enfrentada as $consult): ?> 
            <ul><?= h($consult)  ?></ul>
            <?php endforeach?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($consultation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($consultation->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($consultation->modified) ?></td>
        </tr>
    </table>
</div>
