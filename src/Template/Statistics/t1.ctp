

<fieldset>
    <h3><?= __('Resultados') ?></h3>
    <table cellpadding="0" cellspacing="0">

        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Identificación')       ?></th>
                <th><?= $this->Paginator->sort('Nombre') ?></th>
                <th><?= $this->Paginator->sort('Nacionalidad') ?></th>
                <th><?= $this->Paginator->sort('Ocupación') ?></th>
                <th><?= $this->Paginator->sort('Estado Civil') ?></th>
                <th><?= $this->Paginator->sort('Escolaridad') ?></th>
                <th><?= $this->Paginator->sort('Edad') ?></th>
                
            </tr>
        </thead>
        <tbody>
           <?php 
           

            foreach ($result as $results): ?>
                <tr>
                    <td><?= h($results->identificacion) ?></td>
                    <td><?= h($results->nombre) ?></td>
                    <td><?= h($results->nacionalidad) ?></td>
                    <td><?= h($results->ocupacion) ?></td>
                    <td><?= h($results->estado_civil) ?></td>
                    <td><?= h($results->escolaridad) ?></td>
                    <td><?= h($results->edad) ?></td>
                   
            <?php endforeach; ?>
          
        </tbody>
    </table>
         <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</fieldset>



