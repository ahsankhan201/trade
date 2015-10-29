<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Products User'), ['action' => 'edit', $productsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products User'), ['action' => 'delete', $productsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="productsUsers view large-10 medium-9 columns">
    <h2><?= h($productsUser->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $productsUser->has('product') ? $this->Html->link($productsUser->product->productName, ['controller' => 'Products', 'action' => 'view', $productsUser->product->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $productsUser->has('user') ? $this->Html->link($productsUser->user->firstName, ['controller' => 'Users', 'action' => 'view', $productsUser->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($productsUser->id) ?></p>
        </div>
    </div>
</div>
