<fieldset>
    <div class="records index large-8 medium-8 columns content">
        <h3><?= __('Historial de Consultas') ?></h3>
        <?php $c= $con->toArray(); ?> 
        <table cellpadding="0" cellspacing="0" span="1" width="100%">
            <tr>
                <th><?= 'ID persona'                                      ?></th>
                <th><?= 'Fecha'                                           ?></th>
                <th><?= 'Institución referente'                           ?></th>
                <th><?= 'Valoracion de riesgo'                            ?></th>
                <th><?= 'Vinculo con la persona agresora'                 ?></th>
            </tr>
            <?php foreach ($c as $consulta):  ?>
                <tr>
                    <td><?= h($consulta->person_id                        ) ?></td>
                    <td><?= h($consulta->fecha                            ) ?></td>
                    <td><?= h($consulta->institucion_que_refiere          ) ?></td>
                    <td><?= h($consulta->valoracion_de_riesgo             ) ?></td>
                    <td><?= h($consulta->vinculo_con_persona_agresora     ) ?></td>
                 </tr>
            <?php endforeach; ?>
        </table>
    </div>
</fieldset>


