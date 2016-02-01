
<div class="page-header">
    <h3><?= __('PICs') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('charterer_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('cel_phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chartererpics as $chartererpic): ?>
                <tr>
                <td><?= $chartererpic->has('charterer') ? $this->Html->link($chartererpic->charterer->nick, ['controller' => 'Charterers', 'action' => 'view', $chartererpic->charterer->id]) : '' ?></td>
                    <td><?= h($chartererpic->name) ?></td>
                    <td><?= h($chartererpic->phone) ?></td>
                    <td><?= h($chartererpic->cel_phone) ?></td>
                    <td><?= h($chartererpic->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chartererpic->id],['class' => 'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chartererpic->id],['class' => 'btn btn-xs btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chartererpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id), 'class' => 'btn btn-xs btn-danger']) ?>
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

    <li><?= $this->Html->link(__('New PIC'), ['action' => 'add']) ?></li>
    <li role="separator" class="divider"></li>    
    <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?></li>
</ul>
</siv>