     <title>
        <?php $this->assign('title', 'Personas asignada'); ?>
    </title>
    
     <div class = "row">
        <div class = "small-9 large-push-1 columns">          
             <strong>Personas asignadas a la profesional: </strong> <?php echo $user->username ?> <br>
        </div>
                <hr>
     </div>
     
      <div class = "container">
          <?php foreach ($designeesData as $designeeData): ?> 
                   <?php $stop = false; ?>
                    <?php foreach ($people as $person): ?>
                         <?php if ($designeeData->person_id == $person->id && $stop == false ): ?>
                                 <?php $stop = true; ?>
                                <div class = "row">
                                     <div class = "small-6 large-centered columns box_designees"> 
                                           <strong>Nombre completo: </strong>
                                           <!-- El link debe redigir al expediente de la persona, pero como aún no está esa parte, lo redirigo al resumen -->
                                           <?= $this->Html->link($person->nombre . " " . $person->apellidos, ['controller' => 'People', 'action' => 'summaryview', $person->id]) ?> <br>
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
   