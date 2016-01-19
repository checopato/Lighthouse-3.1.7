<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $terminal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $terminal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Terminals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="terminals form large-9 medium-8 columns content">
    <?= $this->Form->create($terminal) ?>
    <fieldset>
        <legend><?= __('Edit Terminal') ?></legend>
        <?php
            echo $this->Form->input('ports_id', ['options' => $ports]);
            echo $this->Form->input('name');
            echo $this->Form->input('restriction');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
