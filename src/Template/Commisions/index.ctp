<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Commision'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commisions index large-9 medium-8 columns content">
    <h3><?= __('Commisions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('shipping_id') ?></th>
                <th><?= $this->Paginator->sort('date_com') ?></th>
                <th><?= $this->Paginator->sort('service') ?></th>
                <th><?= $this->Paginator->sort('type_com') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commisions as $commision): ?>
            <tr>
                <td><?= $this->Number->format($commision->id) ?></td>
                <td><?= $commision->has('shipping') ? $this->Html->link($commision->shipping->id, ['controller' => 'Shippings', 'action' => 'view', $commision->shipping->id]) : '' ?></td>
                <td><?= h($commision->date_com) ?></td>
                <td><?= h($commision->service) ?></td>
                <td><?= h($commision->type_com) ?></td>
                <td><?= $this->Number->format($commision->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commision->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commision->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commision->id)]) ?>
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
