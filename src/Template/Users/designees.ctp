     <div class = "row">
        <div class = "small-9 large-push-1 columns">          
             <strong>Personas asignadas a la profesional: </strong> <?php echo $user->username ?> <br>
        </div>
                <hr>
     </div>
     
      <div class = "container">
          <?php foreach ($designeesData as $designeeData): ?> 
                    <?php foreach ($people as $person): ?>
                     <?php 
                    if ($designeeData->person_id == $person->id): ?>
                        <div class = "row">
                             <div class = "large-8-push-2 small-6-push-1 medium-6-push-1 columns box"> 
                                    <strong>Nombre: </strong><?php echo $person->nombre;?> <?= $this->Html->link(__(<?php echo $person->nombre;?>), ['action' => 'designees', $user->id]) ?> <br> 
                                    <strong>Apellidos: </strong><?php echo $person->apellidos;?><br>
                                    <strong>Cédula: </strong><?php echo $person->identificacion;?><br>
                                    <strong>Fecha de Nacimiento: </strong><?php echo $person->fecha_de_nacimiento;?><br>
                                    <strong>Observaciones: </strong><?php echo $designeeData->observaciones;?><br>
                             </div>
                             
                         </div>
                         <hr>
                          <?php endif; ?>
                    <?php endforeach; ?>
            <?php endforeach; ?>
    </div>   
   