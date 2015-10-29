<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cunsignment Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offer Items'), ['controller' => 'OfferItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer Item'), ['controller' => 'OfferItems', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="cunsignmentItems index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('cunsignments_id') ?></th>
            <th><?= $this->Paginator->sort('offer_items_id') ?></th>
            <th><?= $this->Paginator->sort('cunsignment_itemQuantity') ?></th>
            <th><?= $this->Paginator->sort('cunsignment_itemPackingList') ?></th>
            <th><?= $this->Paginator->sort('dateCreated') ?></th>
            <th><?= $this->Paginator->sort('dateModified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cunsignmentItems as $cunsignmentItem):   ?>
        <tr>
            <td><?= $this->Number->format($cunsignmentItem->id) ?></td>
            <td>
                <?= $cunsignmentItem->has('cunsignment') ? $this->Html->link($cunsignmentItem->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $cunsignmentItem->cunsignment->id]) : '' ?>
            </td>
            <td>
                <?= $cunsignmentItem->has('offer_item') ? $this->Html->link($cunsignmentItem->offer_item->order_item->product->productName, ['controller' => 'OfferItems', 'action' => 'view', $cunsignmentItem->offer_item->id]) : '' ?>
            </td>
            <td><?= h($cunsignmentItem->cunsignment_itemQuantity) ?></td>
            <td><?= h($cunsignmentItem->cunsignment_itemPackingList) ?></td>
            <td><?= h($cunsignmentItem->dateCreated) ?></td>
            <td><?= h($cunsignmentItem->dateModified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cunsignmentItem->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cunsignmentItem->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cunsignmentItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignmentItem->id)]) ?>
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
