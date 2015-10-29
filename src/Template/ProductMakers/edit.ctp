<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productMaker->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productMaker->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Makers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="productMakers form large-10 medium-9 columns">
    <?= $this->Form->create($productMaker) ?>
    <fieldset>
        <legend><?= __('Edit Product Maker') ?></legend>
        <?php
            echo $this->Form->input('products_id', ['options' => $products]);
            echo $this->Form->input('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
