<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="chartererpics form large-9 medium-8 columns content">
                <?= $this->Form->create($chartererpic) ?>
                <fieldset>
                    <legend><?= __('Edit PIC') ?></legend>
                    <?php
                    echo $this->Form->input('charterer_id', ['options' => $charterers,'class' => 'form-control']);
                    echo $this->Form->input('name',['class' => 'form-control']);
                    echo $this->Form->input('phone',['class' => 'form-control']);
                    echo $this->Form->input('cel_phone',['class' => 'form-control']);
                    echo $this->Form->input('email',['class' => 'form-control']);
                    ?>
                </fieldset>
                <p></p>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
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
        __('Delete PIC'),
        ['action' => 'delete', $chartererpic->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id)]
        )
        ?></li>
        <li><?= $this->Html->link(__('List PICs'), ['action' => 'index']) ?></li>
    </ul>
</div>
