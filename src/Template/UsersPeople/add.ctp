<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Personas'), ['controller' => 'People', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($usersPerson) ?>
    <fieldset>
        <legend><?= __('Atención') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people]);
            echo $this->Form->input('observaciones');
            echo $this->Form->button('Expediente',['onclick'=> 'window.open(\'http://www.w3schools.com\',\'SATANAS\',\'width=600,height=500\')','type'=>'button']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
