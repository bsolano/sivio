

<div class="externalReferences view large-9 medium-8 columns content">
    <input type="button" value="Generar PDF" class="primary button float-right" onclick="pdf(<?= h($externalReference->id) ?>)"/>
    
    <input type="button" value="Enviar Correo" class="primary button float-right" onclick="correo(<?= h($externalReference->id) ?>)"/>
    <h3><?= h($externalReference->id) ?></h3>
    
    <table class="vertical-table">
         <?php  $p= $externalReference->toArray();
        
         
         ?>
         <tr>
            <th><?= __('Identificación') ?></th>
            <td<?= h($externalReference->identificacion) ?></td>
        </tr>
         <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($externalReference->persona) ?></td>
        </tr>
       
       
        <tr>
            <th><?= __('Teléfono') ?></th>
            <td><?= h($externalReference->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Edad') ?></th>
            <td><?= h($externalReference->edad) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($externalReference->nacionalidad) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($externalReference->direccion) ?></td>
        </tr>
        </table>
        
        
         <legend><?= __('Institución') ?></legend>
         
         <table class="vertical-table">
         <tr>
            <th><?= __('Receptor') ?></th>
            <td><?= h($externalReference->receptor) ?></td>
        </tr>
        <tr>
            <th><?= __('Institución') ?></th>
            <td><?= h($externalReference->institucion) ?></td>
        </tr>
        <tr>
            <th><?= __('Correo') ?></th>
            <td><?= h($externalReference->correo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($externalReference->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($externalReference->observacion)); ?>
    </div>
</div>
<script type="text/javascript">
    function pdf(referencia) {
       
                document.location = "/ExternalReferences/pdf/"+referencia;
       
    }
    
    function correo(id) {
       
                document.location = "/ExternalReferences/correo/"+id;
       
    }
</script>