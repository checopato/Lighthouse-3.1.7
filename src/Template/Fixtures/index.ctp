<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['controller' => 'Shipowners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipowner'), ['controller' => 'Shipowners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fixtures index large-9 medium-8 columns content">
    <h3><?= __('Fixtures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('pic_id') ?></th>
                <th><?= $this->Paginator->sort('charterer_id') ?></th>
                <th><?= $this->Paginator->sort('shipowner_id') ?></th>
                <th><?= $this->Paginator->sort('broker_com') ?></th>
                <th><?= $this->Paginator->sort('cp_date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fixtures as $fixture): ?>
            <tr>
                <td><?= $this->Number->format($fixture->id) ?></td>
                <td><?= $fixture->has('user') ? $this->Html->link($fixture->user->name, ['controller' => 'Users', 'action' => 'view', $fixture->user->id]) : '' ?></td>
                <td><?= $this->Number->format($fixture->pic_id) ?></td>
                <td><?= $fixture->has('charterer') ? $this->Html->link($fixture->charterer->id, ['controller' => 'Charterers', 'action' => 'view', $fixture->charterer->id]) : '' ?></td>
                <td><?= $fixture->has('shipowner') ? $this->Html->link($fixture->shipowner->id, ['controller' => 'Shipowners', 'action' => 'view', $fixture->shipowner->id]) : '' ?></td>
                <td><?= $this->Number->format($fixture->broker_com) ?></td>
                <td><?= h($fixture->cp_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fixture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fixture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fixture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]) ?>
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
