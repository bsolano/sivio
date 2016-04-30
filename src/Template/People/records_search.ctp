<h1>Resultados</h1>

<table>
    <tr><th>Nombre Completo</th><th>Fecha de Nacimiento</th><th>Identificacion</th></tr>
    <?php foreach ($people as $person): ?>
        <tr><td><?php echo $person->nombre.' '.$person->apellidos; ?></td><td><?php echo $person->fecha_de_nacimiento; ?></td><td><?php echo $person->identificacion; ?></td></tr>
    <?php endforeach; ?>
</table>



<?php unset($people); ?>