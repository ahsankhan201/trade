<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Shipping Offer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="shippingOffers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cunsignments_id') ?></th>
            <th><?= $this->Paginator->sort('member_id') ?></th>
            <th><?= $this->Paginator->sort('shipping_offerShippingCompany') ?></th>
            <th><?= $this->Paginator->sort('shipping_offerRoutWayType') ?></th>
            <th><?= $this->Paginator->sort('shipping_offerTrackingNumber') ?></th>
            <th><?= $this->Paginator->sort('shipping_offerEstimateTimeArrival') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($shippingOffers as $shippingOffer): ?>
        <tr>
            <td><?= $this->Number->format($shippingOffer->id) ?></td>
            <td>
                <?= $shippingOffer->has('cunsignment') ? $this->Html->link($shippingOffer->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $shippingOffer->cunsignment->id]) : '' ?>
            </td>
            <td>
                <?= $shippingOffer->has('member') ? $this->Html->link($shippingOffer->member->id, ['controller' => 'Members', 'action' => 'view', $shippingOffer->member->id]) : '' ?>
            </td>
            <td><?= h($shippingOffer->shipping_offerShippingCompany) ?></td>
            <td><?= h($shippingOffer->shipping_offerRoutWayType) ?></td>
            <td><?= h($shippingOffer->shipping_offerTrackingNumber) ?></td>
            <td><?= $this->Number->format($shippingOffer->shipping_offerEstimateTimeArrival) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $shippingOffer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shippingOffer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shippingOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingOffer->id)]) ?>
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
