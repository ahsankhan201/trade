<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offerItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offerItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offer Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="offerItems form large-10 medium-9 columns">
    <?= $this->Form->create($offerItem) ?>
    <fieldset>
        <legend><?= __('Edit Offer Item') ?></legend>
        <?php
            echo $this->Form->input('offers_id', ['options' => $offers]);
            echo $this->Form->input('order_items_id', ['options' => $orderItems]);
            echo $this->Form->input('offer_itemQuantity');
            echo $this->Form->input('offer_itemPrice');
            echo $this->Form->input('offer_itemCommission');
            echo $this->Form->input('offer_itemFinalPrice');
            echo $this->Form->input('varantyDiscount');
            echo $this->Form->input('specialDiscount');
            echo $this->Form->input('offer_itemStatus');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
