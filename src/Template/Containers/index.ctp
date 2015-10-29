<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Container'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['controller' => 'ShippingOffers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['controller' => 'ShippingOffers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="containers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cunsignments_id') ?></th>
            <th><?= $this->Paginator->sort('shipping_offers_id') ?></th>
            <th><?= $this->Paginator->sort('containerNumber') ?></th>
            <th><?= $this->Paginator->sort('containerSize') ?></th>
            <th><?= $this->Paginator->sort('dateCreated') ?></th>
            <th><?= $this->Paginator->sort('dateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($containers as $container): ?>
        <tr>
            <td><?= $this->Number->format($container->id) ?></td>
            <td>
                <?= $container->has('cunsignment') ? $this->Html->link($container->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $container->cunsignment->id]) : '' ?>
            </td>
            <td>
                <?= $container->has('shipping_offer') ? $this->Html->link($container->shipping_offer->shipping_offerShippingCompany, ['controller' => 'ShippingOffers', 'action' => 'view', $container->shipping_offer->id]) : '' ?>
            </td>
            <td><?= h($container->containerNumber) ?></td>
            <td><?= h($container->containerSize) ?></td>
            <td><?= h($container->dateCreated) ?></td>
            <td><?= h($container->dateModified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $container->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $container->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $container->id], ['confirm' => __('Are you sure you want to delete # {0}?', $container->id)]) ?>
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
