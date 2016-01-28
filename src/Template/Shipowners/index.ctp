<div class="page-header">
    <h3><?= __('Shipowners') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('full_style') ?></th>
                <th><?= $this->Paginator->sort('nick') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shipowners as $shipowner): ?>
            <tr>
                <td><?= $this->Number->format($shipowner->id) ?></td>
                <td><?= h($shipowner->full_style) ?></td>
                <td><?= h($shipowner->nick) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shipowner->id],['class' => 'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shipowner->id],['class' => 'btn btn-xs btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shipowner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipowner->id), 'class' => 'btn btn-xs btn-danger']) ?>
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

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
    <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
</ul>
</div>