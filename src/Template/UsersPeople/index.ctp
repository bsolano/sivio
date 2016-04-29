<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Html->link(__('Nueva Atención'), ['action' => 'add']) ?></li>
        
    </ul>
</nav>
<div class="usersPeople index large-9 medium-8 columns content">
    <h3><?= __('Atenciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersPeople as $usersPerson): ?>
            <tr>
                <td><?= $this->Number->format($usersPerson->id) ?></td>
                <td><?= $usersPerson->has('user') ? $this->Html->link($usersPerson->user->id, ['controller' => 'Users', 'action' => 'view', $usersPerson->user->username]) : '' ?></td>
                <td><?= $usersPerson->has('person') ? $this->Html->link($usersPerson->person->id, ['controller' => 'People', 'action' => 'view', $usersPerson->person->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersPerson->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersPerson->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPerson->id)]) ?>
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
