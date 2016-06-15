


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
                   <div class = "small-11 small-centered columns content" >  
                         <legend><h3><?php echo $year ?></h3> </legend> 
                         <hr>
                    </div>
          </div>
                    <div class = "small-9 large-push-1"> <strong>Consultas: </strong> </div>
                    <?php foreach ($atentions as $atention): ?>
                     <?php 
                        if ($atention->fecha_inicio->format('Y') == $year): ?>
                            <div class = "row">
                                 <div class = "small-6 large-centered columns box_summary"> 
                                        <!--Each atenttion will be a row-->
                                   
                                        <strong>Tipo de asesoramiento: </strong><?php echo $atention->tipo;?><br>
                                        <strong>Persona encargada: </strong><?php echo $atention->nombre_locutor_coavif;?><br>
                                        <strong>Observaciones: </strong><?php echo $atention->observaciones;?><br>
                                 </div>
                                 <br>
                             </div>
                          <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if ($deOCes != null): ?>
                       <div class = "small-9 large-push-1"> <strong>Atenciones: </strong> </div>
                       <?php foreach ($deOCes as $deOCe): ?>
                            <?php if ($deOCe->created->format('Y') == $year): ?>
                                <div class = "row">
                                     <div class = "small-6 large-centered columns box_summary"> 
                                            <!--Each atenttion will be a row-->
                                       
                                            <strong>Lugar: </strong><?php echo $deOCe->tipo;?><br>
                                            <?php if (preg_match("/CEAAM(.)*/", $deOCe->tipo )): ?>
                                                <strong>Sede: </strong><?php echo $deOCe->datos_adicionales;?><br>
                                            <?php else: ?>
                                                <strong>Tipo: </strong><?php echo $deOCe->datos_adicionales;?><br>
                                            <?php endif; ?>
                                            <strong>Fecha: </strong><?php echo $deOCe->created;?><br>
                                            
                                     </div>
                                     
                                 </div>
                          <?php endif; ?>
                       <?php endforeach; ?>
                    <?php endif; ?>
            <?php endforeach; ?>
    </div>   
   
       



