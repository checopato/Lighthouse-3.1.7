<p></p>
<div>
    <?= $this->Html->link(__('New Fixture'), ['action' => 'add'],['class' => 'btn btn-success']) ?>
</div>


<div class="page-header">
    <h3><?= __('Fixtures') ?></h3>
</div>

<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('user_id', ['label' => 'Fixer']) ?></th>
                <th><?= $this->Paginator->sort('pic_id', ['label' => 'PIC']) ?></th>
                <th><?= $this->Paginator->sort('charterer_id') ?></th>
                <th><?= $this->Paginator->sort('shipowner_id') ?></th>
                <th><?= $this->Paginator->sort('broker_com', ['label' => 'Com %']) ?></th>
                <th><?= $this->Paginator->sort('cp_date', ['label' => 'C/P Date']) ?></th>
                <th><?= $this->Paginator->sort('fix_type', ['label' => 'Type']) ?></th>
                <th><?= $this->Paginator->sort('period_st', ['label' => 'Laycan Start']) ?></th>
                <th><?= $this->Paginator->sort('period_nd', ['label' => 'Laycan End']) ?></th>
                <th><?= $this->Paginator->sort('start_counting', ['label' => 'Start Counting']) ?></th>
                <th><?= $this->Paginator->sort('cargo_nom_day', ['label' => 'Cargo Nomination']) ?></th>
                <th><?= $this->Paginator->sort('int_per_dat', ['label' => 'Intended Performer']) ?></th>
                <th><?= $this->Paginator->sort('final_performer', ['label' => 'Final Performer']) ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fixtures as $fixture): ?>
            <tr>
                <td><?= h($fixture->user->alias) ?></td>
                <td><?= h($fixture->pic->alias) ?></td>
                <td><?= $fixture->has('charterer') ? $this->Html->link($fixture->charterer->nick, ['controller' => 'Charterers', 'action' => 'view', $fixture->charterer->id]) : '' ?></td>
                <td><?= $fixture->has('shipowner') ? $this->Html->link($fixture->shipowner->nick, ['controller' => 'Shipowners', 'action' => 'view', $fixture->shipowner->id]) : '' ?></td>
                <td><?= $this->Number->format($fixture->broker_com) ?></td>
                <td><?= h($fixture->cp_date) ?></td>
                <td><?= h($fixture->fix_type) ?></td>
                <td><?= h($fixture->period_st) ?></td>
                <td><?= h($fixture->period_nd) ?></td>
                <td><?= h($fixture->start_counting) ?></td>
                <td><?= h($fixture->cargo_nom_day) ?></td>
                <td><?= h($fixture->int_per_dat) ?></td>
                <td><?= h($fixture->final_performer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fixture->id],['class' => 'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fixture->id],['class' => 'btn btn-xs btn-warning']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
