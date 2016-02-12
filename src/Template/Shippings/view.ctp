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
                    <th><?= __('Freight Rate') ?></th>
                    <td><?= $this->Number->format($shipping->freight_rate) ?></td>
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
                    <th><?= __('Factured?') ?></th>
                    <td><?= $shipping->is_fact ? __('Yes') : __('No'); ?></td>
                </tr>
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
                    <th><?= __('Id') ?></th>
                    <th><?= __('Shipping Id') ?></th>
                    <th><?= __('Port Id') ?></th>
                    <th><?= __('Type Of Call') ?></th>
                    <th><?= __('Volume') ?></th>
                    <th><?= __('Unit') ?></th>
                    <th><?= __('Cargo') ?></th>
                    <th><?= __('Rate Op') ?></th>
                    <th><?= __('Rate Av') ?></th>
                    <th><?= __('Term') ?></th>
                    <th><?= __('Demurrage Rate') ?></th>
                    <th><?= __('Freight 100') ?></th>
                    <th><?= __('Whose Agent') ?></th>
                    <th><?= __('Agent') ?></th>
                    <th><?= __('Des Dem Ffi') ?></th>
                    <th><?= __('Des Dem Char') ?></th>
                    <th><?= __('Dem Bro') ?></th>
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
                        <td><?= h($parcels->id) ?></td>
                        <td><?= h($parcels->shipping_id) ?></td>
                        <td><?= h($parcels->port_id) ?></td>
                        <td><?= h($parcels->type_of_call) ?></td>
                        <td><?= h($parcels->volume) ?></td>
                        <td><?= h($parcels->unit) ?></td>
                        <td><?= h($parcels->cargo) ?></td>
                        <td><?= h($parcels->rate_op) ?></td>
                        <td><?= h($parcels->rate_av) ?></td>
                        <td><?= h($parcels->term) ?></td>
                        <td><?= h($parcels->demurrage_rate) ?></td>
                        <td><?= h($parcels->freight_100) ?></td>
                        <td><?= h($parcels->whose_agent) ?></td>
                        <td><?= h($parcels->agent) ?></td>
                        <td><?= h($parcels->des_dem_ffi) ?></td>
                        <td><?= h($parcels->des_dem_char) ?></td>
                        <td><?= h($parcels->dem_bro) ?></td>
                        <td><?= h($parcels->baf_usd) ?></td>
                        <td><?= h($parcels->eta_arr) ?></td>
                        <td><?= h($parcels->etb_ber) ?></td>
                        <td><?= h($parcels->etoc_op_comm) ?></td>
                        <td><?= h($parcels->etoc_op_comp) ?></td>
                        <td><?= h($parcels->ets_sailed) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Parcels', 'action' => 'view', $parcels->id]) ?>

                            <?= $this->Html->link(__('Edit'), ['controller' => 'Parcels', 'action' => 'edit', $parcels->id]) ?>

                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Parcels', 'action' => 'delete', $parcels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcels->id)]) ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
