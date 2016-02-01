<div class="well">
    <h3><?= h($chartererpic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Charterer') ?></th>
            <td><?= $chartererpic->has('charterer') ? $this->Html->link($chartererpic->charterer->nick, ['controller' => 'Charterers', 'action' => 'view', $chartererpic->charterer->id]) : '' ?></td>
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
    </table>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
<li><?= $this->Html->link(__('Edit PIC'), ['action' => 'edit', $chartererpic->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete PIC'), ['action' => 'delete', $chartererpic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chartererpic->id)]) ?> </li>
</ul>
</div>
