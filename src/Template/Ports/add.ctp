<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parcels'), ['controller' => 'Parcels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parcel'), ['controller' => 'Parcels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ports form large-9 medium-8 columns content">
    <?= $this->Form->create($port) ?>
    <fieldset>
        <legend><?= __('Add Port') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('country');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
