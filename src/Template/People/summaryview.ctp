
<br>

 <!--Sale cortado-->



     <!--This will be the container years-->
     <div class = "row">
            <div class = "small-9 large-push-1 columns">          
                 <strong>Nombre:</strong><?php echo $person->nombre." ".$person->apellidos; ?><br>
                 <strong>Identificación: </strong><?php echo $person->id;?><br>
                 <strong>Fecha de nacimiento: </strong><?php echo $person->fecha_de_nacimiento; ?><br>
                 
            </div>
            <hr>
     </div>
      <div class = "container">
          <?php foreach ($years as $year): ?>
          <div class = "row">
                   <div class = "large-12 medium columns" > 
                         <legend><h3><?php echo $year ?></h3> </legend> 
                         <hr>
                    </div>   
                    <?php foreach ($atentions as $atention): ?>
                        <div class = "row">
                             <div class = "small-9 large-push-1 columns box"> 
                                    <!--Each atenttion will be a row-->
                                <?php 
                                if ($atention->fecha_inicio->format('Y') == $year): ?>
                                    <strong>Tipo de atención: </strong><?php echo $atention->tipo;?><br>
                                    <strong>Persona encargada: </strong><?php echo $atention->nombre_locutor_coavif;?><br>
                                    <strong>Observaciones: </strong><?php echo $atention->observaciones;?><br>
                                    
                                    <?php endif; ?>
                             </div>
                             
                         </div>
                    <?php endforeach; ?>
 
                    </div>
            <?php endforeach; ?>
            </div>   
      </div>
       



