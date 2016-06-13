

<div class="row">

    <h3><?= __('Referencias Internas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_nombre','Usuaria') ?></th>
                <th><?= $this->Paginator->sort('user_username', 'Profesional que hizo la referencia') ?></th>
                <th><?= $this->Paginator->sort('persona_coordina', 'Persona con la cual se coordinó') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('location_id', 'Donde se hizo la referencia') ?></th>
                <th class="actions"><?= ('Acciones a realizar') ?></th>
            </tr>
        </thead>
            <?php if  ($internalReferences != null) {  ?>
        <tbody>
         
            <?php foreach ($internalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id.' '.$internalReference->person->nombre.' '.$internalReference->person->apellidos, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->username, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->persona_coordina) ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= $internalReference->has('location') ? $this->Html->link($internalReference->location->ubicacion, ['controller' => 'Locations', 'action' => 'view', $internalReference->location->id]) : '' ?></td>
                 <td class="actions">
                    <?= $this->Form->postLink(__('Aceptar'), ['controller' => 'Consultations', 'action' => 'add', $internalReference->id], ['confirm' => __('Está segura que desea aceptar la referencia interna de # {0}?', $internalReference->person->id.' '.$internalReference->person->nombre.' '.$internalReference->person->apellidos)]) ?>
                     <?= $this->Form->postLink(__('Rechazar'), ['action' => 'delete', $internalReference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internalReference->id)]) ?>
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