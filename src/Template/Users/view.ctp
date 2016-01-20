<div class="well">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Alias') ?></th>
            <td><?= h($user->alias) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Admin?') ?></th>
            <td><?= $user->is_admin ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>


    <div class="related">
        <h4><?= __('Related Fixtures') ?></h4>
        <?php if (!empty($user->fixtures)): ?>
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
            <?php foreach ($user->fixtures as $fixtures): ?>
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
