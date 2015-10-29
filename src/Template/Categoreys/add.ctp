<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Categoreys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Categoreys'), ['controller' => 'Categoreys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Categorey'), ['controller' => 'Categoreys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="categoreys form large-10 medium-9 columns">
    <?= $this->Form->create($categorey) ?>
    <fieldset>
        <legend><?= __('Add Categorey') ?></legend>
        <?php
            echo $this->Form->input('parent_id', ['options' => $parentCategoreys, 'empty' => true,'onchange' => 'subCat(this)']);
            echo $this->Form->input('catName');
            echo $this->Form->input('catLabel');
            echo $this->Form->input('catStatus');
            echo $this->Form->input('catSortOrder');
            echo $this->Form->input('catImg');
            echo $this->Form->input('lft');
            echo $this->Form->input('rght');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
            echo $this->Form->input('displayTop');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
