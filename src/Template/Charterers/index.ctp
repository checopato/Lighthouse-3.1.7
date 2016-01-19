<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Charterer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="charterers index large-9 medium-8 columns content">
    <h3><?= __('Charterers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('full_style') ?></th>
                <th><?= $this->Paginator->sort('nick') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($charterers as $charterer): ?>
            <tr>
                <td><?= $this->Number->format($charterer->id) ?></td>
                <td><?= h($charterer->full_style) ?></td>
                <td><?= h($charterer->nick) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $charterer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $charterer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $charterer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charterer->id)]) ?>
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
