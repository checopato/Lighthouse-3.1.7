<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Terminal'), ['action' => 'edit', $terminal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Terminal'), ['action' => 'delete', $terminal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Terminals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Terminal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="terminals view large-9 medium-8 columns content">
    <h3><?= h($terminal->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Port') ?></th>
            <td><?= $terminal->has('port') ? $this->Html->link($terminal->port->name, ['controller' => 'Ports', 'action' => 'view', $terminal->port->id]) : '' ?></td>
        </tr>
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
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($terminal->id) ?></td>
        </tr>
    </table>
</div>
