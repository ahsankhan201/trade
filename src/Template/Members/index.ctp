<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shipping Offers'), ['controller' => 'ShippingOffers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shipping Offer'), ['controller' => 'ShippingOffers', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="members index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('users_id') ?></th>
            <th><?= $this->Paginator->sort('orders_id') ?></th>
            <th><?= $this->Paginator->sort('roles_id') ?></th>
            <th><?= $this->Paginator->sort('dateCreated') ?></th>
            <th><?= $this->Paginator->sort('dateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($members as $member): ?>
        <tr>
            <td><?= $this->Number->format($member->id) ?></td>
            <td>
                <?= $member->has('user') ? $this->Html->link($member->user->firstName, ['controller' => 'Users', 'action' => 'view', $member->user->id]) : '' ?>
            </td>
            <td>
                <?= $member->has('order') ? $this->Html->link($member->order->orderName, ['controller' => 'Orders', 'action' => 'view', $member->order->id]) : '' ?>
            </td>
            <td>
                <?= $member->has('role') ? $this->Html->link($member->role->roleNAme, ['controller' => 'Roles', 'action' => 'view', $member->role->id]) : '' ?>
            </td>
            <td><?= h($member->dateCreated) ?></td>
            <td><?= $this->Number->format($member->dateModified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
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
