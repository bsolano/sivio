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

<div class="row" id= "fecha">  
        <?php
                /*
                echo $this->Form->input('Legal', array(
                        'label' => 'Legal',
                        'type' => 'select',
                        'multiple' => 'checkbox',
                        //'options' => $legal,
                        //'required'=>'required'
                        )
                ); */
                
                /*
                
                echo $this->Form->input('dia',['label'=>'Día']);
                //echo $this->Form->create($user);
                // Text
                echo $this->Form->input('username');
                // Password
                echo $this->Form->input('password');
                // Day, month, year, hour, minute, meridian
                echo $this->Form->input('approved');
                // Textarea
                echo $this->Form->input('quote');
                echo $this->Form->button('Add');
                echo $this->Form->input('birth_dt', [
                    'label' => 'Date of birth',
                    'minYear' => date('Y') - 70,
                    'maxYear' => date('Y') - 18,
                ]);
                echo $this->Form->input('name', [
                    'label' => [
                        'class' => 'thingy',
                        'text' => 'The User Alias'
                    ]
                ]);
                
                $sizes = ['s' => 'Small', 'm' => 'Medium', 'l' => 'Large'];
                //Un form con select del size de un arreglo de sizes, el default es m
                echo $this->Form->select('size', $sizes, ['default' => 'm']);
                
                echo $this->Form->time('close_time', [
                    'value' => '13:30:00'
                ]);
                
                */
                
                /*When passed to a select list, this creates a blank option with 
                an empty value in your drop down list. If you want to have a 
                empty value with text displayed instead of just a blank option, 
                pass in a string to empty: */
                
                /*
                
                echo $this->Form->select(
                    'field',
                    [1, 2, 3, 4, 5],
                    ['empty' => '(choose one)']
                );
                
                echo $this->Form->input('dia',['timeFormat','label'=>'Día']);
                
                */
                
                //Options can also supplied as key-value pairs.

                /*$options['hiddenField'] For certain input types (checkboxes, radios) 
                a hidden input is created so that the key in $this->request->data 
                will exist even without a value specified: */
                
                //<input type="hidden" name="published" value="0" />
                //<input type="checkbox" name="published" value="1" />
                
                /*
                echo $this->Form->checkbox('published', [
                    'value' => 'Y',
                    'hiddenField' => 'N',
                ]);
                
                */
                
                echo $this->Form->input('fecha_nacimiento', ['type'=>'date','label'=>'Fecha de Nacimiento']);
                
                echo $this->Form->radio(
                    'favorite_color',
                    [
                        ['value' => 'r', 'text' => 'Red', 'style' => 'color:red;'],
                        ['value' => 'u', 'text' => 'Blue', 'style' => 'color:blue;'],
                        ['value' => 'g', 'text' => 'Green', 'style' => 'color:green;'],
                    ]
                );
                
                // Select picker
                
                $options = ['M' => 'Male', 'F' => 'Female'];
                echo $this->Form->select('gender', $options);
                echo $this->Form->end();
                

        ?> 
</div>

<?php echo $this->fetch('content'); ?>

<!-- Add a footer to each displayed page -->
<!--<div id="footer">Hola esto es un footer</div> -->

</body>
</html>