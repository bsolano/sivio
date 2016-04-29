<h1>Resultados</h1>

<table>
    <?php foreach ($people as $person): ?>
        <tr><td><?php echo $person->nombre; ?></td><td><?php echo $person->apellidos; ?></td></tr>
    <?php endforeach; ?>
</table>



<?php unset($people); ?>