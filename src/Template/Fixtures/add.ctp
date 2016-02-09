<div class="fixtures form large-9 medium-8 columns content">
    <?= $this->Form->create($fixture) ?>
    <fieldset>
        <legend><?= __('Add Fixture') ?></legend>

        <div class="col-md-8">
            <table class="table">
            <tr>
                <td><b>Fixer</b> <p></p> <?php echo $this->Form->input('user_id', ['options' => $users , 'label' => false ]); ?></td>
                <td><b>PIC</b> <p></p> <?php echo $this->Form->input('pic_id', ['label' => false]); ?></td>
                <td colspan="2"><b>Charterer</b> <p></p> <?php echo $this->Form->input('charterer_id', ['options' => $charterers, 'label' => false]); ?></td>
                <td colspan="2"><b>Shipowner</b> <p></p><?php echo $this->Form->input('shipowner_id', ['options' => $shipowners, 'label' => false]); ?></td>
                <td><b>Commission</b> <p></p><?php echo $this->Form->input('broker_com', ['label' => false , 'type' => 'text', 'placeholder' => 'Please use dot', 'maxlength' => '4' ]); ?></td>
            </tr>
            <tr>
                <td colspan="2"><b>C/P Date</b> <p></p><?php echo $this->Form->input('cp_date', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                <td><b>Fix Type</b> <p></p><?php echo $this->Form->select('fix_type',[
                'COA' => 'COA',
                'Spot' => 'Spot'] 
                ,['label' => false, ]); ?></td>
                <td colspan="2"><b>Period Start</b> <p></p><?php echo $this->Form->input('period_st', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                <td colspan="2"><b>Period End</b> <p></p><?php echo $this->Form->input('period_nd', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
            </tr>
            <tr>
                <td colspan="3"><b>Start Counting</b> <p></p><?php echo $this->Form->select('start_counting',[
                'Before first day of Laycan' => 'Before first day of Laycan' ,
                'Other Option 1' => 'Other Option 1', 
                'Other Option 2' => 'Other Option 2'] ,
                ['label' => false, ]); ?></td>
                <td><b>Cargo Nomination Day</b> <p></p><?php echo $this->Form->input('cargo_nom_day', ['label' => false, 'type' => 'text']); ?></td>
                <td><b>Intended Performer Day</b> <p></p><?php echo $this->Form->input('int_per_dat', ['label' => false, 'type' => 'text']); ?></td>
                <td><b>Final Performer Day</b> <p></p><?php echo $this->Form->input('final_performer', ['label' => false, 'type' => 'text']); ?></td>
                <td></td>
            </tr>
            </table>
        </div>

    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">
    $('.datepicker').datepicker({autoclose: "true"});
</script>

        
            
            
            
        