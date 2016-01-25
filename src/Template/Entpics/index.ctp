<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entpic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ents'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ent'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entpics index large-9 medium-8 columns content">
    <h3><?= __('Entpics') ?></h3>
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
            <?php foreach ($entpics as $entpic): ?>
            <tr>
                <td><?= $this->Number->format($entpic->id) ?></td>
                <td><?= h($entpic->name) ?></td>
                <td><?= h($entpic->phone) ?></td>
                <td><?= h($entpic->cel_phone) ?></td>
                <td><?= h($entpic->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entpic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entpic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entpic->id)]) ?>
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
