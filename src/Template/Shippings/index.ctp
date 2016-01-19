<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commisions'), ['controller' => 'Commisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commision'), ['controller' => 'Commisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parcels'), ['controller' => 'Parcels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcel'), ['controller' => 'Parcels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shippings index large-9 medium-8 columns content">
    <h3><?= __('Shippings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('serie') ?></th>
                <th><?= $this->Paginator->sort('fixture_id') ?></th>
                <th><?= $this->Paginator->sort('vessel') ?></th>
                <th><?= $this->Paginator->sort('laycan_com') ?></th>
                <th><?= $this->Paginator->sort('laycan_end') ?></th>
                <th><?= $this->Paginator->sort('freight_rate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shippings as $shipping): ?>
            <tr>
                <td><?= $this->Number->format($shipping->id) ?></td>
                <td><?= h($shipping->serie) ?></td>
                <td><?= $shipping->has('fixture') ? $this->Html->link($shipping->fixture->id, ['controller' => 'Fixtures', 'action' => 'view', $shipping->fixture->id]) : '' ?></td>
                <td><?= h($shipping->vessel) ?></td>
                <td><?= h($shipping->laycan_com) ?></td>
                <td><?= h($shipping->laycan_end) ?></td>
                <td><?= $this->Number->format($shipping->freight_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shipping->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shipping->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->id)]) ?>
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
