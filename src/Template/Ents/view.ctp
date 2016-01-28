<div class="well">
    <h3><?= h($ent->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Shipowner') ?></th>
            <td><?= $ent->has('shipowner') ? $this->Html->link($ent->shipowner->nick, ['controller' => 'Shipowners', 'action' => 'view', $ent->shipowner->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($ent->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Info') ?></th>
            <td><?= h($ent->info) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($ent->id) ?></td>
        </tr>
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('Edit Entity'), ['action' => 'edit', $ent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entity'), ['action' => 'delete', $ent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity'), ['action' => 'add']) ?> </li>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('List PICs'), ['controller' => 'Entpics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New PIC'), ['controller' => 'Entpics', 'action' => 'add']) ?> </li>
    </ul>
</div>

<div class="col-md-12">
    <h4><?= __('Related PICs') ?></h4>
    <?php if (!empty($ent->entpics)): ?>
        <table class="table table-striped">
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Cel Phone') ?></th>
                <th><?= __('Email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ent->entpics as $entpics): ?>
                <tr>
                    <td><?= h($entpics->name) ?></td>
                    <td><?= h($entpics->phone) ?></td>
                    <td><?= h($entpics->cel_phone) ?></td>
                    <td><?= h($entpics->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Entpics', 'action' => 'view', $entpics->id],['class' => 'btn btn-xs btn-info']) ?>

                        <?= $this->Html->link(__('Edit'), ['controller' => 'Entpics', 'action' => 'edit', $entpics->id],['class' => 'btn btn-xs btn-warning']) ?>

                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entpics', 'action' => 'delete', $entpics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entpics->id), 'class' => 'btn btn-xs btn-danger']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
