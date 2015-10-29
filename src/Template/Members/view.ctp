<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['controller' => 'ShippingOffers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['controller' => 'ShippingOffers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="members view large-10 medium-9 columns">
    <h2><?= h($member->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $member->has('user') ? $this->Html->link($member->user->firstName, ['controller' => 'Users', 'action' => 'view', $member->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $member->has('order') ? $this->Html->link($member->order->orderName, ['controller' => 'Orders', 'action' => 'view', $member->order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $member->has('role') ? $this->Html->link($member->role->roleNAme, ['controller' => 'Roles', 'action' => 'view', $member->role->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($member->id) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= $this->Number->format($member->dateModified) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($member->dateCreated) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Shipping Offers') ?></h4>
    <?php if (!empty($member->shipping_offers)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Cunsignments Id') ?></th>
            <th><?= __('Member Id') ?></th>
            <th><?= __('Shipping OfferShippingCompany') ?></th>
            <th><?= __('Shipping OfferRoutWayType') ?></th>
            <th><?= __('Shipping OfferTrackingNumber') ?></th>
            <th><?= __('Shipping OfferEstimateTimeArrival') ?></th>
            <th><?= __('Shipping OfferEstimateTimeDeparture') ?></th>
            <th><?= __('Shipping OfferEstimateTransitTime') ?></th>
            <th><?= __('Shipping OfferFreeTime') ?></th>
            <th><?= __('Shipping OfferFreight') ?></th>
            <th><?= __('Shipping OfferStatus') ?></th>
            <th><?= __('DateCreated') ?></th>
            <th><?= __('DateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($member->shipping_offers as $shippingOffers): ?>
        <tr>
            <td><?= h($shippingOffers->id) ?></td>
            <td><?= h($shippingOffers->cunsignments_id) ?></td>
            <td><?= h($shippingOffers->member_id) ?></td>
            <td><?= h($shippingOffers->shipping_offerShippingCompany) ?></td>
            <td><?= h($shippingOffers->shipping_offerRoutWayType) ?></td>
            <td><?= h($shippingOffers->shipping_offerTrackingNumber) ?></td>
            <td><?= h($shippingOffers->shipping_offerEstimateTimeArrival) ?></td>
            <td><?= h($shippingOffers->shipping_offerEstimateTimeDeparture) ?></td>
            <td><?= h($shippingOffers->shipping_offerEstimateTransitTime) ?></td>
            <td><?= h($shippingOffers->shipping_offerFreeTime) ?></td>
            <td><?= h($shippingOffers->shipping_offerFreight) ?></td>
            <td><?= h($shippingOffers->shipping_offerStatus) ?></td>
            <td><?= h($shippingOffers->dateCreated) ?></td>
            <td><?= h($shippingOffers->dateModified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ShippingOffers', 'action' => 'view', $shippingOffers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ShippingOffers', 'action' => 'edit', $shippingOffers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShippingOffers', 'action' => 'delete', $shippingOffers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shippingOffers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
