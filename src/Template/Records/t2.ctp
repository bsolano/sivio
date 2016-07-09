<fieldset>
        <h3><?= __('Historial de Consultas') ?></h3>
            <div class="externalReferences index large-6 medium-6 columns content">
            <?php
            
             $c= $con->toArray(); 
         //      echo '<pre>'; print_r($c); echo '</pre>';  
             $n = 0;
            ?> 
            
            </div>
        <h3><?= __('') ?></h3>
      

    <table cellpadding="0" cellspacing="0">

        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id persona')       ?></th>
                <th><?= $this->Paginator->sort('Fecha') ?></th>
                <th><?= $this->Paginator->sort('Institución referente') ?></th>
                <th><?= $this->Paginator->sort('Valoracion de riesgo') ?></th>
                <th><?= $this->Paginator->sort('Vinculo con la persona agresora') ?></th>
                
            </tr>
        </thead>
        <tbody>
           <?php 
           

            foreach ($c as $consulta):
            
            if($consulta['person_id'] == $pi){
            ?>
            <tr>
        
                    <td><?= h($consulta->person_id) ?></td>
                    <td><?= h($consulta->fecha) ?></td>
                    <td><?= h($consulta->institucion_que_refiere) ?></td>
                    <td><?= h($consulta->valoracion_de_riesgo) ?></td>
                    <td><?= h($consulta->vinculo_con_persona_agresora) ?></td>
             </tr>
                   
            <?php
            }
            $n++;
            endforeach; ?>
          
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


