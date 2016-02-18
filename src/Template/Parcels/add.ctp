<div class="col-sm-2 col-md-3 sidebar">
    <ul class="side-nav">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Shipment - <?= h($shipping->serie) ?></h3>
            </div>
            <div class="panel-body"> 
               <table class="table table-condensed">
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($shipping->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vessel') ?></th>
                    <td><?= h($shipping->vessel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan Start') ?></th>
                    <td><?= h($shipping->laycan_com) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan End') ?></th>
                    <td><?= h($shipping->laycan_end) ?></td>
                </tr>
            </table>
        </div>
    </div>
</ul>
</div>

<div class="col-sm-12 col-sm-offset-2 col-md-10 col-md-offset-2 main">
    <?= $this->Form->create($parcel) ?>
    <fieldset>
        <legend><?= __('Add Parcel') ?></legend>
        <?php echo $this->Form->hidden('shipping_id', ['default' => $shipping->id , 'type' => 'text']); ?>
        <div class="col-sm-4">
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Type of call </b><p></p> <?php echo $this->Form->select('type_of_call',[
                            'Loading Port' => 'Loading Port' ,
                            'Discharge Port' => 'Discharge Port'],
                            ['label' => false, ]); ?> </td>
                    </tr>
                    <tr>
                        <td><b>Port</b> <p></p> <?php  echo $this->Form->input('port_id', ['options' => $ports, 'label' => false]);?></td>
                    </tr>
                    <tr>
                        <td><b>Volume </b><p></p> <?php echo $this->Form->input('volume', ['label' => false , 'type' => 'text', 'maxlength' => '10' ]); ?> </td>
                    </tr>
                    <tr>
                        <td> <b>Unit </b><p></p> <?php echo $this->Form->select('unit',[
                            'WMT' => 'WMT' ,
                            'MTS' => 'MTS', 
                            'CBM' => 'CBM'] ,
                            ['label' => false, ]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Cargo </b><p></p> <?php echo $this->Form->input('cargo', ['label' => false]); ?> </td>
                    </tr>
                    <tr>
                        <td><b>Rate (t/h) </b><p></p> <?php echo $this->Form->input('rate_op', ['label' => false , 'type' => 'text', 'maxlength' => '10' ]); ?> </td>
                    </tr>
                    <tr>
                        <td><b>Rate Average</b> <p></p><?php echo $this->Form->input('rate_av', ['label' => false , 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Term</b> <p></p><?php echo $this->Form->select('term',[
                            'TBN' => 'TBN',
                            'SHINC' => 'SHINC' ,
                            'SATSHEX' => 'SATSHEX', 
                            'SHEX' => 'SHEX',
                            'SATPMSHEX' => 'SATPMSHEX',
                            'CQD' => 'CQD'] ,
                            ['label' => false, ]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Demurrage Rate</b> <p></p><?php echo $this->Form->input('demurrage_rate', ['label' => false, 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Freight 100% </b><p></p><?php echo $this->Form->input('freight_100', ['label' => false, 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Owners Agent?</b><p></p><?php echo $this->Form->input('whose_agent', ['label' => 'Yes']); ?>  <p></p></td>
                    </tr>
                    <tr>
                        <td><b>Agent <p></p><?php echo $this->Form->input('agent', ['label' => false]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Despatch/Demurrage (FFI)</b> <p></p><?php echo $this->Form->input('des_dem_ffi', ['label' => false, 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>
                    <tr>
                        <td><b>Demurrage (LHC)</b> <p></p><?php echo $this->Form->input('des_dem_char', ['label' => false, 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Freight Rate</b> <p></p><?php echo $this->Form->input('dem_bro', ['label' => false, 'type' => 'text', 'maxlength' => '10' ]); ?></td>
                    </tr>
                    <tr>
                    <td><b>BAF (USD)</b> <p></p><?php echo $this->Form->input('baf_usd', ['label' => false, 'type' => 'text', 'maxlength' => '10']); ?></td>
                    </tr>
                    <tr>
                        <td><b>ETA Arrival</b> <p></p><?php echo $this->Form->input('eta_arr', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                    <tr>
                        <td><b>ETB Berthed</b> <p></p><?php echo $this->Form->input('etb_ber', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                    <tr>
                        <td><b>ETOC OP Completed</b> <p></p><?php echo $this->Form->input('etoc_op_comm', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                    <tr>
                        <td><b>ETS Sailed</b> <p></p><?php echo $this->Form->input('ets_sailed', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                    <tr>
                        <td><b>OBL Issuing</b> <p></p><?php echo $this->Form->input('etoc_op_comp', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

<script type="text/javascript">
    $('.datepicker').datepicker({autoclose: "true"});
</script>
