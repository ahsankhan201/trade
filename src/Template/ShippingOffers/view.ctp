<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Shipping Offer'), ['action' => 'edit', $shippingOffer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shipping Offer'), ['action' => 'delete', $shippingOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingOffer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="shippingOffers view large-10 medium-9 columns">
    <h2><?= h($shippingOffer->shipping_offerShippingCompany) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cunsignment') ?></h6>
            <p><?= $shippingOffer->has('cunsignment') ? $this->Html->link($shippingOffer->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $shippingOffer->cunsignment->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Member') ?></h6>
            <p><?= $shippingOffer->has('member') ? $this->Html->link($shippingOffer->member->id, ['controller' => 'Members', 'action' => 'view', $shippingOffer->member->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Shipping OfferShippingCompany') ?></h6>
            <p><?= h($shippingOffer->shipping_offerShippingCompany) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferRoutWayType') ?></h6>
            <p><?= h($shippingOffer->shipping_offerRoutWayType) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferTrackingNumber') ?></h6>
            <p><?= h($shippingOffer->shipping_offerTrackingNumber) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferFreight') ?></h6>
            <p><?= h($shippingOffer->shipping_offerFreight) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($shippingOffer->id) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferEstimateTimeArrival') ?></h6>
            <p><?= $this->Number->format($shippingOffer->shipping_offerEstimateTimeArrival) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferEstimateTimeDeparture') ?></h6>
            <p><?= $this->Number->format($shippingOffer->shipping_offerEstimateTimeDeparture) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferEstimateTransitTime') ?></h6>
            <p><?= $this->Number->format($shippingOffer->shipping_offerEstimateTransitTime) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferFreeTime') ?></h6>
            <p><?= $this->Number->format($shippingOffer->shipping_offerFreeTime) ?></p>
            <h6 class="subheader"><?= __('Shipping OfferStatus') ?></h6>
            <p><?= $this->Number->format($shippingOffer->shipping_offerStatus) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($shippingOffer->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($shippingOffer->dateModified) ?></p>
        </div>
    </div>
</div>
