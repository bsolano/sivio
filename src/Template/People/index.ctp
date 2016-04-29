<div class="row">
    <div class="people form large-12 medium-10 columns content">
        <?= $this->Form->create('', ['type' => 'get', 'url' => ['action' => 'records_search']]); ?>
            <fieldset>
                <legend>
                    <?= __('Buscar') ?>
                </legend>
                <?php
                echo $this->Form->input('records_search', ['placeholder' => 'Digite el nombre o el número de cédula', 'label' => '']);
                //'required' => true
                ?>
            </fieldset>
            <?= $this->Form->button(__('Buscar')) ?>
                <?= $this->Form->end() ?>

    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <h1>Resultados</h1>
    </div>

</div>