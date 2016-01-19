<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parcels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shippings'), ['controller' => 'Shippings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shippings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ports'), ['controller' => 'Ports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Port'), ['controller' => 'Ports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parcels form large-9 medium-8 columns content">
    <?= $this->Form->create($parcel) ?>
    <fieldset>
        <legend><?= __('Add Parcel') ?></legend>
        <?php
            echo $this->Form->input('shipping_id', ['options' => $shippings]);
            echo $this->Form->input('port_id', ['options' => $ports]);
            echo $this->Form->input('type_of_call');
            echo $this->Form->input('volume');
            echo $this->Form->input('unit');
            echo $this->Form->input('cargo');
            echo $this->Form->input('rate_op');
            echo $this->Form->input('rate_av');
            echo $this->Form->input('term');
            echo $this->Form->input('demurrage_rate');
            echo $this->Form->input('freight_100');
            echo $this->Form->input('whose_agent');
            echo $this->Form->input('agent');
            echo $this->Form->input('des_dem_ffi');
            echo $this->Form->input('des_dem_char');
            echo $this->Form->input('dem_bro');
            echo $this->Form->input('baf_usd');
            echo $this->Form->input('eta_arr', ['empty' => true]);
            echo $this->Form->input('etb_ber', ['empty' => true]);
            echo $this->Form->input('etoc_op_comm', ['empty' => true]);
            echo $this->Form->input('etoc_op_comp', ['empty' => true]);
            echo $this->Form->input('ets_sailed', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
