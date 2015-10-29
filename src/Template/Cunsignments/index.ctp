<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cunsignment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="cunsignments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('offers_id') ?></th>
            <th><?= $this->Paginator->sort('orders_id') ?></th>
            <th><?= $this->Paginator->sort('cunsignmentFileNumber') ?></th>
            <th><?= $this->Paginator->sort('cunsignmentArrivalPort') ?></th>
            <th><?= $this->Paginator->sort('cunsignmentDischargePort') ?></th>
            <th><?= $this->Paginator->sort('cunsignmentFinalPort') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cunsignments as $cunsignment): ?>
        <tr>
            <td><?= $this->Number->format($cunsignment->id) ?></td>
            <td>
                <?= $cunsignment->has('offer') ? $this->Html->link($cunsignment->offer->offerPfiNumber, ['controller' => 'Offers', 'action' => 'view', $cunsignment->offer->id]) : '' ?>
            </td>
            <td>
                <?= $cunsignment->has('order') ? $this->Html->link($cunsignment->order->orderName, ['controller' => 'Orders', 'action' => 'view', $cunsignment->order->id]) : '' ?>
            </td>
            <td><?= h($cunsignment->cunsignmentFileNumber) ?></td>
            <td><?= h($cunsignment->cunsignmentArrivalPort) ?></td>
            <td><?= h($cunsignment->cunsignmentDischargePort) ?></td>
            <td><?= h($cunsignment->cunsignmentFinalPort) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cunsignment->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cunsignment->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cunsignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignment->id)]) ?>
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
