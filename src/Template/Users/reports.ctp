<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->

<div class="large-4 small-4">
<?php 
echo "<legend></legend><br>";
$crit = ['Dia', 'Mes', 'Situacion conyugal', 'Ocupacion', 'Escolaridad', 'Nacionalidad', 'Edad'];
echo $this->Form->input('criterio', array(
        'label' => 'Seleccione el criterio de busqueda',
        'type' => 'select',
        'options' => $crit, //Muestra las opciones
        //'required'=>'required' // Para mostrar el parentesis rojo
    )
);
                
?>
<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<!--<div id="footer">Hola esto es un footer</div> -->

</body>
</html>