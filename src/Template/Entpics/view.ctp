<div class="well">
    <h3><?= h($entpic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($entpic->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($entpic->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cel Phone') ?></th>
            <td><?= h($entpic->cel_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($entpic->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entpic->id) ?></td>
        </tr>
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('Edit Entpic'), ['action' => 'edit', $entpic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entpic'), ['action' => 'delete', $entpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entpic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List PICs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New PIC'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?> </li>
    </ul>
</div>

    <div class="related">
        <h4><?= __('Related Entities') ?></h4>
        <?php if (!empty($entpic->ents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Shipowner') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entpic->ents as $ents): ?>
            <tr>
                <td><?= h($ents->shipowner->nick) ?></td>
                <td><?= h($ents->name) ?></td>
                <td><?= h($ents->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ents', 'action' => 'view', $ents->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ents', 'action' => 'edit', $ents->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ents', 'action' => 'delete', $ents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ents->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
