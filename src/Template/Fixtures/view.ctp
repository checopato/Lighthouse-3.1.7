<div class="col-sm-2 col-md-3 sidebar">
    <ul class="side-nav">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Fixture - <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fixture->id],['class' => 'btn btn-default']) ?></h3>
            </div>
            <div class="panel-body"> 
               <table class="table table-condensed">
                <tr>
                    <th><?= __('Fixer') ?></th>
                    <td><?= h($fixture->user->alias) ?></td>
                </tr>
                <tr>
                    <th><?= __('PIC') ?></th>
                    <td><?= h($fixture->pic->alias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Charterer') ?></th>
                    <td><?= h($fixture->charterer->nick) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shipowner') ?></th>
                    <td><?= h($fixture->shipowner->nick) ?></td>
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
    <div class="related">
        <table>
            <tr>
                <td width="90%"><h4><?= __('Related Shipments') ?></h4></td>
                <td width="10%">        <?= $this->Html->link(__('New'), ['controller' => 'Shippings','action' => 'add', $fixture->id],['class' => 'btn btn-sm btn-primary']) ?></td>
            </tr>
        </table>
        <?php if (!empty($fixture->shippings)): ?>
            <table class="table table-striped">
                <tr>
                    <th><?= __('Serie') ?></th>
                    <th><?= __('Vessel') ?></th>
                    <?php if ($fixture->fix_type == 'COA'): ?>
                    <th><?= __('Laycan Com') ?></th>
                    <th><?= __('Laycan End') ?></th>
                    <?php endif ?>
                    <th><?= __('Freight Rate') ?></th>
                    <th><?= __('Status') ?></th>
                    <th><?= __('Factured?') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($fixture->shippings as $shippings): ?>
                    <tr>
                        <td><?= h($shippings->serie) ?></td>
                        <td><?= h($shippings->vessel) ?></td>
                        <?php if ($fixture->fix_type == 'COA'): ?>
                        <td><?= h($shippings->laycan_com) ?></td>
                        <td><?= h($shippings->laycan_end) ?></td>
                        <?php endif ?>
                        <td><?= h($shippings->freight_rate) ?></td>
                        <td><?= h($shippings->status) ?></td>
                        <td><?= h($shippings->is_fact) ? __('Yes') : __('No')?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Shippings', 'action' => 'view', $shippings->id],['class' => 'btn btn-xs btn-info']) ?>

                            <?= $this->Html->link(__('Edit'), ['controller' => 'Shippings', 'action' => 'edit', $shippings->id],['class' => 'btn btn-xs btn-warning']) ?>

                            <?= $this->Html->link(__('Fact'), ['controller' => 'Commisions','action' => 'add', $shippings->id],['class' => 'btn btn-xs btn-primary']) ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <h5>No Shippings added yet</h5>

        <?php endif; ?>
    </div>
</div>
