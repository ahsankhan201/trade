<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->orderName) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->firstName, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('OrderName') ?></th>
            <td><?= h($order->orderName) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderPfiNumber') ?></th>
            <td><?= h($order->orderPfiNumber) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderType') ?></th>
            <td><?= h($order->orderType) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderStatus') ?></th>
            <td><?= $this->Number->format($order->orderStatus) ?></td>
        </tr>
        <tr>
            <th><?= __('DateCreated') ?></th>
            <td><?= h($order->dateCreated) ?></tr>
        </tr>
        <tr>
            <th><?= __('DateModified') ?></th>
            <td><?= h($order->dateModified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Items') ?></h4>
        <?php if (!empty($order->order_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Orders Id') ?></th>
                <th><?= __('Products Id') ?></th>
                <th><?= __('OrderItemQuantity') ?></th>
                <th><?= __('OrderItemStatus') ?></th>
                <th><?= __('DateCreated') ?></th>
                <th><?= __('DateModified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_items as $orderItems): ?>
            <tr>
                <td><?= h($orderItems->id) ?></td>
                <td><?= h($orderItems->orders_id) ?></td>
                <td><?= h($orderItems->products_id) ?></td>
                <td><?= h($orderItems->orderItemQuantity) ?></td>
                <td><?= h($orderItems->orderItemStatus) ?></td>
                <td><?= h($orderItems->dateCreated) ?></td>
                <td><?= h($orderItems->dateModified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
