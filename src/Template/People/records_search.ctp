<h2>Resultados</h2>

<?php if($people->count()): ?>
    
    <input id="bnt_Atencion" style="margin: 10px 5px; display: none;" type="button" value="Atención" class="secondary button float-right" onclick='esAtencion()'/>
    <input id="bnt_Consulta" style="margin: 10px 5px; display: none;" type="button" value="Consulta" class="secondary button float-right" onclick='esConsulta()'/>
    
    <table>
        <tr><th width="100">Seleccione</th><th>Nombre Completo</th><th>Fecha de Nacimiento</th><th>Identificacion</th></tr>
        <?php foreach ($people as $person): ?>
            <tr><td class="text-center"><input type="radio" name="usuaria" value="<?php echo $person->id; ?>" onclick='usuariaSelect()'/></td><td><?php echo $person->nombre.' '.$person->apellidos; ?></td><td><?php echo $person->fecha_de_nacimiento; ?></td><td><?php echo $person->identificacion; ?></td></tr>
        <?php endforeach; ?>
    </table>
    
<?php else: ?>
    
    <p>No hay registro <br/> Cree una nueva usuaria.</p>
    
<?php endif; ?>

<?php unset($people); ?>