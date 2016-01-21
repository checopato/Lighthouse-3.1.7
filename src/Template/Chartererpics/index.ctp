<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chartererpic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chartererpics index large-9 medium-8 columns content">
    <h3><?= __('Chartererpics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('charterer_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('cel_phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chartererpics as $chartererpic): ?>
            <tr>
                <td><?= $this->Number->format($chartererpic->id) ?></td>
                <td><?= $chartererpic->has('charterer') ? $this->Html->link($chartererpic->charterer->id, ['controller' => 'Charterers', 'action' => 'view', $chartererpic->charterer->id]) : '' ?></td>
                <td><?= h($chartererpic->name) ?></td>
                <td><?= h($chartererpic->phone) ?></td>
                <td><?= h($chartererpic->cel_phone) ?></td>
                <td><?= h($chartererpic->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chartererpic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chartererpic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chartererpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id)]) ?>
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
