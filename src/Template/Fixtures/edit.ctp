<div class="fixtures form large-9 medium-8 columns content">
    <?= $this->Form->create($fixture) ?>
    <fieldset>
        <legend><?= __('Edit Fixture') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('pic_id');
            echo $this->Form->input('charterer_id', ['options' => $charterers]);
            echo $this->Form->input('shipowner_id', ['options' => $shipowners]);
            echo $this->Form->input('broker_com');
            echo $this->Form->input('cp_date', ['empty' => true]);
            echo $this->Form->input('fix_type');
            echo $this->Form->input('period_st', ['empty' => true]);
            echo $this->Form->input('period_nd', ['empty' => true]);
            echo $this->Form->input('start_counting');
            echo $this->Form->input('cargo_nom_day');
            echo $this->Form->input('int_per_dat');
            echo $this->Form->input('final_performer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
