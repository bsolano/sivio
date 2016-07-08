<!--
    Author: Brayan Salas Concepción|B26050
    
    Editar la información personal de la usuaria seleccionada.
    Solo información personal.
-->

<!--
    Campos donde se ingresa la infromación personal de la usuaria a agregar en el sistema.
-->
<div class="people form large-10 large-centered medium-10 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Agregar nueva usuaria') ?></legend>
        <div class="large-12 columns">
            <div class="large-6 columns">
                <?php
                    echo $this->Form->input('nombre');
                    echo $this->Form->input('apellidos');
                    echo $this->Form->input('fecha_de_nacimiento', ['label' => 'Fecha de nacimiento', 'empty' => true, 'minYear' => 1940]);
                    echo $this->Form->input('edad');
                    echo $this->Form->input('estado_civil', ['label' => 'Estado civil', 'options' => ['Soltera' => 'Soltera','Casada' => 'Casada','Unión libre' => 'Union libre','Divorciada' => 'Divorciada','Separada' => 'Separada','Viuda' => 'Viuda']]);
                    echo $this->Form->input('embarazo', ['options' => ['0' => 'No','1' => '1 mes','2' => '2 meses','3' => '3 meses','4' => '4 meses','5' => '5 meses','6' => '6 meses','7' => '7 meses','8' => '8 meses','9' => '9 meses']]);
                    echo $this->Form->input('telefono', ['label' => 'Teléfono']);
                ?>
            </div>
            <div class="large-6 columns">
                <?php
                    echo $this->Form->input('nacionalidad');
                    echo $this->Form->input('identificacion', ['label' => 'Identificación']);
                    echo $this->Form->input('tipo_identificacion', ['label' => 'Tipo de identificación']);
                    echo $this->Form->input('num_familia', ['label' => 'Número de familia']);
                    echo $this->Form->input('tipo_familia', ['label' => 'Tipo de familia', 'options' => ['Nuclear' => 'Nuclear','Uniparental' => 'Uniparental','Nuclear extendida' => 'Nuclear extendida']]);
                    echo $this->Form->input('num_de_hijos', ['label' => 'Hijos de la usuaria']);
                    echo $this->Form->input('hijos_mayor_doce', ['label' => '¿Tiene hijos mayores de 12 años?', 'type' => 'radio', 'options' => [1 => 'Sí', 0 => 'No']]);
                ?>
            </div>
        </div>
        <div class="large-12 columns">
                <div class="large-12 columns">
                    <?php
                        echo $this->Form->input('direccion_oculta', ['label' => '¿La dirección es oculta?', 'type' => 'radio', 'options' => [1 => 'Sí', 0 => 'No']]);
                    ?>
                </div>
            <div class="large-6 columns">
                <?php
                    echo $this->Form->input('provincia', ['options' => ['San José' => 'San José','Alajuela' => 'Alajuela','Heredia' => 'Heredia','Cartago' => 'Cartago','Puntarenas' => 'Puntarenas','Guanacaste' => 'Guanacaste','Limón' => 'Limón']]);
                    echo $this->Form->input('canton', ['label' => 'Cantón']);
                ?>
            </div>
            <div class="large-6 columns">
                <?php
                    echo $this->Form->input('direccion', ['label' => 'Dirección exacta', 'type' => 'textarea']);
                ?>
            </div>
        </div>
        <div class="large-12 columns content">
            <?php
                echo $this->Form->input('ocupacion', ['label' => 'Ocupación']);
                echo $this->Form->input('lugar_trabajo', ['label' => 'Lugar de trabajo']);
            ?>
        </div>
        <div class="large-12 columns content">
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('experiencia_laboral', ['label' => '¿Experiencia laboral?', 'type' => 'radio', 'options' => [1 => 'Sí', 0 => 'No']]);
                ?>
            </div>
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('condicion_laboral', ['label' => 'Condición laboral', 'type' => 'radio', 'options' => ['Remunerada' => 'Remunerada','No remunerada' => 'No Remunerada','Desempleada' => 'Desempleada','Pensionada' => 'Pensionada']]);
                ?>
            </div>
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('condicion_migratoria', ['label' => 'Condición migratoria', 'type' => 'radio', 'options' => ['Nacional' => 'Nacional','Regular' => 'Regular','Residente' => 'Residente','Refugiada' => 'Refugiada','Irregular' => 'Irregular']]);
                ?>
            </div>
        </div>
        <div class="large-12 columns">
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('escolaridad', ['type' => 'radio', 'options' => ['Primaria incompleta' => 'Primaria incompleta','Primaria completa' => 'Primaria completa','Secundaria incompleta' => 'Secundaria incompleta','Secundaria completa' => 'Secundaria completa','Para-universitario/Técnico' => 'Para-universitario/Técnico','Universitaria incompleta' => 'Universitaria incompleta','Universitaria completa' => 'Universitaria completa','N/A' => 'N/A']]);
                ?>
            </div>
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('condicion_aseguramiento', ['label' => 'Condición de aseguramiento', 'type' => 'radio', 'options' => ['Directa' => 'Directa','Familiar' => 'Familiar','Voluntario o Convenio' => 'Voluntario o Convenio','Pensionada por el Estado' => 'Pensionada por el Estado','No tiene' => 'No tiene']]);
                ?>
            </div>
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('vivienda', ['type' => 'radio', 'options' => ['Alquilada' => 'Alquilada','Precario' => 'Precario','Prestada' => 'Prestada','Propia total' => 'Propia total','Propia con hipoteca' => 'Propia con hipoteca','No tiene' => 'No tiene']]);
                ?>
            </div>
        </div>
        <div class="large-12 columns content">
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('adicciones', ['label' => 'Adiccion(es)', 'type' => 'select', 'multiple' => 'checkbox', 'options' => ['Alcohol' => 'Alcohol','Drogas' => 'Drogas','Medicamentos' => 'Medicamentos','Ninguna' => 'Ninguna']]);
                ?>
            </div>
            <div class="large-4 columns">
                <?php
                    echo $this->Form->input('condicion_salud', ['label' => 'Condición de salud', 'type' => 'select', 'multiple' => 'checkbox', 'options' => ['Discapacidad Física' => 'Discapacidad Física','Discapacidad Cognitiva' => 'Discapacidad Cognitiva','Discapacidad Sensorial' => 'Discapacidad Sensorial','Discapacidad Mental' => 'Discapacidad Mental','Padecimientos Crónicos' => 'Padecimientos Crónicos','VIH-SIDA' => 'VIH-SIDA','ITS' => 'ITS','Condición Psiquíatrica' => 'Condición Psiquíatrica','Enfermedad Terminal' => 'Enfermedad Terminal']]);
                ?>
            </div>
            <div></div>
        </div>
    </fieldset>
    <?= $this->Form->button('Enviar', ['class' => 'secondary button']) ?>
    <?= $this->Form->end() ?>
</div>
<div class="large-4 large-centered columns content"></div>