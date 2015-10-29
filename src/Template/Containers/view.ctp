<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Container'), ['action' => 'edit', $container->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Container'), ['action' => 'delete', $container->id], ['confirm' => __('Are you sure you want to delete # {0}?', $container->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Containers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Container'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['controller' => 'ShippingOffers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['controller' => 'ShippingOffers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="containers view large-10 medium-9 columns">
    <h2><?= h($container->containerNumber) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cunsignment') ?></h6>
            <p><?= $container->has('cunsignment') ? $this->Html->link($container->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $container->cunsignment->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Shipping Offer') ?></h6>
            <p><?= $container->has('shipping_offer') ? $this->Html->link($container->shipping_offer->shipping_offerShippingCompany, ['controller' => 'ShippingOffers', 'action' => 'view', $container->shipping_offer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('ContainerNumber') ?></h6>
            <p><?= h($container->containerNumber) ?></p>
            <h6 class="subheader"><?= __('ContainerSize') ?></h6>
            <p><?= h($container->containerSize) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($container->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($container->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($container->dateModified) ?></p>
        </div>
    </div>
</div>
