<div class="page-header">
    <h3><?= __('Terminals') ?></h3>
</div>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('port_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('restriction') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($terminals as $terminal): ?>
            <tr>
                <td><?= $this->Number->format($terminal->id) ?></td>
                <td><?= $this->Number->format($terminal->port_id) ?></td>
                <td><?= h($terminal->name) ?></td>
                <td><?= h($terminal->restriction) ?></td>
                <td><?= h($terminal->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $terminal->id],['class' => 'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $terminal->id],['class' => 'btn btn-xs btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $terminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id), 'class' => 'btn btn-xs btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>