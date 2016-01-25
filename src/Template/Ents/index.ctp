<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['controller' => 'Shipowners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipowner'), ['controller' => 'Shipowners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entpics'), ['controller' => 'Entpics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entpic'), ['controller' => 'Entpics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ents index large-9 medium-8 columns content">
    <h3><?= __('Ents') ?></h3>
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
            <?php foreach ($ents as $ent): ?>
            <tr>
                <td><?= $this->Number->format($ent->id) ?></td>
                <td><?= $ent->has('shipowner') ? $this->Html->link($ent->shipowner->id, ['controller' => 'Shipowners', 'action' => 'view', $ent->shipowner->id]) : '' ?></td>
                <td><?= h($ent->name) ?></td>
                <td><?= h($ent->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ent->id)]) ?>
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
