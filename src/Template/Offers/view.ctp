<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Offer'), ['action' => 'edit', $offer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offer'), ['action' => 'delete', $offer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="offers view large-10 medium-9 columns">
    <h2><?= h($offer->offerPfiNumber) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $offer->has('order') ? $this->Html->link($offer->order->orderName, ['controller' => 'Orders', 'action' => 'view', $offer->order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('OfferPfiNumber') ?></h6>
            <p><?= h($offer->offerPfiNumber) ?></p>
            <h6 class="subheader"><?= __('Member') ?></h6>
            <p><?= $offer->has('member') ? $this->Html->link($offer->member->id, ['controller' => 'Members', 'action' => 'view', $offer->member->id]) : '' ?></p>
            <h6 class="subheader"><?= __('OfferPaymentType') ?></h6>
            <p><?= h($offer->offerPaymentType) ?></p>
            <h6 class="subheader"><?= __('OfferDetailNote') ?></h6>
            <p><?= h($offer->offerDetailNote) ?></p>
            <h6 class="subheader"><?= __('OfferCommissionType') ?></h6>
            <p><?= h($offer->offerCommissionType) ?></p>
            <h6 class="subheader"><?= __('OfferOtherCharges') ?></h6>
            <p><?= h($offer->offerOtherCharges) ?></p>
            <h6 class="subheader"><?= __('OfferFinanceCharges') ?></h6>
            <p><?= h($offer->offerFinanceCharges) ?></p>
            <h6 class="subheader"><?= __('CurrencyCode') ?></h6>
            <p><?= h($offer->currencyCode) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($offer->id) ?></p>
            <h6 class="subheader"><?= __('OfferStatus') ?></h6>
            <p><?= $this->Number->format($offer->offerStatus) ?></p>
            <h6 class="subheader"><?= __('OfferCommission') ?></h6>
            <p><?= $this->Number->format($offer->offerCommission) ?></p>
            <h6 class="subheader"><?= __('OfferOtherDiscount') ?></h6>
            <p><?= $this->Number->format($offer->offerOtherDiscount) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('OfferCompleteDate') ?></h6>
            <p><?= h($offer->offerCompleteDate) ?></p>
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($offer->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($offer->dateModified) ?></p>
        </div>
    </div>
</div>
