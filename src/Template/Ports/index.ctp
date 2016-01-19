<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Port'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parcels'), ['controller' => 'Parcels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcel'), ['controller' => 'Parcels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ports index large-9 medium-8 columns content">
    <h3><?= __('Ports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ports as $port): ?>
            <tr>
                <td><?= $this->Number->format($port->id) ?></td>
                <td><?= h($port->name) ?></td>
                <td><?= h($port->country) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $port->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $port->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $port->id], ['confirm' => __('Are you sure you want to delete # {0}?', $port->id)]) ?>
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
