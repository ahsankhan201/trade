<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="productImages form large-10 medium-9 columns">
    <?= $this->Form->create($productImage, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Edit Product Image') ?></legend>
        <?php
            echo $this->Form->input('products_id', ['options' => $products]);
            echo $this->Form->input('img_path',['type' => 'file']);
            echo $this->Form->input('img_name');
            echo $this->Form->input('date_created');
            echo $this->Form->input('date_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
