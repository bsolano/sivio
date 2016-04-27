<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Followup'), ['action' => 'edit', $followup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Followup'), ['action' => 'delete', $followup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Followups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Followup'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="followups view large-9 medium-8 columns content">
    <h3><?= h($followup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $followup->has('person') ? $this->Html->link($followup->person->id, ['controller' => 'People', 'action' => 'view', $followup->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Medio Comunicacion') ?></th>
            <td><?= h($followup->medio_comunicacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Aspectos Sociales') ?></th>
            <td><?= h($followup->aspectos_sociales) ?></td>
        </tr>
        <tr>
            <th><?= __('Apoyo Institucional') ?></th>
            <td><?= h($followup->apoyo_institucional) ?></td>
        </tr>
        <tr>
            <th><?= __('Legales') ?></th>
            <td><?= h($followup->legales) ?></td>
        </tr>
        <tr>
            <th><?= __('Seguimiento Kit') ?></th>
            <td><?= h($followup->seguimiento_kit) ?></td>
        </tr>
        <tr>
            <th><?= __('Seguimiento Referencia') ?></th>
            <td><?= h($followup->seguimiento_referencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar Atencion') ?></th>
            <td><?= h($followup->lugar_atencion) ?></td>
        </tr>
        <tr>
            <th><?= __('Enfrenta Violencia') ?></th>
            <td><?= h($followup->enfrenta_violencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Atencion Especializada') ?></th>
            <td><?= h($followup->atencion_especializada) ?></td>
        </tr>
        <tr>
            <th><?= __('Advocacy') ?></th>
            <td><?= $followup->has('advocacy') ? $this->Html->link($followup->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $followup->advocacy->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($followup->id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($followup->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($followup->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Seguridad') ?></th>
            <td><?= $followup->seguridad ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Convivencia') ?></th>
            <td><?= $followup->convivencia ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($followup->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($followup->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
