<h1>Resultados</h1>

<! Prueba de radio select de BRAYAN >
<! Hay que revisar este ctp ya que dependiendo del primer resultado no se muestra los demás. >
<?php if($people->count()): ?>
<input style="margin: 10px 5px" type="button" value="Atención" class="secondary button float-right" onclick='esAtencion()'/>
<input style="margin: 10px 5px" type="button" value="Consulta" class="secondary button float-right" onclick='esConsulta()'/>
<table>
    <tr><th width="100">Seleccione</th><th>Nombre Completo</th><th>Fecha de Nacimiento</th><th>Identificacion</th></tr>
    <?php foreach ($people as $person): ?>
        <tr><td class="text-center"><input type="radio" name="usuaria" value="<?php echo $person->id; ?>" /></td><td><?php echo $person->nombre.' '.$person->apellidos; ?></td><td><?php echo $person->fecha_de_nacimiento; ?></td><td><?php echo $person->identificacion; ?></td></tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No hay registro</p>
<?php endif; ?>

<?php unset($people); ?>