<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shipowner'), ['action' => 'edit', $shipowner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipowner'), ['action' => 'delete', $shipowner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipowner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shipowners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipowner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shipowners view large-9 medium-8 columns content">
    <h3><?= h($shipowner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Full Style') ?></th>
            <td><?= h($shipowner->full_style) ?></td>
        </tr>
        <tr>
            <th><?= __('Nick') ?></th>
            <td><?= h($shipowner->nick) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($shipowner->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fixtures') ?></h4>
        <?php if (!empty($shipowner->fixtures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Pic Id') ?></th>
                <th><?= __('Charterer Id') ?></th>
                <th><?= __('Shipowner Id') ?></th>
                <th><?= __('Broker Com') ?></th>
                <th><?= __('Cp Date') ?></th>
                <th><?= __('Fix Type') ?></th>
                <th><?= __('Period St') ?></th>
                <th><?= __('Period Nd') ?></th>
                <th><?= __('Start Counting') ?></th>
                <th><?= __('Cargo Nom Day') ?></th>
                <th><?= __('Int Per Dat') ?></th>
                <th><?= __('Final Performer') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shipowner->fixtures as $fixtures): ?>
            <tr>
                <td><?= h($fixtures->id) ?></td>
                <td><?= h($fixtures->user_id) ?></td>
                <td><?= h($fixtures->pic_id) ?></td>
                <td><?= h($fixtures->charterer_id) ?></td>
                <td><?= h($fixtures->shipowner_id) ?></td>
                <td><?= h($fixtures->broker_com) ?></td>
                <td><?= h($fixtures->cp_date) ?></td>
                <td><?= h($fixtures->fix_type) ?></td>
                <td><?= h($fixtures->period_st) ?></td>
                <td><?= h($fixtures->period_nd) ?></td>
                <td><?= h($fixtures->start_counting) ?></td>
                <td><?= h($fixtures->cargo_nom_day) ?></td>
                <td><?= h($fixtures->int_per_dat) ?></td>
                <td><?= h($fixtures->final_performer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fixtures', 'action' => 'view', $fixtures->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fixtures', 'action' => 'edit', $fixtures->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fixtures', 'action' => 'delete', $fixtures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixtures->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
