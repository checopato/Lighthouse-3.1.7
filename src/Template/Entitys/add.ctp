<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entitys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entitypics'), ['controller' => 'Entitypics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entitypic'), ['controller' => 'Entitypics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entitys form large-9 medium-8 columns content">
    <?= $this->Form->create($entity) ?>
    <fieldset>
        <legend><?= __('Add Entity') ?></legend>
        <?php
            echo $this->Form->input('shipowner');
            echo $this->Form->input('name');
            echo $this->Form->input('info');
            echo $this->Form->input('entitypics._ids', ['options' => $entitypics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
