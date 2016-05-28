<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internal References'), ['controller' => 'InternalReferences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['controller' => 'InternalReferences', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ubicacion') ?></th>
            <td><?= h($location->ubicacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internal References') ?></h4>
        <?php if (!empty($location->internal_references)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Person Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Telefono') ?></th>
                <th><?= __('Oficina') ?></th>
                <th><?= __('Location Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->internal_references as $internalReferences): ?>
            <tr>
                <td><?= h($internalReferences->id) ?></td>
                <td><?= h($internalReferences->person_id) ?></td>
                <td><?= h($internalReferences->user_id) ?></td>
                <td><?= h($internalReferences->telefono) ?></td>
                <td><?= h($internalReferences->oficina) ?></td>
                <td><?= h($internalReferences->location_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternalReferences', 'action' => 'view', $internalReferences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternalReferences', 'action' => 'edit', $internalReferences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternalReferences', 'action' => 'delete', $internalReferences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalReferences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
