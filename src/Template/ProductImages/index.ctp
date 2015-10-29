<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Product Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="productImages index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('products_id') ?></th>
            <th><?= $this->Paginator->sort('img_path') ?></th>
            <th><?= $this->Paginator->sort('img_name') ?></th>
            <th><?= $this->Paginator->sort('date_created') ?></th>
            <th><?= $this->Paginator->sort('date_modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($productImages as $productImage): ?>
        <tr>
            <td><?= $this->Number->format($productImage->id) ?></td>
            <td>
                <?= $productImage->has('product') ? $this->Html->link($productImage->product->productName, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?>
            </td>
            <td><?= h($productImage->img_path) ?></td>
            <td><?= h($productImage->img_name) ?></td>
            <td><?= h($productImage->date_created) ?></td>
            <td><?= h($productImage->date_modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $productImage->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productImage->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]) ?>
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
