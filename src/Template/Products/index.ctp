<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoreys'), ['controller' => 'Categoreys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorey'), ['controller' => 'Categoreys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="products index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('categoreys_id') ?></th>
            <th><?= $this->Paginator->sort('productName') ?></th>
            <th><?= $this->Paginator->sort('productPrice') ?></th>
            <th><?= $this->Paginator->sort('productDetail') ?></th>
            <th><?= $this->Paginator->sort('productLoadingIndex') ?></th>
            <th><?= $this->Paginator->sort('productStatus') ?></th>
            <th><?= $this->Paginator->sort('productSortOrder') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td>
                <?= $product->has('categorey') ? $this->Html->link($product->categorey->catName, ['controller' => 'Categoreys', 'action' => 'view', $product->categorey->id]) : '' ?>
            </td>
            <td><?= h($product->productName) ?></td>
            <td><?= $this->Number->format($product->productPrice) ?></td>
            <td><?= h($product->productDetail) ?></td>
            <td><?= h($product->productLoadingIndex) ?></td>
            <td><?= $this->Number->format($product->productStatus) ?></td>
            <td><?= $this->Number->format($product->productSortOrder) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
