<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entitypic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entitys'), ['controller' => 'Entitys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Entitys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entitypics index large-9 medium-8 columns content">
    <h3><?= __('Entitypics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('cel_phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entitypics as $entitypic): ?>
            <tr>
                <td><?= $this->Number->format($entitypic->id) ?></td>
                <td><?= h($entitypic->name) ?></td>
                <td><?= h($entitypic->phone) ?></td>
                <td><?= h($entitypic->cel_phone) ?></td>
                <td><?= h($entitypic->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entitypic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entitypic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entitypic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entitypic->id)]) ?>
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
