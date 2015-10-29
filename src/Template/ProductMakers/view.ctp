<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product Maker'), ['action' => 'edit', $productMaker->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Maker'), ['action' => 'delete', $productMaker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productMaker->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Makers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Maker'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="productMakers view large-10 medium-9 columns">
    <h2><?= h($productMaker->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $productMaker->has('product') ? $this->Html->link($productMaker->product->productName, ['controller' => 'Products', 'action' => 'view', $productMaker->product->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $productMaker->has('user') ? $this->Html->link($productMaker->user->firstName, ['controller' => 'Users', 'action' => 'view', $productMaker->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($productMaker->id) ?></p>
        </div>
    </div>
</div>
