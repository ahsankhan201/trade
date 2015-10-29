<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Offer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="offers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('orders_id') ?></th>
            <th><?= $this->Paginator->sort('offerPfiNumber') ?></th>
            <th><?= $this->Paginator->sort('members_id') ?></th>
            <th><?= $this->Paginator->sort('offerCompleteDate') ?></th>
            <th><?= $this->Paginator->sort('offerPaymentType') ?></th>
            <th><?= $this->Paginator->sort('offerStatus') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($offers as $offer): ?>
        <tr>
            <td><?= $this->Number->format($offer->id) ?></td>
            <td>
                <?= $offer->has('order') ? $this->Html->link($offer->order->orderName, ['controller' => 'Orders', 'action' => 'view', $offer->order->id]) : '' ?>
            </td>
            <td><?= h($offer->offerPfiNumber) ?></td>
            <td>
                <?= $offer->has('member') ? $this->Html->link($offer->member->id, ['controller' => 'Members', 'action' => 'view', $offer->member->id]) : '' ?>
            </td>
            <td><?= h($offer->offerCompleteDate) ?></td>
            <td><?= h($offer->offerPaymentType) ?></td>
            <td><?= $this->Number->format($offer->offerStatus) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $offer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?>
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
