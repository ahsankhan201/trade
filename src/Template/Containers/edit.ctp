<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $container->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $container->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Containers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['controller' => 'ShippingOffers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['controller' => 'ShippingOffers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="containers form large-10 medium-9 columns">
    <?= $this->Form->create($container) ?>
    <fieldset>
        <legend><?= __('Edit Container') ?></legend>
        <?php
            echo $this->Form->input('cunsignments_id', ['options' => $cunsignments]);
            echo $this->Form->input('shipping_offers_id', ['options' => $shippingOffers]);
            echo $this->Form->input('containerNumber');
            echo $this->Form->input('containerSize');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
