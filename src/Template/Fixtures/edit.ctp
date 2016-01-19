<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fixture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fixture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['controller' => 'Shipowners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipowner'), ['controller' => 'Shipowners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fixtures form large-9 medium-8 columns content">
    <?= $this->Form->create($fixture) ?>
    <fieldset>
        <legend><?= __('Edit Fixture') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('pic_id');
            echo $this->Form->input('charterer_id', ['options' => $charterers]);
            echo $this->Form->input('shipowner_id', ['options' => $shipowners]);
            echo $this->Form->input('broker_com');
            echo $this->Form->input('cp_date', ['empty' => true]);
            echo $this->Form->input('fix_type');
            echo $this->Form->input('period_st', ['empty' => true]);
            echo $this->Form->input('period_nd', ['empty' => true]);
            echo $this->Form->input('start_counting');
            echo $this->Form->input('cargo_nom_day');
            echo $this->Form->input('int_per_dat');
            echo $this->Form->input('final_performer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
