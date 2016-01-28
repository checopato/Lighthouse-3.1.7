<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= $this->Form->create($ent) ?>
            <fieldset>
                <legend><?= __('Edit Entity') ?></legend>
                <?php
                echo $this->Form->input('shipowner_id', ['options' => $shipowners , 'class' => 'form-control']);
                echo $this->Form->input('name',['class' => 'form-control']);
                echo $this->Form->input('info',['class' => 'form-control' , 'rows' => '3']);
                echo $this->Form->input('entpics._ids', ['options' => $entpics , 'class' => 'form-control']);
                ?>
            </fieldset>
            <p></p>
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
        ['action' => 'delete', $ent->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $ent->id)]
        )
        ?></li>
        <li><?= $this->Html->link(__('List Entities'), ['action' => 'index']) ?></li>
        <li role="separator" class="divider"></li>
        <li><?= $this->Html->link(__('List PICs'), ['controller' => 'Entpics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New PIC'), ['controller' => 'Entpics', 'action' => 'add']) ?></li>
    </ul>
</div>
