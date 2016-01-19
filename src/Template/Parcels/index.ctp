<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parcel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parcels index large-9 medium-8 columns content">
    <h3><?= __('Parcels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('shipping_id') ?></th>
                <th><?= $this->Paginator->sort('port_id') ?></th>
                <th><?= $this->Paginator->sort('type_of_call') ?></th>
                <th><?= $this->Paginator->sort('volume') ?></th>
                <th><?= $this->Paginator->sort('unit') ?></th>
                <th><?= $this->Paginator->sort('cargo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parcels as $parcel): ?>
            <tr>
                <td><?= $this->Number->format($parcel->id) ?></td>
                <td><?= $parcel->has('shipping') ? $this->Html->link($parcel->shipping->id, ['controller' => 'Shippings', 'action' => 'view', $parcel->shipping->id]) : '' ?></td>
                <td><?= $parcel->has('port') ? $this->Html->link($parcel->port->name, ['controller' => 'Ports', 'action' => 'view', $parcel->port->id]) : '' ?></td>
                <td><?= h($parcel->type_of_call) ?></td>
                <td><?= $this->Number->format($parcel->volume) ?></td>
                <td><?= h($parcel->unit) ?></td>
                <td><?= h($parcel->cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parcel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parcel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parcel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcel->id)]) ?>
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
