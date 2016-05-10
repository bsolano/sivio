<?= $this->Form->create('User', ['url' => 'users/login']) ?>
<fieldset>
    <legend>Acceso de usuario</legend>
    <?= $this->Form->input('username', ['label' => 'Nombre de usuario']) ?>
    <?= $this->Form->input('password', ['label' => 'Clave']) ?>
    <?= $this->Form->button('Acceder', ['class' => 'button']); ?>
</fieldset>
<?= $this->Form->end() ?>