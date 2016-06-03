<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logs view large-9 medium-8 columns content">
    <h3><?= h($log->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Person') ?></th>
            <td><?= $log->has('person') ? $this->Html->link($log->person->id, ['controller' => 'People', 'action' => 'view', $log->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($log->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Apellidos') ?></th>
            <td><?= h($log->apellidos) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Civil') ?></th>
            <td><?= h($log->estado_civil) ?></td>
        </tr>
        <tr>
            <th><?= __('Escolaridad') ?></th>
            <td><?= h($log->escolaridad) ?></td>
        </tr>
        <tr>
            <th><?= __('Atencion Especializada') ?></th>
            <td><?= h($log->atencion_especializada) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($log->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Genero') ?></th>
            <td><?= h($log->genero) ?></td>
        </tr>
        <tr>
            <th><?= __('Ocupacion') ?></th>
            <td><?= h($log->ocupacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar Trabajo') ?></th>
            <td><?= h($log->lugar_trabajo) ?></td>
        </tr>
        <tr>
            <th><?= __('Adicciones') ?></th>
            <td><?= h($log->adicciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Condicion Migratoria') ?></th>
            <td><?= h($log->condicion_migratoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Condicion Laboral') ?></th>
            <td><?= h($log->condicion_laboral) ?></td>
        </tr>
        <tr>
            <th><?= __('Condicion Aseguramiento') ?></th>
            <td><?= h($log->condicion_aseguramiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Vivienda') ?></th>
            <td><?= h($log->vivienda) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Familia') ?></th>
            <td><?= h($log->tipo_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Condicion Salud') ?></th>
            <td><?= h($log->condicion_salud) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Identificacion') ?></th>
            <td><?= h($log->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= h($log->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Provincia') ?></th>
            <td><?= h($log->provincia) ?></td>
        </tr>
        <tr>
            <th><?= __('Canton') ?></th>
            <td><?= h($log->canton) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Familia') ?></th>
            <td><?= h($log->num_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Rol Familia') ?></th>
            <td><?= h($log->rol_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($log->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Embarazo') ?></th>
            <td><?= $this->Number->format($log->embarazo) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificacion') ?></th>
            <td><?= $this->Number->format($log->identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Edad') ?></th>
            <td><?= $this->Number->format($log->edad) ?></td>
        </tr>
        <tr>
            <th><?= __('Num De Hijos') ?></th>
            <td><?= $this->Number->format($log->num_de_hijos) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Hijos Ceaam') ?></th>
            <td><?= $this->Number->format($log->num_hijos_ceaam) ?></td>
        </tr>
        <tr>
            <th><?= __('Acepta Seguimiento') ?></th>
            <td><?= $this->Number->format($log->acepta_seguimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha De Nacimiento') ?></th>
            <td><?= h($log->fecha_de_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Experiencia Laboral') ?></th>
            <td><?= $log->experiencia_laboral ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Hijos Mayor Doce') ?></th>
            <td><?= $log->hijos_mayor_doce ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($log->direccion)); ?>
    </div>
</div>
