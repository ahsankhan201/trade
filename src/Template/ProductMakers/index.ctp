<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Product Maker'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="productMakers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('products_id') ?></th>
            <th><?= $this->Paginator->sort('users_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($productMakers as $productMaker): ?>
        <tr>
            <td><?= $this->Number->format($productMaker->id) ?></td>
            <td>
                <?= $productMaker->has('product') ? $this->Html->link($productMaker->product->productName, ['controller' => 'Products', 'action' => 'view', $productMaker->product->id]) : '' ?>
            </td>
            <td>
                <?= $productMaker->has('user') ? $this->Html->link($productMaker->user->firstName, ['controller' => 'Users', 'action' => 'view', $productMaker->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $productMaker->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productMaker->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productMaker->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productMaker->id)]) ?>
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
