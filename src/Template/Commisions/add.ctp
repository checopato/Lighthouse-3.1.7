<?php // echo $this->Html->css('grid'); ?>

<div class="commisions form large-9 medium-8 columns content">
    <?= $this->Form->create($commision) ?>
    <fieldset>
        <p> </p>
        <br>
        <div class="rowt">
            <div class="col-md-12">
                <table>
                    <tr>
                        <td rowspan="2" width="70%"><?php echo $this->Html->image('logo_lighthouse_chartering.png', ['alt' => 'Lighthouse Logo', 'width' => "200", 'height' => "60"]); ?></td>
                        <td></td>
                        <td width="15%"><b>Invoice No</b></td>
                        <td width="20%"><?= h($shipping->serie) ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>Date</b></td>
                        <td align="right"><?php echo $this->Form->input('date_com', ['label' => false, 'type' => 'text', 'data-provide' => 'datepicker']); ?></td>
                    </tr>
                </table>
                <br>
                <br>
            </div>
        </div>

        <div class="rowt">
            <div class="col-md-12" style="background-color: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(0, 0, 0, 0.2);
            padding-bottom: 1px;
            padding-top: 1px;">
            <h1 align="center">COMMISION INVOICE</h1>
        </div>
    </div>

    <div class="rowt">
        <div class="col-md-6">
            <br>
            <table> 
                <tr>
                    <td width="30%"><b>Client</b></td>
                    <td><?php echo $com_info['client'] ?></td>
                </tr>
                <tr>
                    <td width="30%"><b>Charterer</b></td>
                    <td><?php echo $com_info['charterer'] ?></td>
                </tr>
                <tr>
                    <td width="30%"><b>Vessel</b></td>
                    <td><?php echo $shipping->vessel ?></td>
                </tr>
                <tr>
                    <td width="30%"><b>Service</b></td>
                    <td><?php echo $this->Form->select('service',[
                            'FREIGHT COMMISSION' => 'FREIGHT COMMISSION'],
                            ['label' => false, ]); ?></td>
                </tr>
            </table>
            <br>
        </div>
        <div class="col-md-6">
            <table>
                <tr>
                    <br>
                    <td width="60%"><b>Loading Port</b></td>
                    <td><?php echo $com_info['load_ports'] ?></td>
                </tr>
                <tr>
                    <td width="60%"><b>Discharging Port</b></td>
                    <td><?php echo $com_info['dis_ports'] ?></td>
                </tr>
                <tr>
                    <td width="60%"><b>Quantity Cargo</b></td>
                    <td><?php echo $this->Number->format($com_info['total_vol'],['places' => 2]).' '.$com_info['unit'] ?></td>
                </tr>
                <tr>
                    <td width="60%"><b>Cargo</b></td>
                    <td><?php echo $com_info['cargo'] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="rowt">
        <div class="col-md-12" style="background-color: rgba(255, 255, 255, 0.15);
            border: 2px solid rgba(0, 0, 0, 0.2);
            padding-bottom: 1px;
            padding-top: 1px;">
        <table>
            <tr>
                <td width="20%"><b>C/P Date</b></td>
                <td width="20%"><b><?= h($shipping->fixture->cp_date) ?></b></td>
                <td width="20%"></td>
                <td width="20%"><b>OBL Issuing Date</b></td>
                <td width="20%" colspan="2">UNA FECHA</td>
                <td></td>
            </tr>
            <br>
            <tr>
                <td><br></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Freight</td>
                <td></td>
                <td></td>
                <td><?php echo $this->Number->format($com_info['finalfreight'],['places' => 2]).' USD' ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Total Freight</td>
                <td></td>
                <td></td>
                <td><?php echo $this->Number->format($com_info['tot_freight'],['places' => 2]).' USD' ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Total Demurrage</td>
                <td></td>
                <td></td>
                <td><?php echo $this->Number->format($com_info['tot_dem'],['places' => 2]).' USD' ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Commission</td>
                <td><?= h($shipping->fixture->broker_com).'%' ?></td>
                <td></td>
                <td><?php echo $this->Number->format($com_info['tot_com'],['places' => 2]).' USD' ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><h3><font color="red">TOTAL</font></h3></td>
                <td></td>
                <td></td>
                <td width="20%" colspan="2"><h3><font color="red"><?php echo $this->Number->format($com_info['tot_com'],['places' => 2]).' USD' ?></font></h3></td>
                <td></td>
            </tr>
        </table>
        </div>
    </div>
        <?php
            echo $this->Form->hidden('shipping_id', ['default' => $shipping->id, 'type' => 'text']);
            echo $this->Form->hidden('client',['default' => $com_info['client']]);
            echo $this->Form->hidden('charterer',['default' => $com_info['charterer']]);
            echo $this->Form->hidden('vessel',['default' => $shipping->vessel ]);
            echo $this->Form->hidden('type_com',['default' => $shipping->status]);
            echo $this->Form->hidden('freight',['default' => $com_info['finalfreight']]);
            echo $this->Form->hidden('total_freight',['default' => $com_info['tot_freight']]);
            echo $this->Form->hidden('total_demurrage',['default' => $com_info['tot_dem']]);
            echo $this->Form->hidden('commission',['default' => $shipping->fixture->broker_com]);
            echo $this->Form->hidden('total',['default' => $com_info['tot_com']]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
    <?= $this->Form->end() ?>
</div>

<br>

<?= $this->Html->link(__('Back to Shipment'), ['controller' => 'Shippings', 'action' => 'view', $shipping->id],['class' => 'btn btn-xs btn-info']) ?></li>


<script type="text/javascript">
    $('.datepicker').datepicker({autoclose: "true"});
</script>