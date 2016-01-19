<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fixture'), ['action' => 'edit', $fixture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fixture'), ['action' => 'delete', $fixture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shipowners'), ['controller' => 'Shipowners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipowner'), ['controller' => 'Shipowners', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fixtures view large-9 medium-8 columns content">
    <h3><?= h($fixture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $fixture->has('user') ? $this->Html->link($fixture->user->name, ['controller' => 'Users', 'action' => 'view', $fixture->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Charterer') ?></th>
            <td><?= $fixture->has('charterer') ? $this->Html->link($fixture->charterer->id, ['controller' => 'Charterers', 'action' => 'view', $fixture->charterer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Shipowner') ?></th>
            <td><?= $fixture->has('shipowner') ? $this->Html->link($fixture->shipowner->id, ['controller' => 'Shipowners', 'action' => 'view', $fixture->shipowner->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fix Type') ?></th>
            <td><?= h($fixture->fix_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Start Counting') ?></th>
            <td><?= h($fixture->start_counting) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fixture->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pic Id') ?></th>
            <td><?= $this->Number->format($fixture->pic_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Broker Com') ?></th>
            <td><?= $this->Number->format($fixture->broker_com) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo Nom Day') ?></th>
            <td><?= $this->Number->format($fixture->cargo_nom_day) ?></td>
        </tr>
        <tr>
            <th><?= __('Int Per Dat') ?></th>
            <td><?= $this->Number->format($fixture->int_per_dat) ?></td>
        </tr>
        <tr>
            <th><?= __('Final Performer') ?></th>
            <td><?= $this->Number->format($fixture->final_performer) ?></td>
        </tr>
        <tr>
            <th><?= __('Cp Date') ?></th>
            <td><?= h($fixture->cp_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Period St') ?></th>
            <td><?= h($fixture->period_st) ?></td>
        </tr>
        <tr>
            <th><?= __('Period Nd') ?></th>
            <td><?= h($fixture->period_nd) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shippings') ?></h4>
        <?php if (!empty($fixture->shippings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Serie') ?></th>
                <th><?= __('Fixture Id') ?></th>
                <th><?= __('Vessel') ?></th>
                <th><?= __('Laycan Com') ?></th>
                <th><?= __('Laycan End') ?></th>
                <th><?= __('Freight Rate') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Is Fact') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fixture->shippings as $shippings): ?>
            <tr>
                <td><?= h($shippings->id) ?></td>
                <td><?= h($shippings->serie) ?></td>
                <td><?= h($shippings->fixture_id) ?></td>
                <td><?= h($shippings->vessel) ?></td>
                <td><?= h($shippings->laycan_com) ?></td>
                <td><?= h($shippings->laycan_end) ?></td>
                <td><?= h($shippings->freight_rate) ?></td>
                <td><?= h($shippings->status) ?></td>
                <td><?= h($shippings->is_fact) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shippings', 'action' => 'view', $shippings->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shippings', 'action' => 'edit', $shippings->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shippings', 'action' => 'delete', $shippings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippings->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
