<h1>Resultados</h1>

<! Prueba de radio select de BRAYAN >

<?php if(count($people===0)): ?>
    <form method="post" action="">
        
        <table>
            <tr><th width="100">Seleccione</th><th>Nombre Completo</th><th>Fecha de Nacimiento</th><th>Identificacion</th></tr>
            <?php foreach ($people as $person): ?>
                <tr><td class="text-center"><input type="radio" name="usuaria" value=<?php echo $person->id; ?></input></td><td><?php echo $person->nombre.' '.$person->apellidos; ?></td><td><?php echo $person->fecha_de_nacimiento; ?></td><td><?php echo $person->identificacion; ?></td></tr>
            <?php endforeach; ?>
        </table>
    
        <input type="submit" value="Atención"/>
        
    </form>
<?php else: ?>
    <?php echo "No se encontraron registros" ?>
<?php endif; ?>

<?php unset($people); ?>