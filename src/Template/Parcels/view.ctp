<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parcel'), ['action' => 'edit', $parcel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parcel'), ['action' => 'delete', $parcel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parcel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parcels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parcel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parcels view large-9 medium-8 columns content">
    <h3><?= h($parcel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Shipping') ?></th>
            <td><?= $parcel->has('shipping') ? $this->Html->link($parcel->shipping->id, ['controller' => 'Shippings', 'action' => 'view', $parcel->shipping->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Port') ?></th>
            <td><?= $parcel->has('port') ? $this->Html->link($parcel->port->name, ['controller' => 'Ports', 'action' => 'view', $parcel->port->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Type Of Call') ?></th>
            <td><?= h($parcel->type_of_call) ?></td>
        </tr>
        <tr>
            <th><?= __('Unit') ?></th>
            <td><?= h($parcel->unit) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= h($parcel->cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Term') ?></th>
            <td><?= h($parcel->term) ?></td>
        </tr>
        <tr>
            <th><?= __('Agent') ?></th>
            <td><?= h($parcel->agent) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($parcel->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Volume') ?></th>
            <td><?= $this->Number->format($parcel->volume) ?></td>
        </tr>
        <tr>
            <th><?= __('Rate Op') ?></th>
            <td><?= $this->Number->format($parcel->rate_op) ?></td>
        </tr>
        <tr>
            <th><?= __('Rate Av') ?></th>
            <td><?= $this->Number->format($parcel->rate_av) ?></td>
        </tr>
        <tr>
            <th><?= __('Demurrage Rate') ?></th>
            <td><?= $this->Number->format($parcel->demurrage_rate) ?></td>
        </tr>
        <tr>
            <th><?= __('Freight 100') ?></th>
            <td><?= $this->Number->format($parcel->freight_100) ?></td>
        </tr>
        <tr>
            <th><?= __('Des Dem Ffi') ?></th>
            <td><?= $this->Number->format($parcel->des_dem_ffi) ?></td>
        </tr>
        <tr>
            <th><?= __('Des Dem Char') ?></th>
            <td><?= $this->Number->format($parcel->des_dem_char) ?></td>
        </tr>
        <tr>
            <th><?= __('Dem Bro') ?></th>
            <td><?= $this->Number->format($parcel->dem_bro) ?></td>
        </tr>
        <tr>
            <th><?= __('Baf Usd') ?></th>
            <td><?= $this->Number->format($parcel->baf_usd) ?></td>
        </tr>
        <tr>
            <th><?= __('Eta Arr') ?></th>
            <td><?= h($parcel->eta_arr) ?></td>
        </tr>
        <tr>
            <th><?= __('Etb Ber') ?></th>
            <td><?= h($parcel->etb_ber) ?></td>
        </tr>
        <tr>
            <th><?= __('Etoc Op Comm') ?></th>
            <td><?= h($parcel->etoc_op_comm) ?></td>
        </tr>
        <tr>
            <th><?= __('Etoc Op Comp') ?></th>
            <td><?= h($parcel->etoc_op_comp) ?></td>
        </tr>
        <tr>
            <th><?= __('Ets Sailed') ?></th>
            <td><?= h($parcel->ets_sailed) ?></td>
        </tr>
        <tr>
            <th><?= __('Whose Agent') ?></th>
            <td><?= $parcel->whose_agent ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
