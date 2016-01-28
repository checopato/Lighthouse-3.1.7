<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="shipowners form large-9 medium-8 columns content">
                <?= $this->Form->create($entpic) ?>
                <fieldset>
                    <legend><?= __('Add PIC') ?></legend>
                    <?php
                    echo $this->Form->input('name',['class' => 'form-control']);
                    echo $this->Form->input('phone',['class' => 'form-control']);
                    echo $this->Form->input('cel_phone',['class' => 'form-control']);
                    echo $this->Form->input('email',['class' => 'form-control']);
                    echo $this->Form->input('ents._ids', ['options' => $ents,'class' => 'form-control', 'label' => 'Entities']);
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
<li><?= $this->Html->link(__('List PICs'), ['action' => 'index']) ?></li>
    <li role="separator" class="divider"></li>
    <li><?= $this->Html->link(__('List Entities'), ['controller' => 'Ents', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Entity'), ['controller' => 'Ents', 'action' => 'add']) ?></li>
</ul>
</div>