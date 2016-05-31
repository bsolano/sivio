     <title>
        <?php $this->assign('title', 'Personas asignadas'); ?>
    </title>
    
             <strong>Personas asignadas a la profesional: </strong> <?php echo $user->username ?> <br>
             <hr>
         <table>
            <tr>
                <th>Nombre Completo</th>
                <th>Identificación</th>
                <th>Fecha de Nacimiento</th>
                <th>Observaciones</th>
            </tr>
              <?php if ($designeesData != null && $people != null ): ?>
                  <?php foreach ($designeesData as $designeeData): ?> 
                          <?php $stop = false; ?>
                            <?php foreach ($people as $person): ?>
                                 <?php if ($designeeData->person_id == $person->id && $stop == false ): ?>
                                        <?php $stop = true; ?>
                                        <tr> 
                                                   <!-- El link debe redigir al expediente de la persona, pero como aún no está esa parte, lo redirigo al resumen -->
                                                   <td> <?= $this->Html->link($person->nombre . " " . $person->apellidos, ['controller' => 'People', 'action' => 'summaryview', $person->id]) ?> </td>
                                                   <td> <?php echo $person->identificacion;?> </td>
                                                   <td> <?php echo $person->fecha_de_nacimiento;?> </td>
                                                   <td> <?php echo $designeeData->observaciones;?></td>
                                        </tr>
                                  <?php endif; ?>
                            <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>