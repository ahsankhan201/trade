<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cunsignment Item'), ['action' => 'edit', $cunsignmentItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cunsignment Item'), ['action' => 'delete', $cunsignmentItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignmentItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cunsignment Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cunsignment Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offer Items'), ['controller' => 'OfferItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer Item'), ['controller' => 'OfferItems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cunsignmentItems view large-10 medium-9 columns">
    <h2><?= h($cunsignmentItem->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Cunsignment') ?></h6>
            <p><?= $cunsignmentItem->has('cunsignment') ? $this->Html->link($cunsignmentItem->cunsignment->cunsignmentFileNumber, ['controller' => 'Cunsignments', 'action' => 'view', $cunsignmentItem->cunsignment->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Offer Item') ?></h6>
            <p><?= $cunsignmentItem->has('offer_item') ? $this->Html->link($cunsignmentItem->offer_item->id, ['controller' => 'OfferItems', 'action' => 'view', $cunsignmentItem->offer_item->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cunsignment ItemQuantity') ?></h6>
            <p><?= h($cunsignmentItem->cunsignment_itemQuantity) ?></p>
            <h6 class="subheader"><?= __('Cunsignment ItemPackingList') ?></h6>
            <p><?= h($cunsignmentItem->cunsignment_itemPackingList) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cunsignmentItem->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($cunsignmentItem->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($cunsignmentItem->dateModified) ?></p>
        </div>
    </div>
</div>
