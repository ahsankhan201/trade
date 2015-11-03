<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoreys'), ['controller' => 'Categoreys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorey'), ['controller' => 'Categoreys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->productName) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Categorey') ?></h6>
            <p><?= $product->has('categorey') ? $this->Html->link($product->categorey->catName, ['controller' => 'Categoreys', 'action' => 'view', $product->categorey->id]) : '' ?></p>
            <h6 class="subheader"><?= __('ProductName') ?></h6>
            <p><?= h($product->productName) ?></p>
            <h6 class="subheader"><?= __('ProductDetail') ?></h6>
            <p><?= h($product->productDetail) ?></p>
            <h6 class="subheader"><?= __('ProductLoadingIndex') ?></h6>
            <p><?= h($product->productLoadingIndex) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
            <h6 class="subheader"><?= __('ProductPrice') ?></h6>
            <p><?= $this->Number->format($product->productPrice) ?></p>
            <h6 class="subheader"><?= __('ProductStatus') ?></h6>
            <p><?= $this->Number->format($product->productStatus) ?></p>
            <h6 class="subheader"><?= __('ProductSortOrder') ?></h6>
            <p><?= $this->Number->format($product->productSortOrder) ?></p>
            <h6 class="subheader"><?= __('DisplayTop') ?></h6>
            <p><?= $this->Number->format($product->displayTop) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($product->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($product->dateModified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($product->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Roles Id') ?></th>
            <th><?= __('Countries Id') ?></th>
            <th><?= __('UserEmail') ?></th>
            <th><?= __('FirstName') ?></th>
            <th><?= __('LastName') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('CompanyName') ?></th>
            <th><?= __('CompanyAdress') ?></th>
            <th><?= __('CompanyWebAdress') ?></th>
            <th><?= __('UserImg') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('UserAuthUrl') ?></th>
            <th><?= __('UserStatus') ?></th>
            <th><?= __('LastLoginOn') ?></th>
            <th><?= __('Admin') ?></th>
            <th><?= __('DateCreated') ?></th>
            <th><?= __('DateModified') ?></th>
            <th><?= __('Salt') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->roles_id) ?></td>
            <td><?= h($users->countries_id) ?></td>
            <td><?= h($users->userEmail) ?></td>
            <td><?= h($users->firstName) ?></td>
            <td><?= h($users->lastName) ?></td>
            <td><?= h($users->phone) ?></td>
            <td><?= h($users->companyName) ?></td>
            <td><?= h($users->companyAdress) ?></td>
            <td><?= h($users->companyWebAdress) ?></td>
            <td><?= h($users->userImg) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->userAuthUrl) ?></td>
            <td><?= h($users->userStatus) ?></td>
            <td><?= h($users->lastLoginOn) ?></td>
            <td><?= h($users->admin) ?></td>
            <td><?= h($users->dateCreated) ?></td>
            <td><?= h($users->dateModified) ?></td>
            <td><?= h($users->salt) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
