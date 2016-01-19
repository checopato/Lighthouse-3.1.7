<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entitypics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entitys'), ['controller' => 'Entitys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Entitys', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entitypics form large-9 medium-8 columns content">
    <?= $this->Form->create($entitypic) ?>
    <fieldset>
        <legend><?= __('Add Entitypic') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('cel_phone');
            echo $this->Form->input('email');
            echo $this->Form->input('entitys._ids', ['options' => $entitys]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
