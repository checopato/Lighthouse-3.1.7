<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chartererpic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Chartererpics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chartererpics form large-9 medium-8 columns content">
    <?= $this->Form->create($chartererpic) ?>
    <fieldset>
        <legend><?= __('Edit Chartererpic') ?></legend>
        <?php
            echo $this->Form->input('charterer_id', ['options' => $charterers]);
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('cel_phone');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
