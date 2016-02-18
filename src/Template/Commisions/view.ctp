<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commision'), ['action' => 'edit', $commision->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commision'), ['action' => 'delete', $commision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commision->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Commisions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commision'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commisions view large-9 medium-8 columns content">
    <h3><?= h($commision->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Shipping') ?></th>
            <td><?= $commision->has('shipping') ? $this->Html->link($commision->shipping->id, ['controller' => 'Shippings', 'action' => 'view', $commision->shipping->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Service') ?></th>
            <td><?= h($commision->service) ?></td>
        </tr>
        <tr>
            <th><?= __('Type Com') ?></th>
            <td><?= h($commision->type_com) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($commision->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Freight') ?></th>
            <td><?= $this->Number->format($commision->freight) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Freight') ?></th>
            <td><?= $this->Number->format($commision->total_freight) ?></td>
        </tr>
        <tr>
            <th><?= __('Total Demurrage') ?></th>
            <td><?= $this->Number->format($commision->total_demurrage) ?></td>
        </tr>
        <tr>
            <th><?= __('Commission') ?></th>
            <td><?= $this->Number->format($commision->commission) ?></td>
        </tr>
        <tr>
            <th><?= __('Total') ?></th>
            <td><?= $this->Number->format($commision->total) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Com') ?></th>
            <td><?= h($commision->date_com) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($commision->created) ?></td>
        </tr>
    </table>
</div>
