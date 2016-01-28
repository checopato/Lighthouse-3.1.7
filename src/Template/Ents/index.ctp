<div class="page-header">
    <h3><?= __('Entities') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('shipowner_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ents as $ent): ?>
                <tr>
                    <td><?= $this->Number->format($ent->id) ?></td>
                    <td><?= $ent->has('shipowner') ? $this->Html->link($ent->shipowner->nick, ['controller' => 'Shipowners', 'action' => 'view', $ent->shipowner->id]) : '' ?></td>
                    <td><?= h($ent->name) ?></td>
                    <td><?= h($ent->info) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ent->id],['class' => 'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ent->id],['class' => 'btn btn-xs btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ent->id), 'class' => 'btn btn-xs btn-danger']) ?>
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
        <li><?= $this->Html->link(__('New Entity'), ['action' => 'add']) ?></li>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('List PICs'), ['controller' => 'Entpics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New PIC'), ['controller' => 'Entpics', 'action' => 'add']) ?></li>
    </ul>
</div>