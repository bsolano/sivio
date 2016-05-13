<div class="consultations form large-centered large-9 medium-8 columns content">
    <h2>Consulta para <?php echo $person_id ?></h2>
    <?= $this->Form->create($consultation) ?>
    <fieldset>
        <legend><?= __('Add Consultation') ?></legend>
        <?php
            echo $this->Form->input('tipo');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('person_id', ['hidden' => true, 'value' => $person_id]);
            echo $this->Form->input('situacion_enfrentada', ['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
