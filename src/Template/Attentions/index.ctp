<div class="attentions index large-9 medium-8 columns content" style = "width: 100%">
    <h3><?= __('Atenciones') ?></h3>
    <input id="botonSeg" style="margin: 10px 5px; display: none;" type="button" value="Dar Seguimiento" class="secondary button float-right" onclick='darSeguimiento()'/>
    <table cellpadding="0" cellspacing="0" span="1" width="100%">
        <thead>
            <tr>
                <th width="10%"><?php echo "Acción"; ?></th>
                <th width="10%"><?php echo "Cédula"; ?></th>
                <th width="25%"><?= $this->Paginator->sort('Persona') ?></th>
                <th width="25%"><?= $this->Paginator->sort('Encargado') ?></th>
                <th width="15%"><?= $this->Paginator->sort('Tipo') ?></th>
                <th width="20%"><?php echo "Seguimientos"; ?></th>
            </tr>
        </thead>
        <tbody>
        
            <?php 
                foreach ($attentions as $attention): 
            ?>
            <tr>
                <td><button name="at" class = "button" onclick='editarAtencion(<?= $attention['log']['person_id'] ?>, <?= $attention['id'] ?>)'>Editar</button> </td>
                <td><?php echo $attention['log']['identificacion']; ?></td>
                <td><?php echo $attention['log']['nombre']." ".$attention['Logs']['apellidos']; ?></td>
                <td><?php echo $attention['user']['username']; ?></td>
                <td><?php echo $attention['tipo']; ?></td>
                <td>
                    <div class= "event" >
                        <?php 
                            if($attention['log']['acepta_seguimiento'] == 1): 
                                $numSegs = sizeof($attention['followups']);
                                for($i = 1; $i <=4 ; $i++){
                                    $claseBoton = ($i <= $numSegs) ? "secondary button" : "hollow secondary button";
                                    $fId        = ($i <= $numSegs) ? $attention['followups'][$i-1]['id'] : null;
                        ?>
                                    <button name="at" class = "<?= $claseBoton ?>" style ="width: 20%" onclick="darSeguimiento(<?= $attention['log']['person_id'].",".$fId ?>)"><?= $i ?></button> 
                        <?php
                                }
                            else: 
                        ?>
                            <b style = "color:red"> No acepta seguimientos </b>
                        <?php endif; ?>
                    </div>
                </td> <!-- por arreglar -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


<script type="text/javascript">
    function darSeguimiento(id, fId) {
        document.location = "/attentions/followup/" + id+ "/" + fId;
    }
    
    function editarAtencion(id, atId) {
        document.location = "/attentions/add/" + id + "/" + atId;
    }
    
</script>