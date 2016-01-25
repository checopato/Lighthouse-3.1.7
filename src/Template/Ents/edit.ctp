<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['controller' => 'Shipowners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipowner'), ['controller' => 'Shipowners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entpics'), ['controller' => 'Entpics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entpic'), ['controller' => 'Entpics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ents form large-9 medium-8 columns content">
    <?= $this->Form->create($ent) ?>
    <fieldset>
        <legend><?= __('Edit Ent') ?></legend>
        <?php
            echo $this->Form->input('shipowner_id', ['options' => $shipowners]);
            echo $this->Form->input('name');
            echo $this->Form->input('info');
            echo $this->Form->input('entpics._ids', ['options' => $entpics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
