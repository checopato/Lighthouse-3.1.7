<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entpics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ents'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ent'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entpics form large-9 medium-8 columns content">
    <?= $this->Form->create($entpic) ?>
    <fieldset>
        <legend><?= __('Add Entpic') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('cel_phone');
            echo $this->Form->input('email');
            echo $this->Form->input('ents._ids', ['options' => $ents]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
