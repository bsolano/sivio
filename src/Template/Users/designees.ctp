<?php 
    /** 
    * designees ctp
    * Vista de designees, construye una tabla a partir de las personas asignadas al usuario logueado.
    * @author Brandon Madrigal
    */
?>
     
     <?php $uid = $this->request->session()->read('Auth.User.id'); ?>
     <?php if ($uid == $user->id): ?>
     <title>
        <?php $this->assign('title', 'Personas asignadas'); ?>
     </title>
     <strong>Personas asignadas a la profesional: </strong> <?php echo $user->username ?> <br>
     <br>
     
         <table>
            <tr>
                <th>Nombre Completo</th>
                <th>Identificación</th>
                <th>Fecha de Nacimiento</th>
                <th>Observaciones</th>
                <th>Atención</th>
                <th>Perfil</th>
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
                                                   <td> <?= $this->Html->link("Ir a Atención", ['controller' => 'Attentions', 'action' => 'add', $person->id]) ?> </td>
                                                   <td> <?= $this->Html->link("Ir a Perfil", ['controller' => 'People', 'action' => 'summaryview', $person->id]) ?> </td>
                                        </tr>
                                  <?php endif; ?>
                            <?php endforeach; ?>
                    <?php endforeach; ?>
                 <?php else: ?>
                    No tiene personas asignadas en este momento.
                <?php endif; ?>
               
            </table>
            <?php else: ?>
            Usted no tiene permiso.
            <?php endif; ?>