<?php 
    if($people->count()): 
?>
    <div class="row">
        <div class="large-6 large-left columns">
            <h2 style="margin: 10px 5px;" > Resultados (<?php echo $people->count(); ?>)</h2>
        </div>    
        <!--
            Los botones que generan la acción mencionada.
        -->
        <div class="large-6 large-right columns">
            <input id="bnt_Vista" style="margin: 10px 5px; display: none;" type="button" value="Ver Perfil" class="secondary button float-right" onclick='ver()'/>
            <input id="bnt_Expediente" style="margin: 10px 5px; display: none;" type="button" value="Expediente" class="secondary button float-right" onclick='expediente()'/>
            <input id="bnt_Atencion" style="margin: 10px 5px; display: none;" type="button" value="Atención" class="secondary button float-right" onclick='esAtencion()'/>
            <input id="bnt_Consulta" style="margin: 10px 5px; display: none;" type="button" value="Consulta" class="secondary button float-right" onclick='esConsulta()'/>        
        </div>
    </div>
    <table>
        <tr><th width="100">Seleccione</th><th>Nombre Completo</th><th>Fecha de Nacimiento</th><th>Identificacion</th></tr>
        <?php foreach ($people as $person): ?>
        <!--
            Se genera cada opción con un radioselect, si se selecciona se muestran los botones.
        -->
            <tr><td class="text-center"><input type="radio" name="usuaria" value="<?php echo $person->id; ?>" onclick='usuariaSelect()'/></td><td><?php echo $person->nombre.' '.$person->apellidos; ?></td><td><?php echo $person->fecha_de_nacimiento; ?></td><td><?php echo $person->identificacion; ?></td></tr>
        <?php endforeach; ?>
    </table>
    
<?php else: ?>
    
    <p>No hay registro <br/> Cree una nueva usuaria.</p>
    
<?php endif; ?>

<?php unset($people); ?>