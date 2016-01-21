<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entity'), ['action' => 'edit', $entity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entity'), ['action' => 'delete', $entity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entitys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entitypics'), ['controller' => 'Entitypics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entitypic'), ['controller' => 'Entitypics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entitys view large-9 medium-8 columns content">
    <h3><?= h($entity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($entity->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Info') ?></th>
            <td><?= h($entity->info) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entity->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Shipowner Id') ?></th>
            <td><?= $this->Number->format($entity->shipowner_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entitypics') ?></h4>
        <?php if (!empty($entity->entitypics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Cel Phone') ?></th>
                <th><?= __('Email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entity->entitypics as $entitypics): ?>
            <tr>
                <td><?= h($entitypics->id) ?></td>
                <td><?= h($entitypics->name) ?></td>
                <td><?= h($entitypics->phone) ?></td>
                <td><?= h($entitypics->cel_phone) ?></td>
                <td><?= h($entitypics->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entitypics', 'action' => 'view', $entitypics->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entitypics', 'action' => 'edit', $entitypics->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entitypics', 'action' => 'delete', $entitypics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entitypics->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
