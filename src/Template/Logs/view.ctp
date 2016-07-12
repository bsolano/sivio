
<div class="logs view medium-9 medium-8 columns content">
    <h3><?= $log->nombre." ".$log->apellidos ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Estado civil') ?></th>
            <td><?= h($log->estado_civil) ?></td>
        </tr>
        <tr>
            <th><?= __('Escolaridad') ?></th>
            <td><?= h($log->escolaridad) ?></td>
        </tr>
        <tr>
            <th><?= __('Atención especializada') ?></th>
            <td><?= h($log->atencion_especializada) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidad') ?></th>
            <td><?= h($log->nacionalidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Género') ?></th>
            <td><?= h($log->genero) ?></td>
        </tr>
        <tr>
            <th><?= __('Ocupación') ?></th>
            <td><?= h($log->ocupacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar de trabajo') ?></th>
            <td><?= h($log->lugar_trabajo) ?></td>
        </tr>
        <tr>
            <th><?= __('Adicciones') ?></th>
            <td><?= h($log->adicciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Condición migratoria') ?></th>
            <td><?= h($log->condicion_migratoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Condición laboral') ?></th>
            <td><?= h($log->condicion_laboral) ?></td>
        </tr>
        <tr>
            <th><?= __('Condición de aseguramiento') ?></th>
            <td><?= h($log->condicion_aseguramiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Vivienda') ?></th>
            <td><?= h($log->vivienda) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo de familia') ?></th>
            <td><?= h($log->tipo_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Condición de salud') ?></th>
            <td><?= h($log->condicion_salud) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo de identificación') ?></th>
            <td><?= h($log->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Teléfono') ?></th>
            <td><?= h($log->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Provincia') ?></th>
            <td><?= h($log->provincia) ?></td>
        </tr>
        <tr>
            <th><?= __('Cantón') ?></th>
            <td><?= h($log->canton) ?></td>
        </tr>
        <tr>
            <th><?= __('Número de familia') ?></th>
            <td><?= h($log->num_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Rol en la familia') ?></th>
            <td><?= h($log->rol_familia) ?></td>
        </tr>
        <tr>
            <th><?= __('Embarazo') ?></th>
            <td><?= $this->Number->format($log->embarazo) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificación') ?></th>
            <td><?= $this->Number->format($log->identificacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Edad') ?></th>
            <td><?= $this->Number->format($log->edad) ?></td>
        </tr>
        <tr>
            <th><?= __('Número de hijos') ?></th>
            <td><?= $this->Number->format($log->num_de_hijos) ?></td>
        </tr>
        <tr>
            <th><?= __('Número de hijos con que ingresa a CEAAM') ?></th>
            <td><?= $this->Number->format($log->num_hijos_ceaam) ?></td>
        </tr>
        <tr>
            <th><?= __('Acepta seguimientos') ?></th>
            <td><?= $this->Number->format($log->acepta_seguimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha de nacimiento') ?></th>
            <td><?= h($log->fecha_de_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Experiencia laboral') ?></th>
            <td><?= $log->experiencia_laboral ? __('Sí') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Hijos mayores de doce') ?></th>
            <td><?= $log->hijos_mayor_doce ? __('Sí') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h5><?= __('Dirección') ?></h5>
        <?= $this->Text->autoParagraph(h($log->direccion)); ?>
    </div>
</div>
