<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categoreys'), ['controller' => 'Categoreys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorey'), ['controller' => 'Categoreys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('categoreys_id', ['options' => $categoreys]);
            echo $this->Form->input('productName');
            echo $this->Form->input('productPrice');
            echo $this->Form->input('productDetail');
            echo $this->Form->input('productLoadingIndex');
            echo $this->Form->input('productStatus');
            echo $this->Form->input('productSortOrder');
            echo $this->Form->input('displayTop');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
