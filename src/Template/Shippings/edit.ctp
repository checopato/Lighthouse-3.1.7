<div class="shippings form large-9 medium-8 columns content">
    <?= $this->Form->create($shipping) ?>
    <fieldset>
        <legend><?= __('Edit Shipping') ?></legend>
        <?php
            echo $this->Form->input('serie');
            echo $this->Form->hidden('fixture_id', ['options' => $fixtures]);
            echo $this->Form->input('vessel');
            echo $this->Form->input('laycan_com', ['label' => 'Laycan Start', 'type' => 'text', 'data-provide' => 'datepicker']);
            echo $this->Form->input('laycan_end', ['label' => 'Laycan End', 'type' => 'text', 'data-provide' => 'datepicker']);
            echo $this->Form->input('freight_rate'); ?>
            <b>Status</b>
            <?php
            echo $this->Form->select('status',[
                'Sailing to loading port' => 'Sailing to loading port',
                'At loading port' => 'At loading port',
                'Sailed from loading port' => 'Sailed from loading port',
                'Transit to discharge port' => 'Transit to discharge port',
                'At discharge port' => 'At discharge port',
                'Sailed from discharge port' => 'Sailed from discharge port',
                'Sailed from last discharge port' => 'Sailed from last discharge port',
                'Laytime calculation discussion' => 'Laytime calculation discussion',
                'Final balance settled' => 'Final balance settled',
                'Closed' => 'Closed'
                ]);
            echo $this->Form->hidden('is_fact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">
    $('.datepicker').datepicker({autoclose: "true"});
</script>