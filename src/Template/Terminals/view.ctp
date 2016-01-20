<div class="well">
    <h3><?= h($terminal->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($terminal->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Restriction') ?></th>
            <td><?= h($terminal->restriction) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($terminal->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Port') ?></th>
            <td><?= h($terminal->port->name) ?></td>
        </tr>
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('Edit Terminal'), ['action' => 'edit', $terminal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Terminal'), ['action' => 'delete', $terminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['action' => 'add']) ?> </li>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?> </li>
    </ul>
</div>