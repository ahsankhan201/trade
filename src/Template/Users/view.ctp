<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->firstName) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $user->has('role') ? $this->Html->link($user->role->roleNAme, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= $user->has('country') ? $this->Html->link($user->country->name, ['controller' => 'Countries', 'action' => 'view', $user->country->id_countries]) : '' ?></p>
            <h6 class="subheader"><?= __('UserEmail') ?></h6>
            <p><?= h($user->userEmail) ?></p>
            <h6 class="subheader"><?= __('FirstName') ?></h6>
            <p><?= h($user->firstName) ?></p>
            <h6 class="subheader"><?= __('LastName') ?></h6>
            <p><?= h($user->lastName) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($user->phone) ?></p>
            <h6 class="subheader"><?= __('CompanyName') ?></h6>
            <p><?= h($user->companyName) ?></p>
            <h6 class="subheader"><?= __('CompanyAdress') ?></h6>
            <p><?= h($user->companyAdress) ?></p>
            <h6 class="subheader"><?= __('CompanyWebAdress') ?></h6>
            <p><?= h($user->companyWebAdress) ?></p>
            <h6 class="subheader"><?= __('UserImg') ?></h6>
            <p><?= h($user->userImg) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Salt') ?></h6>
            <p><?= h($user->salt) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('UserAuthUrl') ?></h6>
            <p><?= $this->Number->format($user->userAuthUrl) ?></p>
            <h6 class="subheader"><?= __('UserStatus') ?></h6>
            <p><?= $this->Number->format($user->userStatus) ?></p>
            <h6 class="subheader"><?= __('Admin') ?></h6>
            <p><?= $this->Number->format($user->admin) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('LastLoginOn') ?></h6>
            <p><?= h($user->lastLoginOn) ?></p>
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($user->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($user->dateModified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Orders') ?></h4>
    <?php if (!empty($user->orders)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Users Id') ?></th>
            <th><?= __('OrderName') ?></th>
            <th><?= __('OrderPfiNumber') ?></th>
            <th><?= __('OrderStatus') ?></th>
            <th><?= __('OrderType') ?></th>
            <th><?= __('DateCreated') ?></th>
            <th><?= __('DateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->orders as $orders): ?>
        <tr>
            <td><?= h($orders->id) ?></td>
            <td><?= h($orders->users_id) ?></td>
            <td><?= h($orders->orderName) ?></td>
            <td><?= h($orders->orderPfiNumber) ?></td>
            <td><?= h($orders->orderStatus) ?></td>
            <td><?= h($orders->orderType) ?></td>
            <td><?= h($orders->dateCreated) ?></td>
            <td><?= h($orders->dateModified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($user->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Categoreys Id') ?></th>
            <th><?= __('ProductName') ?></th>
            <th><?= __('ProductPrice') ?></th>
            <th><?= __('ProductDetail') ?></th>
            <th><?= __('ProductStatus') ?></th>
            <th><?= __('ProductSortOrder') ?></th>
            <th><?= __('DisplayTop') ?></th>
            <th><?= __('DateCreated') ?></th>
            <th><?= __('DateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->categoreys_id) ?></td>
            <td><?= h($products->productName) ?></td>
            <td><?= h($products->productPrice) ?></td>
            <td><?= h($products->productDetail) ?></td>
            <td><?= h($products->productStatus) ?></td>
            <td><?= h($products->productSortOrder) ?></td>
            <td><?= h($products->displayTop) ?></td>
            <td><?= h($products->dateCreated) ?></td>
            <td><?= h($products->dateModified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
