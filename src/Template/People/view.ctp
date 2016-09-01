<!--
    Author: Brayan Salas Concepción|B26050
    
    Presenta la información detallada de la usuaria.
    Información personal, lista de agresores, consultas, atenciones, entre otros.
-->
<div class="large-7 large-offset-1 columns content">
    <h3><?= h($person->nombre) ?> <?= h($person->apellidos) ?></h3>
</div>
<!--
    Editar
        Permite editar la información personal de la usuaria.
-->
<div class="large-4 large-right columns content">
    <?= $this->Html->link('Editar Perfil', ['action' => 'edit', $person->id], ['class' => 'secondary button', 'style' => 'margin: 10px 5px']) ?>
    <input id="bnt_Consulta" style="margin: 10px 5px; " type="button" value="Consulta"   class=" secondary button float-right" onclick='esConsulta( <?= $person->id ?> )'/>
    <?php if ($group_name  != 'RecepcionistaDelegacionDeLaMujer' ): ?>
        <input id="bnt_Atencion" style="margin: 10px 5px; " type="button" value="Atención"   class=" secondary button float-right" onclick='esAtencion( <?= $person->id ?> )'/>
    <?php endif; ?>
</div>
<!--
    Vista Información personal de la usuaria.
-->
<div class="people view large-12 large-centered medium-8 columns">
    <div class="large-12 large-offset-0 medium-8 columns">
        <h3>Información Personal</h3>
        </br></br>
    </div>
    <div class="large-11 large-centered columns">
        <div class="large-4 columns">
            <dl>
                <dt><?= 'Ocupación:' ?></dt>
                <dd>
                    <?php
                        if ($person->ocupacion != null):
                            echo $person->ocupacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Lugar de Trabajo:' ?></dt>
                <dd>
                    <?php
                        if ($person->lugar_trabajo != null):
                            echo $person->lugar_trabajo;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Migratoria:' ?></dt>
                <dd>
                    <?php
                        if ($person->condicion_migratoria != null):
                            echo $person->condicion_migratoria;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Vivienda:') ?></dt>
                <dd>
                    <?php
                        if ($person->vivienda != null):
                            echo $person->vivienda;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Tipo de Familia:' ?></dt>
                <dd>
                    <?php
                        if ($person->tipo_familia != null):
                            echo $person->tipo_familia;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Embarazo:') ?></dt>
                <dd>
                    <?php
                        if ($person->embarazo == 0)
                            echo "No tiene";
                        else
                            echo $person->embarazo.' meses';
                    ?>
                </dd>
                </br>
                <dt><?= 'Provincia:' ?></dt>
                <dd>
                    <?php
                        if ($person->provincia != null):
                            echo $person->provincia;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
            </dl>
        </div>
        
        
        <div class="large-4 columns">
            <dl>
                <dt><?= __('Estado Civil:') ?></dt>
                <dd>
                    <?php
                        if ($person->estado_civil != null):
                            echo $person->estado_civil;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Escolaridad:') ?></dt>
                <dd>
                    <?php
                        if ($person->escolaridad != null):
                            echo $person->escolaridad;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Laboral:' ?></dt>
                <dd>
                    <?php
                        if ($person->condicion_laboral != null):
                            echo $person->condicion_laboral;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Identificación:' ?></dt>
                <dd>
                    <?php
                        if ($person->identificacion != null):
                            echo $person->identificacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Tipo de Identificación:' ?></dt>
                <dd>
                    <?php
                        if ($person->tipo_identificacion != null):
                            echo $person->tipo_identificacion;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= __('Fecha De Nacimiento:') ?></dt>
                <dd>
                    <?php
                        if ($person->fecha_de_nacimiento != null):
                            echo $person->fecha_de_nacimiento;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
                </br>
                <dt><?= 'Cantón:' ?></dt>
                <dd>
                    <?php
                        if ($person->canton != null):
                            echo $person->canton;
                        else:
                            echo "No hay datos";
                        endif;
                    ?>
                </dd>
            </dl>
        </div>
        
        
        <div class="large-4 columns">
            <dl>
                <dt><?= __('Nacionalidad:') ?></dt>
                <dd><?= h($person->nacionalidad) ?></dd>
                </br>
                <dt><?= 'Género:' ?></dt>
                <dd>
                    <?php
                        if ($person->genero == 'F')
                            echo 'Femenino';
                        else
                            echo 'Masculino';
                    ?>
                </dd>
                </br>
                <dt><?= 'Condición Aseguramiento:' ?></dt>
                <dd><?= h($person->condicion_aseguramiento) ?></dd>
                </br>
                <dt><?= __('Experiencia Laboral:') ?></dt>
                <?php if ($person->experiencia_laboral > 1): ?>
                    <dd><?= $this->Number->format($person->experiencia_laboral).' años' ?></dd>
                <?php else: ?> 
                    <?php if ($person->experiencia_laboral != 1): ?>
                        <dd>No tiene</dd>
                    <?php else: ?>
                        <dd><?= $this->Number->format($person->experiencia_laboral).' año' ?></dd>
                    <?php endif; ?>
                <?php endif; ?>
                </br>
                <dt><?= 'Cantidad de hijos en CEAAM:' ?></dt>
                <?php if ($person->num_hijos_ceaam != 0): ?>
                    <dd><?= $this->Number->format($person->num_hijos_ceaam) ?></dd>
                <?php else: ?>
                    <dd>No tiene</dd>
                <?php endif; ?>
                </br>
                <dt><?= 'Teléfono:' ?></dt>
                <dd><?= h($person->telefono) ?></dd>
                </br>
                <dt><?= 'Dirección exacta:' ?></dt>
                <dd><?= h($person->direccion) ?></dd>
            </dl>
        </div>
    </div>
    <div class="large-12 columns"></div>
    <div class="large-10 large-centered columns">
        <div class="large-5 columns">
            <dl>
                <dt><?= 'Adiccion(es)' ?></dt>
                <dd>
                    <?php foreach($person->adicciones as $adiccion): ?> 
                        <ul><?= h($adiccion) ?></ul>
                    <?php endforeach ?>
                </dd>
            </dl>
        </div>
        <div class="large-5 columns">
            <dl>
                <dt><?= 'Condición de Salud' ?></dt>
                <dd>
                    <?php foreach($person->condicion_salud as $condicion): ?> 
                        <ul><?= h($condicion) ?></ul>
                    <?php endforeach ?>
                </dd>
            </dl>
        </div>
    </div>
</div>
<script>
        //Crea una consulta para la usuaria seleccionada.
        function esConsulta(id) {
            window.location.replace("http://"+ window.location.hostname + "/consultations/add/" + id);
        }
        
        // Crea una atención para la usuaria seleccionada.
        function esAtencion(id) {
            window.location.replace("http://"+ window.location.hostname + "/attentions/add/"    + id);
        }
        
</script>
