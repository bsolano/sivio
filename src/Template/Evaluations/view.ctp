<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluation'), ['action' => 'edit', $evaluation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluation'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluations view large-9 medium-8 columns content">
    <h3><?= h($evaluation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $evaluation->has('person') ? $this->Html->link($evaluation->person->id, ['controller' => 'People', 'action' => 'view', $evaluation->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Horario Habil') ?></th>
            <td><?= h($evaluation->horario_habil) ?></td>
        </tr>
        <tr>
            <th><?= __('Disponibilidad') ?></th>
            <td><?= h($evaluation->disponibilidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($evaluation->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $evaluation->has('user') ? $this->Html->link($evaluation->user->id, ['controller' => 'Users', 'action' => 'view', $evaluation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre Locutor Coavif') ?></th>
            <td><?= h($evaluation->nombre_locutor_coavif) ?></td>
        </tr>
        <tr>
            <th><?= __('Advocacy') ?></th>
            <td><?= $evaluation->has('advocacy') ? $this->Html->link($evaluation->advocacy->id, ['controller' => 'Advocacies', 'action' => 'view', $evaluation->advocacy->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Institucion Referente') ?></th>
            <td><?= h($evaluation->institucion_referente) ?></td>
        </tr>
        <tr>
            <th><?= __('Persona Referente') ?></th>
            <td><?= h($evaluation->persona_referente) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono Referente') ?></th>
            <td><?= h($evaluation->telefono_referente) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evaluation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Inicio') ?></th>
            <td><?= h($evaluation->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Fin') ?></th>
            <td><?= h($evaluation->fecha_fin) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($evaluation->observaciones)); ?>
    </div>
</div>
