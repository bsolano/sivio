<?php

    if($_POST['accion'] == "Consulta") {
        echo "Es una Consulta para ".$person->nombre;
    } else if($_POST['accion'] == "Atención") {
        echo "Es una Atención para ".$person->nombre;
    }

?>