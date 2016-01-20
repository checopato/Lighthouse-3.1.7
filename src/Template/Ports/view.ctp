<div class="well">
    <h3><?= h($port->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($port->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($port->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($port->id) ?></td>
        </tr>
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('Edit Port'), ['action' => 'edit', $port->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Port'), ['action' => 'delete', $port->id], ['confirm' => __('Are you sure you want to delete # {0}?', $port->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?> </li>
        <li role="separator" class="divider"></li>
        <li class="dropdown-header">Terminals</li>
        <li><?= $this->Html->link(__('List Terminals'), ['controller' => 'Terminals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['controller' => 'Terminals', 'action' => 'add']) ?> </li>
    </ul>
</div>


    <div class="col-md-12">
        <h4><?= __('Related Terminals') ?></h4>
        <?php if (!empty($port->terminals)): ?>
        <table class="table table-striped">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Port Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Restriction') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($port->terminals as $terminals): ?>
            <tr>
                <td><?= h($terminals->id) ?></td>
                <td><?= h($terminals->port_id) ?></td>
                <td><?= h($terminals->name) ?></td>
                <td><?= h($terminals->description) ?></td>
                <td><?= h($terminals->restriction) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Terminals', 'action' => 'view', $terminals->id],['class' => 'btn btn-xs btn-info']) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Terminals', 'action' => 'edit', $terminals->id],['class' => 'btn btn-xs btn-warning']) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Terminals', 'action' => 'delete', $terminals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terminals->id), 'class' => 'btn btn-xs btn-danger']) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>