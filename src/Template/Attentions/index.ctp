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
                <td><button name="at" class = "button" onclick='editarAtencion(<?= $attention['person']['person_id'] ?>, <?= $attention['id'] ?>)'>Editar</button> </td>
                <td><?php echo $attention['person']['identificacion']; ?></td>
                <td><?php echo $attention['person']['nombre']." ".$attention['person']['apellidos']; ?></td>
                <td><?php echo $attention['user']['username']; ?></td>
                <td><?php echo $attention['tipo']; ?></td>
                <td>
                    <div class= "event" >
                        <?php 
                            if($attention['person']['acepta_seguimiento'] == 1): 
                                $numSegs = sizeof($attention['followups']);
                                for($i = 1; $i <=4 ; $i++){
                                    $claseBoton = ($i <= $numSegs) ? "primary button" : "hollow primary button";
                                    $fId        = ($i <= $numSegs) ? $attention['followups'][$i-1]['id'] : null; 
                                    $disabled   = ($i >  $numSegs+1) ? "disabled" : " ";
                                    $funct =  ($fId == null) ?  
                                            "noHay(".$attention['log']['person_id'].','.$attention['id'].')'     :
                                            "darSeguimiento(".$attention['person']['id'].','.$fId.','.$attention['id'].')' ; ?>
                        
                                    <button name="at" class = "<?= $claseBoton ?>" style ="width: 20%" onclick= "<?= $funct ?>" <?= $disabled ?> ><?= $i ?> </button>  <?php
                                }
                            else:
                                echo '<b style = "color:red"> No acepta seguimientos </b>';
                            endif; 
                        ?>
                            
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
    function darSeguimiento(id, fId, aId) {
        document.location = "/attentions/followup/" + id + "/" + aId + "/" + fId;
    }
    
    function noHay(id, aId) {
        swal({
          title: "No existe este seguimiento",
          text: "Desea Crearlo?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Sí",
          cancelButtonText: "No",
          closeOnConfirm: false,
          showLoaderOnConfirm: true
        },
        
        // si la respuesta es 'si'
        function(){
            document.location = "/attentions/followup/" + id + "/" + aId;
        });
    }
    
    function editarAtencion(id, atId) {
        document.location = "/attentions/edit/" + id + "/" + atId;
    }
    
</script>