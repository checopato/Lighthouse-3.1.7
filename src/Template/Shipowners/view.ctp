<div class="well">
    <h3><?= h($shipowner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Full Style') ?></th>
            <td><?= h($shipowner->full_style) ?></td>
        </tr>
        <tr>
            <th><?= __('Nick') ?></th>
            <td><?= h($shipowner->nick) ?></td>
        </tr>
    </table>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> 
    <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('Edit Shipowner'), ['action' => 'edit', $shipowner->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Shipowner'), ['action' => 'delete', $shipowner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipowner->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Shipowner'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Shipowner'), ['action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Entitys'), ['controller' => 'Entitys', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Entitys', 'action' => 'add']) ?> </li>
</ul>
</div>

<div class="related">
    <h4><?= __('Related Entitys') ?></h4>
    <?php if (!empty($shipowner->entitys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Shipowner Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shipowner->entitys as $entitys): ?>
                <tr>
                    <td><?= h($entitys->id) ?></td>
                    <td><?= h($entitys->shipowner_id) ?></td>
                    <td><?= h($entitys->name) ?></td>
                    <td><?= h($entitys->info) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Entitys', 'action' => 'view', $entitys->id],['class' => 'btn btn-xs btn-info']) ?>

                        <?= $this->Html->link(__('Edit'), ['controller' => 'Entitys', 'action' => 'edit', $entitys->id],['class' => 'btn btn-xs btn-warning']) ?>

                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entitys', 'action' => 'delete', $entitys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entitys->id), 'class' => 'btn btn-xs btn-danger']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
