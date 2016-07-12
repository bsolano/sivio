

<fieldset>
    <div class="records index large-8 medium-8 columns content">
         <h3><?= __('Historial de Atenciones') ?></h3>
        <table cellpadding="0" cellspacing="0" span="1" width="100%">
            <tr>
                <th><?= 'Fecha de atención'             ?></th>
                <th><?= 'Tipo'                          ?></th>
                <th><?= 'Datos adicionales'             ?></th>
                <th><?= 'Última persona en editar'      ?></th>
            </tr>
            <?php foreach ($atenciones as $a):  ?>
                <tr>
                    <td><?= h($a->created                       ) ?></td>
                    <td><?= h($a->tipo                          ) ?></td>
                    <td><?= h($a->datos_adicionales             ) ?></td>
                    <td><?= h($a->user->username                ) ?></td>
                 </tr>
            <?php endforeach; ?>
        </table>
    </div>
</fieldset>