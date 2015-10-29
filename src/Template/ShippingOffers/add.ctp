<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Shipping Offers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="shippingOffers form large-10 medium-9 columns">
    <?= $this->Form->create($shippingOffer) ?>
    <fieldset>
        <legend><?= __('Add Shipping Offer') ?></legend>
        <?php
            echo $this->Form->input('cunsignments_id', ['options' => $cunsignments]);
            echo $this->Form->input('member_id', ['options' => $members]);
            echo $this->Form->input('shipping_offerShippingCompany');
            echo $this->Form->input('shipping_offerRoutWayType');
            echo $this->Form->input('shipping_offerTrackingNumber');
            echo $this->Form->input('shipping_offerEstimateTimeArrival');
            echo $this->Form->input('shipping_offerEstimateTimeDeparture');
            echo $this->Form->input('shipping_offerEstimateTransitTime');
            echo $this->Form->input('shipping_offerFreeTime');
            echo $this->Form->input('shipping_offerFreight');
            echo $this->Form->input('shipping_offerStatus');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
