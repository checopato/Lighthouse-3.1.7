<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commision->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commision->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Commisions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commisions form large-9 medium-8 columns content">
    <?= $this->Form->create($commision) ?>
    <fieldset>
        <legend><?= __('Edit Commision') ?></legend>
        <?php
            echo $this->Form->input('shipping_id', ['options' => $shippings, 'empty' => true]);
            echo $this->Form->input('date_com', ['empty' => true]);
            echo $this->Form->input('service');
            echo $this->Form->input('type_com');
            echo $this->Form->input('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
