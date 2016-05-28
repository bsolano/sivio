

<div class="row">

    <h3><?= __('Administración de Referencias Internas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_nombre','Persona') ?></th>
                <th><?= $this->Paginator->sort('user_username', 'Usuario') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('oficina') ?></th>
                <th><?= $this->Paginator->sort('location_id', 'Localizacion') ?></th>
                <th><?= $this->Paginator->sort('group_id','Grupo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
            <?php if  ($internalReferences != null) {  ?>
        <tbody>
         
            <?php foreach ($internalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->id, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= h($internalReference->oficina) ?></td>
                <td><?= $internalReference->has('location') ? $this->Html->link($internalReference->location->id, ['controller' => 'Locations', 'action' => 'view', $internalReference->location->id]) : '' ?></td>
                <td><?= $internalReference->has('group') ? $this->Html->link($internalReference->group->id, ['controller' => 'Groups', 'action' => 'view', $internalReference->group->id]) : '' ?></td>
                <td class="actions">
                <?php if ($groupName == '1') { // ?>
                    <?= $this->Form->postLink(__('Aceptar'), ['action' => 'add', $internalReference->id], ['confirm' => __('Está segura que desea aceptar a # {0}?', $internalReference->id)]) ?>
                    <?= $this->Form->postLink(__('Reasignar'), ['action' => 'edit', $internalReference->id], ['confirm' => __('Está segura que desea reasignar a # {0}?', $internalReference->id)]) ?>
                    <?php } else { ?>
                    <?= $this->Form->postLink(__('Aceptar'), ['action' => 'add', $internalReference->id], ['confirm' => __('Está segura que desea aceptar a # {0}?', $internalReference->id)]) ?>
                    <?= $this->Form->postLink(__('Reasignar'), ['action' => 'edit', $internalReference->id], ['confirm' => __('Está segura que desea reasignar a # {0}?', $internalReference->id)]) ?>
                    <?php } ?>
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
       <?php } //end del if internalreferences ?>
</div>

</row>