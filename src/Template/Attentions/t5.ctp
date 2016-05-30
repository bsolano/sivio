<?php
    $int = $persona->num_hijos_ceaam;
    echo  "Numero de Hijos registrados: ".$int."<br>";
    for ( $i = 1; $i <= $int;  $i++ )  {
        echo '<hr>';
        include 'hijos.ctp';
    }
?>
