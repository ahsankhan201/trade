<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Categorey'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="categoreys index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('parent_id') ?></th>
            <th><?= $this->Paginator->sort('catName') ?></th>
            <th><?= $this->Paginator->sort('catLabel') ?></th>
            <th><?= $this->Paginator->sort('catStatus') ?></th>
            <th><?= $this->Paginator->sort('catSortOrder') ?></th>
            <th><?= $this->Paginator->sort('catImg') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categoreys as $categorey): ?>
        <tr>
            <td><?= $this->Number->format($categorey->id) ?></td>
            <td>
                <?= $categorey->has('parent_categorey') ? $this->Html->link($categorey->parent_categorey->catName, ['controller' => 'Categoreys', 'action' => 'view', $categorey->parent_categorey->id]) : '' ?>
            </td>
            <td><?= h($categorey->catName) ?></td>
            <td><?= h($categorey->catLabel) ?></td>
            <td><?= $this->Number->format($categorey->catStatus) ?></td>
            <td><?= $this->Number->format($categorey->catSortOrder) ?></td>
            <td><?= h($categorey->catImg) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $categorey->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorey->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorey->id)]) ?>
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
