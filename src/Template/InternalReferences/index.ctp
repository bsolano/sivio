

<div class="row">

    <h3><?= __('Referencias Internas') ?></h3>
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
            </tr>
        </thead>
            <?php if  ($internalReferences != null) {  ?>
        <tbody>
         
            <?php foreach ($internalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id.' '.$internalReference->person->nombre.' '.$internalReference->person->apellidos, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->username, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= h($internalReference->oficina) ?></td>
                <td><?= $internalReference->has('location') ? $this->Html->link($internalReference->location->ubicacion, ['controller' => 'Locations', 'action' => 'view', $internalReference->location->id]) : '' ?></td>
                <td><?= $internalReference->has('group') ? $this->Html->link($internalReference->group->name, ['controller' => 'Groups', 'action' => 'view', $internalReference->group->id]) : '' ?></td>
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