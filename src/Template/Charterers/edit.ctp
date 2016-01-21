<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= $this->Form->create($charterer) ?>
            <fieldset>
                <legend><?= __('Edit Charterer') ?></legend>
                <?php
                echo $this->Form->input('full_style',['class' => 'form-control']);
                echo $this->Form->input('nick',['class' => 'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $charterer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $charterer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Charterers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?></li>
    </ul>
</nav>