<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entitypics'), ['controller' => 'Entitypics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entitypic'), ['controller' => 'Entitypics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entitys index large-9 medium-8 columns content">
    <h3><?= __('Entitys') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('shipowner_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entitys as $entity): ?>
            <tr>
                <td><?= $this->Number->format($entity->id) ?></td>
                <td><?= $this->Number->format($entity->shipowner_id) ?></td>
                <td><?= h($entity->name) ?></td>
                <td><?= h($entity->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entity->id)]) ?>
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
