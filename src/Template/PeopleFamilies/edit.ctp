<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peopleFamily->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peopleFamily->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People Families'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Families'), ['controller' => 'Families', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Family'), ['controller' => 'Families', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peopleFamilies form large-9 medium-8 columns content">
    <?= $this->Form->create($peopleFamily) ?>
    <fieldset>
        <legend><?= __('Edit People Family') ?></legend>
        <?php
            echo $this->Form->input('person_id', ['options' => $people, 'empty' => true]);
            echo $this->Form->input('family_id', ['options' => $families, 'empty' => true]);
            echo $this->Form->input('parentesco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
