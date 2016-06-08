<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">

        
        
    </ul>
</nav>
<div class="externalReferences index large-9 medium-8 columns content">
    <input type="button" value="Nueva Referencia" class="primary button float-right" onclick='add()'/>

    
    
    
    <h3><?= __('Referencia Externa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('receptor') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('person_id') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('persona') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($externalReferences as $externalReference): ?>
            <tr>
                <td><?= $this->Number->format($externalReference->id) ?></td>
                <td><?= h($externalReference->receptor) ?></td>
                <td><?= h($externalReference->telefono) ?></td>
                <td><?= $externalReference->has('person') ? $this->Html->link($externalReference->person->id, ['controller' => 'People', 'action' => 'view', $externalReference->person->id]) : '' ?></td>
                <td><?= h($externalReference->direccion) ?></td>
                <td><?= h($externalReference->persona) ?></td>
                <td><?= h($externalReference->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $externalReference->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $externalReference->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $externalReference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $externalReference->id)]) ?>
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
    function add() {
       
                document.location = "/ExternalReferences/add";
       
    }
</script>