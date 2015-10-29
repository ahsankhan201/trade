<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Categorey'), ['action' => 'edit', $categorey->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorey'), ['action' => 'delete', $categorey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorey->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoreys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorey'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Categoreys'), ['controller' => 'Categoreys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Categorey'), ['controller' => 'Categoreys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categoreys view large-10 medium-9 columns">
    <h2><?= h($categorey->catName) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Parent Categorey') ?></h6>
            <p><?= $categorey->has('parent_categorey') ? $this->Html->link($categorey->parent_categorey->catName, ['controller' => 'Categoreys', 'action' => 'view', $categorey->parent_categorey->id]) : '' ?></p>
            <h6 class="subheader"><?= __('CatName') ?></h6>
            <p><?= h($categorey->catName) ?></p>
            <h6 class="subheader"><?= __('CatLabel') ?></h6>
            <p><?= h($categorey->catLabel) ?></p>
            <h6 class="subheader"><?= __('CatImg') ?></h6>
            <p><?= h($categorey->catImg) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($categorey->id) ?></p>
            <h6 class="subheader"><?= __('CatStatus') ?></h6>
            <p><?= $this->Number->format($categorey->catStatus) ?></p>
            <h6 class="subheader"><?= __('CatSortOrder') ?></h6>
            <p><?= $this->Number->format($categorey->catSortOrder) ?></p>
            <h6 class="subheader"><?= __('Lft') ?></h6>
            <p><?= $this->Number->format($categorey->lft) ?></p>
            <h6 class="subheader"><?= __('Rght') ?></h6>
            <p><?= $this->Number->format($categorey->rght) ?></p>
            <h6 class="subheader"><?= __('DisplayTop') ?></h6>
            <p><?= $this->Number->format($categorey->displayTop) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($categorey->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($categorey->dateModified) ?></p>
        </div>
    </div>
</div>
<?php
foreach ($parents as $parent) {
echo  $parent->catName.' >';
}
?>
<div class="related row">
    <div class="column large-12">
        <h4 class="subheader"><?= __('Related Categoreys') ?></h4>
        <?php if (!empty($categorey->child_categoreys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('CatName') ?></th>
                <th><?= __('CatLabel') ?></th>
                <th><?= __('CatStatus') ?></th>
                <th><?= __('CatSortOrder') ?></th>
                <th><?= __('CatImg') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('DateCreated') ?></th>
                <th><?= __('DateModified') ?></th>
                <th><?= __('DisplayTop') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categorey->child_categoreys as $childCategoreys): ?>
            <tr>
                <td><?= h($childCategoreys->id) ?></td>
                <td><?= h($childCategoreys->parent_id) ?></td>
                <td><?= h($childCategoreys->catName) ?></td>
                <td><?= h($childCategoreys->catLabel) ?></td>
                <td><?= h($childCategoreys->catStatus) ?></td>
                <td><?= h($childCategoreys->catSortOrder) ?></td>
                <td><?= h($childCategoreys->catImg) ?></td>
                <td><?= h($childCategoreys->lft) ?></td>
                <td><?= h($childCategoreys->rght) ?></td>
                <td><?= h($childCategoreys->dateCreated) ?></td>
                <td><?= h($childCategoreys->dateModified) ?></td>
                <td><?= h($childCategoreys->displayTop) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categoreys', 'action' => 'view', $childCategoreys->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categoreys', 'action' => 'edit', $childCategoreys->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categoreys', 'action' => 'delete', $childCategoreys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategoreys->id)]) ?>

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
        <?php if (!empty($categorey->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Categoreys Id') ?></th>
                <th><?= __('Product Makers Id') ?></th>
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
            <?php foreach ($categorey->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->categoreys_id) ?></td>
                <td><?= h($products->product_makers_id) ?></td>
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
