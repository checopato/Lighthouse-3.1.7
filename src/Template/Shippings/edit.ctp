<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $shipping->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commisions'), ['controller' => 'Commisions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commision'), ['controller' => 'Commisions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parcels'), ['controller' => 'Parcels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcel'), ['controller' => 'Parcels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shippings form large-9 medium-8 columns content">
    <?= $this->Form->create($shipping) ?>
    <fieldset>
        <legend><?= __('Edit Shipping') ?></legend>
        <?php
            echo $this->Form->input('serie');
            echo $this->Form->input('fixture_id', ['options' => $fixtures]);
            echo $this->Form->input('vessel');
            echo $this->Form->input('laycan_com', ['empty' => true]);
            echo $this->Form->input('laycan_end', ['empty' => true]);
            echo $this->Form->input('freight_rate');
            echo $this->Form->input('status');
            echo $this->Form->input('is_fact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?php print_r($fix) ?>
</div>
