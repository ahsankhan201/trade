<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Offer Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="offerItems index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('offers_id') ?></th>
            <th><?= $this->Paginator->sort('order_items_id') ?></th>
            <th><?= $this->Paginator->sort('offer_itemQuantity') ?></th>
            <th><?= $this->Paginator->sort('offer_itemPrice') ?></th>
            <th><?= $this->Paginator->sort('offer_itemCommission') ?></th>
            <th><?= $this->Paginator->sort('offer_itemFinalPrice') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($offerItems as $offerItem): 
     ?>
        <tr>
            <td><?= $this->Number->format($offerItem->id) ?></td>
            <td>
                <?= $offerItem->has('offer') ? $this->Html->link($offerItem->offer->offerPfiNumber, ['controller' => 'Offers', 'action' => 'view', $offerItem->offer->id]) : '' ?>
            </td>
            <td>
                <?= $offerItem->has('order_item') ? $this->Html->link($offerItem->order_item->product->productName, ['controller' => 'OrderItems', 'action' => 'view', $offerItem->order_item->id]) : '' ?>
            </td>
            <td><?= h($offerItem->offer_itemQuantity) ?></td>
            <td><?= h($offerItem->offer_itemPrice) ?></td>
            <td><?= h($offerItem->offer_itemCommission) ?></td>
            <td><?= h($offerItem->offer_itemFinalPrice) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $offerItem->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offerItem->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offerItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerItem->id)]) ?>
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
