<?= $this->Form->create('User', ['url' => 'users/login']) ?>
<div class="large-4 large-centered small-4 columns">
    <fieldset>
        <legend>Acceso de usuario</legend>
            <?= $this->Form->input('username', ['label' => 'Nombre de usuario']) ?>
            <?= $this->Form->input('password', ['label' => 'Clave']) ?>
            
            <?=
           //print_r($locations);
            $this->Form->input(
                        'location_id',
                        array('label' => 'Unidad de Trabajo','class' => 'proClass','options' => $locations)
                        
                    );
            ?>
            
            <?= $this->Form->button('Acceder', ['class' => 'button']); ?>

    </fieldset>
</div>
<div class="large-4 small-4 columns"> </div>
<div class="large-4 small-4 columns"> </div>    
<?= $this->Form->end() ?>