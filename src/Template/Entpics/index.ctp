<div class="page-header">
    <h3><?= __('Entity PICs') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('cel_phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entpics as $entpic): ?>
                <tr>
                    <td><?= h($entpic->name) ?></td>
                    <td><?= h($entpic->phone) ?></td>
                    <td><?= h($entpic->cel_phone) ?></td>
                    <td><?= h($entpic->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $entpic->id],['class' => 'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entpic->id],['class' => 'btn btn-xs btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entpic->id), 'class' => 'btn btn-xs btn-danger']) ?>
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
        <li><?= $this->Html->link(__('New PIC'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
    </ul>
</nav>