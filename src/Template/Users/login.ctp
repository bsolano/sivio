<?= $this->Form->create('User', ['url' => 'users/login']) ?>
<fieldset>
    <legend><?= __('Login') ?></legend>
    <?= $this->Form->input('username') ?>
    <?= $this->Form->input('password') ?>
    <?= $this->Form->button(__('Login')); ?>
</fieldset>
<?= $this->Form->end() ?>