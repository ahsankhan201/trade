<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Offer Item'), ['action' => 'edit', $offerItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offer Item'), ['action' => 'delete', $offerItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offer Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="offerItems view large-10 medium-9 columns">
    <h2><?= h($offerItem->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Offer') ?></h6>
            <p><?= $offerItem->has('offer') ? $this->Html->link($offerItem->offer->offerPfiNumber, ['controller' => 'Offers', 'action' => 'view', $offerItem->offer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Order Item') ?></h6>
            <p><?= $offerItem->has('order_item') ? $this->Html->link($offerItem->order_item->id, ['controller' => 'OrderItems', 'action' => 'view', $offerItem->order_item->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Offer ItemQuantity') ?></h6>
            <p><?= h($offerItem->offer_itemQuantity) ?></p>
            <h6 class="subheader"><?= __('Offer ItemPrice') ?></h6>
            <p><?= h($offerItem->offer_itemPrice) ?></p>
            <h6 class="subheader"><?= __('Offer ItemCommission') ?></h6>
            <p><?= h($offerItem->offer_itemCommission) ?></p>
            <h6 class="subheader"><?= __('Offer ItemFinalPrice') ?></h6>
            <p><?= h($offerItem->offer_itemFinalPrice) ?></p>
            <h6 class="subheader"><?= __('VarantyDiscount') ?></h6>
            <p><?= h($offerItem->varantyDiscount) ?></p>
            <h6 class="subheader"><?= __('SpecialDiscount') ?></h6>
            <p><?= h($offerItem->specialDiscount) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($offerItem->id) ?></p>
            <h6 class="subheader"><?= __('Offer ItemStatus') ?></h6>
            <p><?= $this->Number->format($offerItem->offer_itemStatus) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($offerItem->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($offerItem->dateModified) ?></p>
        </div>
    </div>
</div>
