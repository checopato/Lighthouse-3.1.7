<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shipping'), ['action' => 'edit', $shipping->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipping'), ['action' => 'delete', $shipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shippings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fixtures'), ['controller' => 'Fixtures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fixture'), ['controller' => 'Fixtures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commisions'), ['controller' => 'Commisions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commision'), ['controller' => 'Commisions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parcels'), ['controller' => 'Parcels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parcel'), ['controller' => 'Parcels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shippings view large-9 medium-8 columns content">
    <h3><?= h($shipping->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Serie') ?></th>
            <td><?= h($shipping->serie) ?></td>
        </tr>
        <tr>
            <th><?= __('Fixture') ?></th>
            <td><?= $shipping->has('fixture') ? $this->Html->link($shipping->fixture->id, ['controller' => 'Fixtures', 'action' => 'view', $shipping->fixture->id]) : '' ?></td>
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
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($shipping->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Freight Rate') ?></th>
            <td><?= $this->Number->format($shipping->freight_rate) ?></td>
        </tr>
        <tr>
            <th><?= __('Laycan Com') ?></th>
            <td><?= h($shipping->laycan_com) ?></td>
        </tr>
        <tr>
            <th><?= __('Laycan End') ?></th>
            <td><?= h($shipping->laycan_end) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Fact') ?></th>
            <td><?= $shipping->is_fact ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Commisions') ?></h4>
        <?php if (!empty($shipping->commisions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Shipping Id') ?></th>
                <th><?= __('Date Com') ?></th>
                <th><?= __('Service') ?></th>
                <th><?= __('Type Com') ?></th>
                <th><?= __('Total') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shipping->commisions as $commisions): ?>
            <tr>
                <td><?= h($commisions->id) ?></td>
                <td><?= h($commisions->shipping_id) ?></td>
                <td><?= h($commisions->date_com) ?></td>
                <td><?= h($commisions->service) ?></td>
                <td><?= h($commisions->type_com) ?></td>
                <td><?= h($commisions->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Commisions', 'action' => 'view', $commisions->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commisions', 'action' => 'edit', $commisions->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commisions', 'action' => 'delete', $commisions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commisions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Parcels') ?></h4>
        <?php if (!empty($shipping->parcels)): ?>
        <table cellpadding="0" cellspacing="0">
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
