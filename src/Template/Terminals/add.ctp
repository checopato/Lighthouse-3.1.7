<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= $this->Form->create($terminal) ?>
            <fieldset>
                <legend><?= __('Add Terminal') ?></legend>
                <?php
                    echo $this->Form->input('port_id',['class' => 'form-control']);
                    echo $this->Form->input('name',['class' => 'form-control']);
                    echo $this->Form->input('restriction',['class' => 'form-control']);
                    echo $this->Form->input('description',['class' => 'form-control']); ?>
                    <p></p>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>