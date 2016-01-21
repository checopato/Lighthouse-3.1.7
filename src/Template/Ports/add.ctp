<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= $this->Form->create($port) ?>
            <fieldset>
                <legend><?= __('Add Port') ?></legend>
                <?php
                    echo $this->Form->input('name',['class' => 'form-control']);
                    echo $this->Form->input('country',['class' => 'form-control']);
                ?>
            </fieldset>
            <p></p>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
