<div class="col-sm-2 col-md-3 sidebar">
    <ul class="side-nav">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Fixture</h3>
            </div>
            <div class="panel-body"> 
               <table class="table table-condensed">
                <tr>
                    <th><?= __('Fixer') ?></th>
                    <td><?= h($fixture->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('PIC') ?></th>
                    <td><?= h($fixture->pic_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charterer') ?></th>
                    <td><?= h($fixture->charterer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipowner') ?></th>
                    <td><?= h($fixture->shipowner_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fix Type') ?></th>
                    <td><?= h($fixture->fix_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Counting') ?></th>
                    <td><?= h($fixture->start_counting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Com %') ?></th>
                    <td><?= $this->Number->format($fixture->broker_com) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo Nomination Day') ?></th>
                    <td><?= $this->Number->format($fixture->cargo_nom_day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Intended Performer') ?></th>
                    <td><?= $this->Number->format($fixture->int_per_dat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Final Performer') ?></th>
                    <td><?= $this->Number->format($fixture->final_performer) ?></td>
                </tr>
                <tr>
                    <th><?= __('C/P Date') ?></th>
                    <td><?= h($fixture->cp_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan Start') ?></th>
                    <td><?= h($fixture->period_st) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan End') ?></th>
                    <td><?= h($fixture->period_nd) ?></td>
                </tr>
            </table>
        </div>
    </div>
</ul>
</div>

<div class="col-sm-12 col-sm-offset-2 col-md-10 col-md-offset-2 main">

    <?= $this->Form->create($shipping) ?>
    <fieldset>
        <legend><?= __('Add Shippments') ?></legend>
        <?php
            echo $this->Form->input('serie');
            echo $this->Form->hidden('fixture_id', ['default' => $fixture->id , 'type' => 'text']);
            echo $this->Form->input('vessel');
            if ($fixture->fix_type == 'COA')
            {
                # In case is a COA fixture
                echo $this->Form->input('laycan_com', ['label' => 'Laycan Start', 'type' => 'text', 'data-provide' => 'datepicker']);
                echo $this->Form->input('laycan_end', ['label' => 'Laycan End', 'type' => 'text', 'data-provide' => 'datepicker']);
            }
            echo $this->Form->input('freight_rate', ['label' => 'freight_rate' , 'type' => 'text', 'maxlength' => '4' ]);
            echo $this->Form->input('status');
            echo $this->Form->hidden('is_fact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?> 
</div>

<script type="text/javascript">
    $('.datepicker').datepicker({autoclose: "true"});
</script>