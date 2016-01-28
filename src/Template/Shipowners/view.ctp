<div class="well">
    <h3><?= h($shipowner->nick) ?></h3>
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
    <li><?= $this->Html->link(__('Edit Shipowner'), ['action' => 'edit', $shipowner->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Shipowner'), ['action' => 'delete', $shipowner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipowner->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Shipowner'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Shipowner'), ['action' => 'add']) ?> </li>
    <li role="separator" class="divider"></li>
    <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?> </li>
</ul>
</div>

<div class="col-md-12">
    <h4><?= __('Related Entities') ?></h4>
    <?php if (!empty($shipowner->ents)): ?>
        <table class="table table-striped">
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shipowner->ents as $ents): ?>
                <tr>
                    <td><?= h($ents->name) ?></td>
                    <td><?= h($ents->info) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Ents', 'action' => 'view', $ents->id],['class' => 'btn btn-xs btn-info']) ?>

                        <?= $this->Html->link(__('Edit'), ['controller' => 'Ents', 'action' => 'edit', $ents->id],['class' => 'btn btn-xs btn-warning']) ?>

                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ents', 'action' => 'delete', $ents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ents->id), 'class' => 'btn btn-xs btn-danger']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
