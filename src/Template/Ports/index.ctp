<div class="page-header">
    <h3><?= __('Ports') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ports as $port): ?>
            <tr>
                <td><?= $this->Number->format($port->id) ?></td>
                <td><?= h($port->name) ?></td>
                <td><?= h($port->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $port->id],['class' => 'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $port->id],['class' => 'btn btn-xs btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $port->id], ['confirm' => __('Are you sure you want to delete # {0}?', $port->id), 'class' => 'btn btn-xs btn-danger']) ?>
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

<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <?php echo __('Actions'); ?> <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?></li>
    </ul>
</div>
