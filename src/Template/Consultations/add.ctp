<div class="consultations form large-9 medium-8 columns content">
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Add Consultation') ?></legend>
        <?php
            echo "Hola ".$usuaria." Aqui";
            echo $this->Form->input('person_id', ['type' => 'hidden', 'value' => $usuaria]);
            echo $this->Form->input('observaciones');
            echo $this->Form->input('tipo');
            echo $this->Form->input('user_id', ['type' => 'hidden', 'options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
