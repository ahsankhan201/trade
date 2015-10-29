<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product Image'), ['action' => 'edit', $productImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Image'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="productImages view large-10 medium-9 columns">
    <h2><?= h($productImage->img_name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $productImage->has('product') ? $this->Html->link($productImage->product->productName, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></p>
            
            <h6 class="subheader"><?php echo $this->Html->image('/webroot/product/' .$productImage->img_path, [
    "alt" => "Brownies",
    "width" => "50px", "height"=>"50px",
    'url' => ['controller' => 'ProductImages', 'action' => 'view', $productImage->id]
]); ?><?= __('Img Path') ?></h6>
            <p><?= h($productImage->img_path) ?></p>
            <h6 class="subheader"><?= __('Img Name') ?></h6>
            <p><?= h($productImage->img_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($productImage->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Created') ?></h6>
            <p><?= h($productImage->date_created) ?></p>
            <h6 class="subheader"><?= __('Date Modified') ?></h6>
            <p><?= h($productImage->date_modified) ?></p>
        </div>
    </div>
</div>
