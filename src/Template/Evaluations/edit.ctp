<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evaluation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Advocacies'), ['controller' => 'Advocacies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Advocacy'), ['controller' => 'Advocacies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Edit Evaluation') ?></legend>
        <?php
            echo $this->Form->input('people_id', ['options' => $people, 'empty' => true]);
            echo $this->Form->input('horario_habil');
            echo $this->Form->input('disponibilidad');
            echo $this->Form->input('tipo');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('nombre_locutor_coavif');
            echo $this->Form->input('fecha_inicio', ['empty' => true]);
            echo $this->Form->input('fecha_fin', ['empty' => true]);
            echo $this->Form->input('advocacy_id', ['options' => $advocacies, 'empty' => true]);
            echo $this->Form->input('institucion_referente');
            echo $this->Form->input('persona_referente');
            echo $this->Form->input('telefono_referente');
            echo $this->Form->input('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
