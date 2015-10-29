<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="offers form large-10 medium-9 columns">
    <?= $this->Form->create($offer) ?>
    <fieldset>
        <legend><?= __('Edit Offer') ?></legend>
        <?php
            echo $this->Form->input('orders_id', ['options' => $orders]);
            echo $this->Form->input('offerPfiNumber');
            echo $this->Form->input('members_id', ['options' => $members]);
            echo $this->Form->input('offerCompleteDate');
            echo $this->Form->input('offerPaymentType');
            echo $this->Form->input('offerStatus');
            echo $this->Form->input('offerDetailNote');
            echo $this->Form->input('offerCommissionType');
            echo $this->Form->input('offerCommission');
            echo $this->Form->input('offerOtherCharges');
            echo $this->Form->input('offerFinanceCharges');
            echo $this->Form->input('offerOtherDiscount');
            echo $this->Form->input('currencyCode');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
