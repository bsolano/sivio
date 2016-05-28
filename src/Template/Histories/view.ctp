<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Histories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="histories view large-9 medium-8 columns content">
    <h3><?= h($history->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Motivo Regreso') ?></th>
            <td><?= h($history->motivo_regreso) ?></td>
        </tr>
        <tr>
            <th><?= __('Antecedente Legal') ?></th>
            <td><?= h($history->antecedente_legal) ?></td>
        </tr>
        <tr>
            <th><?= __('Antecedente Psiquiatrico') ?></th>
            <td><?= h($history->antecedente_psiquiatrico) ?></td>
        </tr>
        <tr>
            <th><?= __('Atencion Por Agresion') ?></th>
            <td><?= h($history->atencion_por_agresion) ?></td>
        </tr>
        <tr>
            <th><?= __('Centro Salud') ?></th>
            <td><?= h($history->centro_salud) ?></td>
        </tr>
        <tr>
            <th><?= __('Impacto Violencia') ?></th>
            <td><?= h($history->impacto_violencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Riesgo') ?></th>
            <td><?= h($history->riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Proteccion') ?></th>
            <td><?= h($history->proteccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Valoracion Riesgo') ?></th>
            <td><?= h($history->valoracion_riesgo) ?></td>
        </tr>
        <tr>
            <th><?= __('Medida Proteccion') ?></th>
            <td><?= h($history->medida_proteccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Vinculo Usuaria') ?></th>
            <td><?= h($history->vinculo_usuaria) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Relacion') ?></th>
            <td><?= h($history->tiempo_relacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Tiempo Agresion') ?></th>
            <td><?= h($history->tiempo_agresion) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Separaciones') ?></th>
            <td><?= h($history->num_separaciones) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($history->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Person Id') ?></th>
            <td><?= $this->Number->format($history->person_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Aggressor Id') ?></th>
            <td><?= $this->Number->format($history->aggressor_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Vencimiento Proteccion') ?></th>
            <td><?= h($history->vencimiento_proteccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Programa Oapvd') ?></th>
            <td><?= $history->programa_oapvd ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Familiar Requiere Proteccion') ?></th>
            <td><?= $history->familiar_requiere_proteccion ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Violencia Fisica') ?></h4>
        <?= $this->Text->autoParagraph(h($history->violencia_fisica)); ?>
    </div>
    <div class="row">
        <h4><?= __('Violencia Psicologica') ?></h4>
        <?= $this->Text->autoParagraph(h($history->violencia_psicologica)); ?>
    </div>
    <div class="row">
        <h4><?= __('Violencia Sexual') ?></h4>
        <?= $this->Text->autoParagraph(h($history->violencia_sexual)); ?>
    </div>
    <div class="row">
        <h4><?= __('Violencia Patrimonial') ?></h4>
        <?= $this->Text->autoParagraph(h($history->violencia_patrimonial)); ?>
    </div>
    <div class="row">
        <h4><?= __('Situacion Enfrentada') ?></h4>
        <?= $this->Text->autoParagraph(h($history->situacion_enfrentada)); ?>
    </div>
    <div class="row">
        <h4><?= __('Familiares En Riesgo') ?></h4>
        <?= $this->Text->autoParagraph(h($history->familiares_en_riesgo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($history->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nombre') ?></th>
                <th><?= __('Apellidos') ?></th>
                <th><?= __('Fecha De Nacimiento') ?></th>
                <th><?= __('Estado Civil') ?></th>
                <th><?= __('Escolaridad') ?></th>
                <th><?= __('Atencion Especializada') ?></th>
                <th><?= __('Nacionalidad') ?></th>
                <th><?= __('Genero') ?></th>
                <th><?= __('Ocupacion') ?></th>
                <th><?= __('Lugar Trabajo') ?></th>
                <th><?= __('Adicciones') ?></th>
                <th><?= __('Condicion Migratoria') ?></th>
                <th><?= __('Condicion Laboral') ?></th>
                <th><?= __('Experiencia Laboral') ?></th>
                <th><?= __('Condicion Aseguramiento') ?></th>
                <th><?= __('Vivienda') ?></th>
                <th><?= __('Tipo Familia') ?></th>
                <th><?= __('Embarazo') ?></th>
                <th><?= __('Condicion Salud') ?></th>
                <th><?= __('Identificacion') ?></th>
                <th><?= __('Tipo Identificacion') ?></th>
                <th><?= __('Numero De Telefono') ?></th>
                <th><?= __('Edad') ?></th>
                <th><?= __('Numero De Hijos') ?></th>
                <th><?= __('Provincia') ?></th>
                <th><?= __('Canton') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Tiene Hijos Doce') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($history->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->nombre) ?></td>
                <td><?= h($people->apellidos) ?></td>
                <td><?= h($people->fecha_de_nacimiento) ?></td>
                <td><?= h($people->estado_civil) ?></td>
                <td><?= h($people->escolaridad) ?></td>
                <td><?= h($people->atencion_especializada) ?></td>
                <td><?= h($people->nacionalidad) ?></td>
                <td><?= h($people->genero) ?></td>
                <td><?= h($people->ocupacion) ?></td>
                <td><?= h($people->lugar_trabajo) ?></td>
                <td><?= h($people->adicciones) ?></td>
                <td><?= h($people->condicion_migratoria) ?></td>
                <td><?= h($people->condicion_laboral) ?></td>
                <td><?= h($people->experiencia_laboral) ?></td>
                <td><?= h($people->condicion_aseguramiento) ?></td>
                <td><?= h($people->vivienda) ?></td>
                <td><?= h($people->tipo_familia) ?></td>
                <td><?= h($people->embarazo) ?></td>
                <td><?= h($people->condicion_salud) ?></td>
                <td><?= h($people->identificacion) ?></td>
                <td><?= h($people->tipo_identificacion) ?></td>
                <td><?= h($people->numero_de_telefono) ?></td>
                <td><?= h($people->edad) ?></td>
                <td><?= h($people->numero_de_hijos) ?></td>
                <td><?= h($people->provincia) ?></td>
                <td><?= h($people->canton) ?></td>
                <td><?= h($people->direccion) ?></td>
                <td><?= h($people->tiene_hijos_doce) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
