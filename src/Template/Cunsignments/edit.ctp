<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cunsignment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="cunsignments form large-10 medium-9 columns">
    <?= $this->Form->create($cunsignment) ?>
    <fieldset>
        <legend><?= __('Edit Cunsignment') ?></legend>
        <?php
            echo $this->Form->input('offers_id', ['options' => $offers]);
            echo $this->Form->input('orders_id', ['options' => $orders]);
            echo $this->Form->input('cunsignmentFileNumber');
            echo $this->Form->input('cunsignmentArrivalPort');
            echo $this->Form->input('cunsignmentDischargePort');
            echo $this->Form->input('cunsignmentFinalPort');
            echo $this->Form->input('cunsignmentSupplierInvoiceNumber');
            echo $this->Form->input('cunsignmentSupplierInvoiceAmount');
            echo $this->Form->input('cunsignmentAdminInvoiceNumber');
            echo $this->Form->input('cunsignmentAdminInvoiceAmount');
            echo $this->Form->input('cunsignmentSupplierPaymentProff');
            echo $this->Form->input('cunsignmentSupplierPaymentStatus');
            echo $this->Form->input('cunsignmentAdminPaymentProof');
            echo $this->Form->input('cunsignmentAdminPaymentStatus');
            echo $this->Form->input('cunsignmentCrtManfufacture');
            echo $this->Form->input('cunsignmentCrtOrigion');
            echo $this->Form->input('cunsignmentCrtQualityControll');
            echo $this->Form->input('cunsignmentExportDocumentStatusAdmin');
            echo $this->Form->input('cunsignmentDocumentCorrierAdmin');
            echo $this->Form->input('cunsignmentdocumentTrackNumberAdmin');
            echo $this->Form->input('cunsignmentExportDocumentStatusSupplier');
            echo $this->Form->input('cunsignmentDocumentCorrierSupplier');
            echo $this->Form->input('cunsignmentdocumentTrackNumberSupplier');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
