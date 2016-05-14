<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit External Reference'), ['action' => 'edit', $externalReference->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete External Reference'), ['action' => 'delete', $externalReference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $externalReference->id)]) ?> </li>
        <li><?= $this->Html->link(__('List External References'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New External Reference'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('PDF'), ['action' => 'pdf', $externalReference->id]) ?> </li>
    </ul>
</nav>
<div class="externalReferences view large-9 medium-8 columns content">
    <h3><?= h($externalReference->id) ?></h3>
    <legend><?= __('Persona') ?></legend>
    <table class="vertical-table">
         
         <tr>
            <th><?= __('Identificación') ?></th>
            <td><?= $externalReference->has('person') ? $this->Html->link($externalReference->person->id, ['controller' => 'People', 'action' => 'view', $externalReference->person->id]) : '' ?></td>
        </tr>
         <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($externalReference->persona) ?></td>
        </tr>
       
       
        <tr>
            <th><?= __('Teléfono') ?></th>
            <td><?= h($externalReference->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Edad') ?></th>
            <td><?= h($externalReference->edad) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($externalReference->nacionalidad) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($externalReference->direccion) ?></td>
        </tr>
        </table>
        
        
         <legend><?= __('Institución') ?></legend>
         
         <table class="vertical-table">
         <tr>
            <th><?= __('Receptor') ?></th>
            <td><?= h($externalReference->receptor) ?></td>
        </tr>
        <tr>
            <th><?= __('Institución') ?></th>
            <td><?= h($externalReference->institucion) ?></td>
        </tr>
        <tr>
            <th><?= __('Correo') ?></th>
            <td><?= h($externalReference->correo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($externalReference->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($externalReference->observacion)); ?>
    </div>
</div>
