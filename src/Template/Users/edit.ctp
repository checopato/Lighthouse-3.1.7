<div class="container">
    <div class="row">
        <div class="col-md-4">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
                echo $this->Form->input('name',['class' => 'form-control']);
                echo $this->Form->input('password',['class' => 'form-control']);
                echo $this->Form->input('alias',['class' => 'form-control']);
                echo $this->Form->input('email',['class' => 'form-control']);
                echo $this->Form->input('phone',['class' => 'form-control']);
                echo $this->Form->input('is_admin');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
        <?= $this->Form->end() ?>
        </div>
    </div>
</div>