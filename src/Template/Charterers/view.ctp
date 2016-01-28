<div class="well">
    <h3><?= h($charterer->nick) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Full Style') ?></th>
            <td><?= h($charterer->full_style) ?></td>
        </tr>
        <tr>
            <th><?= __('Nick') ?></th>
            <td><?= h($charterer->nick) ?></td>
        </tr>
    </table>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
    <li><?= $this->Html->link(__('Edit Charterer'), ['action' => 'edit', $charterer->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Charterer'), ['action' => 'delete', $charterer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charterer->id)]) ?> </li>
    <li role="separator" class="divider"></li>
    <li><?= $this->Html->link(__('List PICs'), ['controller' => 'Chartererpics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New PIC'), ['controller' => 'Chartererpics', 'action' => 'add']) ?> </li>
</ul>
</div>

<div class="col-md-12">
    <h4><?= __('Charterer PICS') ?></h4>
    <?php if (!empty($charterer->chartererpics)): ?>
        <table class="table table-striped">
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Cel Phone') ?></th>
                <th><?= __('Email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($charterer->chartererpics as $chartererpics): ?>
                <tr>
                    <td><?= h($chartererpics->name) ?></td>
                    <td><?= h($chartererpics->phone) ?></td>
                    <td><?= h($chartererpics->cel_phone) ?></td>
                    <td><?= h($chartererpics->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Chartererpics', 'action' => 'view', $chartererpics->id],['class' => 'btn btn-xs btn-info']) ?>

                        <?= $this->Html->link(__('Edit'), ['controller' => 'Chartererpics', 'action' => 'edit', $chartererpics->id],['class' => 'btn btn-xs btn-warning']) ?>

                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chartererpics', 'action' => 'delete', $chartererpics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpics->id), 'class' => 'btn btn-xs btn-danger']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>