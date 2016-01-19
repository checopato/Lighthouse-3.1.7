<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shipowners form large-9 medium-8 columns content">
    <?= $this->Form->create($shipowner) ?>
    <fieldset>
        <legend><?= __('Add Shipowner') ?></legend>
        <?php
            echo $this->Form->input('full_style');
            echo $this->Form->input('nick');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
