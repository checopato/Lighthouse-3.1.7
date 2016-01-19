<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entitypic'), ['action' => 'edit', $entitypic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entitypic'), ['action' => 'delete', $entitypic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entitypic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entitypics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entitypic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entitys'), ['controller' => 'Entitys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Entitys', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entitypics view large-9 medium-8 columns content">
    <h3><?= h($entitypic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($entitypic->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($entitypic->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cel Phone') ?></th>
            <td><?= h($entitypic->cel_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($entitypic->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entitypic->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entitys') ?></h4>
        <?php if (!empty($entitypic->entitys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Shipowner') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entitypic->entitys as $entitys): ?>
            <tr>
                <td><?= h($entitys->id) ?></td>
                <td><?= h($entitys->shipowner) ?></td>
                <td><?= h($entitys->name) ?></td>
                <td><?= h($entitys->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entitys', 'action' => 'view', $entitys->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entitys', 'action' => 'edit', $entitys->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entitys', 'action' => 'delete', $entitys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entitys->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
