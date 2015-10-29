<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cunsignmentItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignmentItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cunsignment Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['controller' => 'Cunsignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['controller' => 'Cunsignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offer Items'), ['controller' => 'OfferItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer Item'), ['controller' => 'OfferItems', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="cunsignmentItems form large-10 medium-9 columns">
    <?= $this->Form->create($cunsignmentItem) ?>
    <fieldset>
        <legend><?= __('Edit Cunsignment Item') ?></legend>
        <?php
            echo $this->Form->input('cunsignments_id', ['options' => $cunsignments]);
            echo $this->Form->input('offer_items_id', ['options' => $offerItems]);
            echo $this->Form->input('cunsignment_itemQuantity');
            echo $this->Form->input('cunsignment_itemPackingList');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
