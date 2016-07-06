

<div class="row">

    <h3><?= __('Referencias Internas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_nombre','Usuaria') ?></th>
                <th><?= $this->Paginator->sort('user_username', 'Profesional que hizo la referencia') ?></th>
                <th><?= $this->Paginator->sort('persona_coordina', 'Persona con la cual se coordinó') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('location_id', 'Donde se hizo la referencia') ?></th>
                <th class="actions"><?= ('Acciones a realizar') ?></th>
            </tr>
        </thead>
            <?php if  ($internalReferences != null) {  ?>
        <tbody>
         
            <?php foreach ($internalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id.' '.$internalReference->person->nombre.' '.$internalReference->person->apellidos, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->username, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->persona_coordina) ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= $internalReference->has('location') ? $this->Html->link($internalReference->location->ubicacion, ['controller' => 'Locations', 'action' => 'view', $internalReference->location->id]) : '' ?></td>
                 <td class="actions">
                    <?= $this->Form->postLink(__('Aceptar'), ['action' => 'aceptarReferencia', $internalReference->id], ['confirm' => __('Está segura que desea aceptar la referencia interna de Cédula: {0}?', $internalReference->person->id.' Nombre: '.$internalReference->person->nombre.' '.$internalReference->person->apellidos)]) ?>
                     <?= $this->Form->postLink(__('Rechazar'), ['action' => 'rechazarReferencia', $internalReference->id], ['confirm' => __('Está segura que desea cancelar la referencia interna de Cédula: {0}?', $internalReference->person->id.' Nombre: '.$internalReference->person->nombre.' '.$internalReference->person->apellidos)]) ?>
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
       <?php } //end del if internalreferences ?>
</div>

</row>


<button id="boton" onClick="mostrarReferenciasAnteriores()" class="button">Ver referencias internas anteriores</button>
<br></br>
 

<div class="row" id="otrasReferencias" style="display:none;">

    <h3><?= __('Referencias Internas Anteriores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('person_nombre','Usuaria') ?></th>
                <th><?= $this->Paginator->sort('user_username', 'Profesional que hizo la referencia') ?></th>
                <th><?= $this->Paginator->sort('persona_coordina', 'Persona con la cual se coordinó') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('location_id', 'Donde se hizo la referencia') ?></th>
                <th><?= $this->Paginator->sort('estado', 'Situación de la referencia') ?></th>
            </tr>
        </thead>
            <?php if  ($otherInternalReferences != null) {  ?>
        <tbody>
         
            <?php foreach ($otherInternalReferences as $internalReference): ?>
            <tr>
                <td><?= $this->Number->format($internalReference->id) ?></td>
                <td><?= $internalReference->has('person') ? $this->Html->link($internalReference->person->id.' '.$internalReference->person->nombre.' '.$internalReference->person->apellidos, ['controller' => 'People', 'action' => 'view', $internalReference->person->id]) : '' ?></td>
                <td><?= $internalReference->has('user') ? $this->Html->link($internalReference->user->username, ['controller' => 'Users', 'action' => 'view', $internalReference->user->id]) : '' ?></td>
                <td><?= h($internalReference->persona_coordina) ?></td>
                <td><?= h($internalReference->telefono) ?></td>
                <td><?= $internalReference->has('location') ? $this->Html->link($internalReference->location->ubicacion, ['controller' => 'Locations', 'action' => 'view', $internalReference->location->id]) : '' ?></td>
                 <td>
                    <?php
                    if ($internalReference->estado == 1){
                        echo 'Aceptada';
                    }
                    else if ($internalReference->estado == 2){
                        echo 'Rechazada';
                    }
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
       <?php } //end del if internalreferences ?>
</div>

</row>

<script>

/*
    Permite ocultar o mostrar las referencias internas que ya fueron aceptadas o rechazadas. 
*/
function mostrarReferenciasAnteriores(){
    
    if( document.getElementById("otrasReferencias").style.display === "none"){
        document.getElementById("otrasReferencias").style = "display:/"/";";
        document.getElementById("boton").innerHTML = "Ocultar referencias internas anteriores";
    }
    else{
        document.getElementById("otrasReferencias").style = "display:none;";
        document.getElementById("boton").innerHTML = "Ver referencias internas anteriores";
    }
    
}    

</script>
