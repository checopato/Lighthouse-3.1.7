<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= $this->Form->create($shipowner) ?>
            <fieldset>
                <legend><?= __('Edit Shipowner') ?></legend>
                <?php
                echo $this->Form->input('full_style',['class' => 'form-control']);
                echo $this->Form->input('nick',['class' => 'form-control']);
                ?>
                <p></p>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<p></p>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $shipowner->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $shipowner->id)]
        )
        ?></li>
        <li><?= $this->Html->link(__('List Shipowners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
    </ul>
</div>