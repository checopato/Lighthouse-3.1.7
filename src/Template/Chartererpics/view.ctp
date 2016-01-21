<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chartererpic'), ['action' => 'edit', $chartererpic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chartererpic'), ['action' => 'delete', $chartererpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chartererpics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chartererpic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charterers'), ['controller' => 'Charterers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charterer'), ['controller' => 'Charterers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chartererpics view large-9 medium-8 columns content">
    <h3><?= h($chartererpic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Charterer') ?></th>
            <td><?= $chartererpic->has('charterer') ? $this->Html->link($chartererpic->charterer->id, ['controller' => 'Charterers', 'action' => 'view', $chartererpic->charterer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($chartererpic->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($chartererpic->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Cel Phone') ?></th>
            <td><?= h($chartererpic->cel_phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($chartererpic->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($chartererpic->id) ?></td>
        </tr>
    </table>
</div>
