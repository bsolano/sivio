<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internal Reference'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->



<div class="internalReferences index large-9 medium-8 columns content">
    <h3><?= __('Administración de Asignaciones') ?></h3>


    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('oficina') ?></th>
                <th><?= $this->Paginator->sort('Profesional') ?></th>
                <!-- <th><?= $this->Paginator->sort('user_id') ?></th> -->
                <th>Tipo de Profesional</th>
                <th>Profesional Asignado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersPeople as $userPeople): ?>
             <!-- <pre> <?=  print_r($userPeople); ?></pre>  -->
            
            

            
            <tr>
                <td><?= $this->Number->format($userPeople->id) ?></td>
                <td><?= $userPeople->has('person') ? $this->Html->link($userPeople->person->nombre . ' '. $userPeople->person->apellidos, ['controller' => 'People', 'action' => 'view', $userPeople->person->id]) : '' ?></td>
                <td><?= h($userPeople->telefono) ?></td>
                <td><?= h($userPeople->user->location->ubicacion) ?></td>
                <td><?= h($userPeople->user->fullname) ?></td>
                <!-- <td><?= $userPeople->has('user') ? $this->Html->link($userPeople->user->id, ['controller' => 'Users', 'action' => 'view', $userPeople->user->id]) : '' ?></td> -->
                <td><?php echo h($userPeople->user->group->name); ?></td>
                <td><?php 
                
                    echo $this->Form->create(null, [
                    'url' => ['controller' => 'Allocations', 'action' => 'updateProfessional.json']
                    ]);
                    
                    $profArr = [];
                    $profArr[] = '(No Asignada)';

                    foreach ($users as $user)
                    {
                        // @@@@@
                        /*if ($user->group_id == $userPeople->group_id)*/ $profArr[$user->id] = $user->username;
                    }
                

                    echo $this->Form->input(
                        'professional_id',
                        array('label' => '','class' => 'proClass','options' => $profArr, 'default' =>  $profArr[0])
                        
                    );     
                    
                    
                    echo $this->Form->hidden('userpeople_id', ['value'=>$userPeople->id]);
                    //echo $this->Form->hidden('professional_id', ['value'=>$id]);
                    
                    echo $this->Form->end();
                ?>
                </td>


            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


<script type="text/javascript">
    
    <?php
    /** 
     * AJAX que sirve para actualizar el profesional asignado a una usuaria
     * 
     */
     ?>
    $('form .proClass').change(function () {

            var frms = $(this.form);
            var frm = frms[0];
            
           
            console.log(frm.method);
            
            
            jQuery.ajax({
                type: frm.method,
                url: frm.action,
                data: frms.serialize(),
                cache: false,
                success: function (response) {
                    //document.getElementById("results").innerHTML = response;
                    //console.log(response.result.code);
                    
                    $('<div class="message success" onclick="this.classList.add(\'hidden\')">¡El profesional asignado ha sido actualizado!</div>' ).insertBefore("div.content");
                    //alert('Respuesta del servidor: ' + response.result.code)
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert('Error actualizando el registro...');
                    console.log(errorThrown);
                    
                }
            });
            
            

    });
    
    

</script>

