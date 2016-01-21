<div class="page-header">
    <h3><?= __('Charterers') ?></h3>
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
            <?php foreach ($charterers as $charterer): ?>
            <tr>
                <td><?= $this->Number->format($charterer->id) ?></td>
                <td><?= h($charterer->full_style) ?></td>
                <td><?= h($charterer->nick) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $charterer->id],['class' => 'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $charterer->id],['class' => 'btn btn-xs btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $charterer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charterer->id), 'class' => 'btn btn-xs btn-danger']) ?>
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
    <li><?= $this->Html->link(__('New PIC'), ['controller' => 'Chartererpics','action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List PICs'), ['controller' => 'Chartererpics', 'action' => 'index']) ?></li>
</ul>
</div>