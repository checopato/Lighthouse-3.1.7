<div class="col-sm-2 col-md-3 sidebar">
    <ul class="side-nav">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Shipment - <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shipping->id],['class' => 'btn btn-default']) ?> <?= $this->Html->link(__('Fact'), ['controller' => 'Commisions','action' => 'add', $shipping->id],['class' => 'btn btn-default'])  ?></h3>
            </div>
            <div class="panel-body"> 
             <table class="table table-condensed">
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($shipping->serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vessel') ?></th>
                    <td><?= h($shipping->vessel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($shipping->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan Start') ?></th>
                    <td><?= h($shipping->laycan_com) ?></td>
                </tr>
                <tr>
                    <th><?= __('Laycan End') ?></th>
                    <td><?= h($shipping->laycan_end) ?></td>
                </tr>
                                <tr>
                    <th><?= __('Fix Type') ?></th>
                    <td><?= h($shipping->fixture->fix_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Counting') ?></th>
                    <td><?= h($shipping->fixture->start_counting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Com %') ?></th>
                    <td><?= $this->Number->format($shipping->fixture->broker_com) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo Nomination Day') ?></th>
                    <td><?= $this->Number->format($shipping->fixture->cargo_nom_day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Intended Performer') ?></th>
                    <td><?= $this->Number->format($shipping->fixture->int_per_dat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Final Performer') ?></th>
                    <td><?= $this->Number->format($shipping->fixture->final_performer) ?></td>
                </tr>
                <tr>
                    <th><?= __('C/P Date') ?></th>
                    <td><?= h($shipping->fixture->cp_date) ?></td>
            </table>
        </div>
    </ul>
</div>

<div class="col-sm-12 col-sm-offset-2 col-md-10 col-md-offset-2 main">
    <div class="related">
        <table>
            <tr>
                <td width="90%"><h4><?= __('Related Parcels') ?></h4></td>
                <td width="10%">        <?= $this->Html->link(__('New'), ['controller' => 'Parcels','action' => 'add', $shipping->id],['class' => 'btn btn-sm btn-primary']) ?></td>
            </tr>
        </table>
        <?php if (!empty($shipping->parcels)): ?>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Port') ?></th>
                    <th><?= __('Type Of Call') ?></th>
                    <th><?= __('Volume') ?></th>
                    <th><?= __('Unit') ?></th>
                    <th><?= __('Cargo') ?></th>
                    <th><?= __('Rate (t/h)') ?></th>
                    <th><?= __('Rate Average') ?></th>
                    <th><?= __('Term') ?></th>
                    <th><?= __('Demurrage Rate') ?></th>
                    <th><?= __('Freight 100%') ?></th>
                    <th><?= __('Freight Rate') ?></th>
                    <th><?= __('Owners Agent?') ?></th>
                    <th><?= __('Agent') ?></th>
                    <th><?= __('Despatch/Demurrage FFI') ?></th>
                    <th><?= __('Demurrage LHC') ?></th>
                    <th><?= __('Baf Usd') ?></th>
                    <th><?= __('Eta Arr') ?></th>
                    <th><?= __('Etb Ber') ?></th>
                    <th><?= __('Etoc Op Comm') ?></th>
                    <th><?= __('Etoc Op Comp') ?></th>
                    <th><?= __('Ets Sailed') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($shipping->parcels as $parcels): ?>
                    <tr>
                        <td><?= h($parcels->port_id) ?></td>
                        <td><?= h($parcels->type_of_call) ?></td>
                        <td><?= $this->Number->format($parcels->volume ,['places' => 2]) ?></td>
                        <td><?= h($parcels->unit) ?></td>
                        <td><?= h($parcels->cargo) ?></td>
                        <td><?= $this->Number->format($parcels->rate_op,['places' => 2]) ?></td>
                        <td><?= $this->Number->format($parcels->rate_av,['places' => 2]) ?></td>
                        <td><?= h($parcels->term) ?></td>
                        <td><?= $this->Number->format($parcels->demurrage_rate,['places' => 2]) ?></td>
                        <td><?= $this->Number->format($parcels->freight_100,['places' => 2]) ?></td>
                        <td><?= $this->Number->format($parcels->dem_bro,['places' => 2]) ?></td>
                        <td><?= $parcels->whose_agent ? __('Yes') : __('No'); ?></td>
                        <td><?= h($parcels->agent) ?></td>
                        <td><?= h($parcels->des_dem_ffi) ?></td>
                        <td><?= h($parcels->des_dem_char) ?></td>
                        <td><?= h($parcels->baf_usd) ?></td>
                        <td><?= h($parcels->eta_arr) ?></td>
                        <td><?= h($parcels->etb_ber) ?></td>
                        <td><?= h($parcels->etoc_op_comm) ?></td>
                        <td><?= h($parcels->etoc_op_comp) ?></td>
                        <td><?= h($parcels->ets_sailed) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Parcels', 'action' => 'view', $parcels->id]) ?>

                            <?= $this->Html->link(__('Edit'), ['controller' => 'Parcels', 'action' => 'edit', $parcels->id]) ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
