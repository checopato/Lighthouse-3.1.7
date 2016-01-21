<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="shipowners form large-9 medium-8 columns content">
                <?= $this->Form->create($shipowner) ?>
                <fieldset>
                    <legend><?= __('Add Shipowner') ?></legend>
                    <?php
                    echo $this->Form->input('full_style',['class' => 'form-control']);
                    echo $this->Form->input('nick',['class' => 'form-control']);
                    ?>
                </fieldset>
                <p></p>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>