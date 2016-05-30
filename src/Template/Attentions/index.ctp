<div class="attentions index large-9 medium-8 columns content" style = "width: 100%">
    <h3><?= __('Atenciones') ?></h3>
    <input id="botonSeg" style="margin: 10px 5px; display: none;" type="button" value="Dar Seguimiento" class="secondary button float-right" onclick='darSeguimiento()'/>
    <table cellpadding="0" cellspacing="0" span="1" width="100%">
        <thead>
            <tr>
                <th width="10%"><?php echo "Selección"; ?></th>
                <th width="15%"><?php echo "Cédula"; ?></th>
                <th width="25%"><?= $this->Paginator->sort('Persona') ?></th>
                <th width="30%"><?= $this->Paginator->sort('Encargado') ?></th>
                <th width="10%"><?= $this->Paginator->sort('Tipo') ?></th>
                <th width="10%"><?php echo "Seguimientos"; ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attentions as $attention): ?>
            <tr>
                <tr><td class="text-center"><input type="radio" name="at" value="<?php echo $attention->person->id; ?>" onclick='selectAtencion()'/></td>                
                <td><?php echo $attention->attention->identificacion; ?></td>
                <td><?php echo $attention->person->nombre." ".$attention->person->apellidos; ?></td>
                <td><?php echo $attention->attention->user->username; ?></td>
                <td><?php echo $attention->attention->tipo; ?></td>
                <td><?php echo 3;?></td> <!-- por arreglar -->
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
    function selectAtencion(){
        document.getElementById("botonSeg").style.display = "block";

    }

    function darSeguimiento() {
        document.location = "/attentions/followup/" + document.querySelector('input[name = "at"]:checked').value;
    }
</script>