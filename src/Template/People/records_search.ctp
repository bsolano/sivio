<h4>Personas</h4>
<table>
    <tr>
        <th>Nombre Completo</th>
        <th>Fecha de Nacimiento</th>
        <th>Identificación</th>
        <th class="actions">Acciones</th>
    </tr>
    <?php foreach ($people as $person): ?>
        <tr>
            <td><?php echo $person->nombre.' '.$person->apellidos; ?></td>
            <td><?php echo $person->fecha_de_nacimiento; ?></td>
            <td><?php echo $person->identificacion; ?></td>
            <td class="actions">
                <?= $this->Html->link('Consulta', ['action' => 'view', $person->id]) ?>
                <?= $this->Html->link('Atención', ['action' => 'edit', $person->id]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php unset($people); ?>