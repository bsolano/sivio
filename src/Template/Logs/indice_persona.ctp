<div class="logs index large-9 medium-8 columns content" style = "width: 100%">
    <?php
        $nombre_usuaria = $persona->nombre." ".$persona->apellidos;
        $titulo         = "Registros de " . $nombre_usuaria       ;
    ?>
    <h3><?= __($titulo) ?></h3>
    <input id="botonMas" style="margin: 10px 5px; display: none;" type="button" value="Ver más" class="secondary button float-right" onclick='verTodo()'/>
    <table cellpadding="0" cellspacing="0" span="1" width="100%">
        <tr>
            <th width="10%"><?= "Acción"                            ?></th>
            <th width="10%"><?= "Estado civil"                      ?></th>
            <th width="10%"><?= "Educación"                         ?></th>
            <th width="15%"><?= "Fecha de nacimiento"               ?></th>
            <th width="15%"><?= "Aseguramiento"                     ?></th>
            <th width="20%"><?= "Número de hijos/hijas"             ?></th>
            <th width="25%"><?= $this->Paginator->sort('Creado')    ?></th>
        </tr>
        <?php foreach ($logs as $log): ?>
            <tr><td class="text-center"><input type="radio" name="Mas" value="<?= $log->id ?>" onclick='mostrarMas()'/></td>
            <td><?= h($log->estado_civil                            ) ?></td>
            <td><?= h($log->educacion                               ) ?></td>
            <td><?= h($log->fecha_de_nacimiento                     ) ?></td>
            <td><?= h($log->condicion_aseguramiento                 ) ?></td>
            <td><?= h($log->num_hijos                               ) ?></td>
            <td><?= h($log->created                                 ) ?></td>
        <?php endforeach; ?>

</div>
<script type="text/javascript">
    
    function mostrarMas() {
        document.getElementById("botonMas").style.display = "block";
    }
    
    function verTodo() {
        window.location.replace("http://"+ window.location.hostname + "/logs/view/"+document.querySelector('input[name = "Mas"]:checked').value);
    }
</script>