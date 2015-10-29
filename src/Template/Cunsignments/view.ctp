<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cunsignment'), ['action' => 'edit', $cunsignment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cunsignment'), ['action' => 'delete', $cunsignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cunsignment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cunsignments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cunsignment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offers'), ['controller' => 'Offers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offer'), ['controller' => 'Offers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cunsignments view large-10 medium-9 columns">
    <h2><?= h($cunsignment->cunsignmentFileNumber) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Offer') ?></h6>
            <p><?= $cunsignment->has('offer') ? $this->Html->link($cunsignment->offer->offerPfiNumber, ['controller' => 'Offers', 'action' => 'view', $cunsignment->offer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $cunsignment->has('order') ? $this->Html->link($cunsignment->order->orderName, ['controller' => 'Orders', 'action' => 'view', $cunsignment->order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('CunsignmentFileNumber') ?></h6>
            <p><?= h($cunsignment->cunsignmentFileNumber) ?></p>
            <h6 class="subheader"><?= __('CunsignmentArrivalPort') ?></h6>
            <p><?= h($cunsignment->cunsignmentArrivalPort) ?></p>
            <h6 class="subheader"><?= __('CunsignmentDischargePort') ?></h6>
            <p><?= h($cunsignment->cunsignmentDischargePort) ?></p>
            <h6 class="subheader"><?= __('CunsignmentFinalPort') ?></h6>
            <p><?= h($cunsignment->cunsignmentFinalPort) ?></p>
            <h6 class="subheader"><?= __('CunsignmentSupplierInvoiceNumber') ?></h6>
            <p><?= h($cunsignment->cunsignmentSupplierInvoiceNumber) ?></p>
            <h6 class="subheader"><?= __('CunsignmentSupplierInvoiceAmount') ?></h6>
            <p><?= h($cunsignment->cunsignmentSupplierInvoiceAmount) ?></p>
            <h6 class="subheader"><?= __('CunsignmentAdminInvoiceNumber') ?></h6>
            <p><?= h($cunsignment->cunsignmentAdminInvoiceNumber) ?></p>
            <h6 class="subheader"><?= __('CunsignmentAdminInvoiceAmount') ?></h6>
            <p><?= h($cunsignment->cunsignmentAdminInvoiceAmount) ?></p>
            <h6 class="subheader"><?= __('CunsignmentSupplierPaymentProff') ?></h6>
            <p><?= h($cunsignment->cunsignmentSupplierPaymentProff) ?></p>
            <h6 class="subheader"><?= __('CunsignmentSupplierPaymentStatus') ?></h6>
            <p><?= h($cunsignment->cunsignmentSupplierPaymentStatus) ?></p>
            <h6 class="subheader"><?= __('CunsignmentAdminPaymentProof') ?></h6>
            <p><?= h($cunsignment->cunsignmentAdminPaymentProof) ?></p>
            <h6 class="subheader"><?= __('CunsignmentAdminPaymentStatus') ?></h6>
            <p><?= h($cunsignment->cunsignmentAdminPaymentStatus) ?></p>
            <h6 class="subheader"><?= __('CunsignmentCrtManfufacture') ?></h6>
            <p><?= h($cunsignment->cunsignmentCrtManfufacture) ?></p>
            <h6 class="subheader"><?= __('CunsignmentCrtOrigion') ?></h6>
            <p><?= h($cunsignment->cunsignmentCrtOrigion) ?></p>
            <h6 class="subheader"><?= __('CunsignmentCrtQualityControll') ?></h6>
            <p><?= h($cunsignment->cunsignmentCrtQualityControll) ?></p>
            <h6 class="subheader"><?= __('CunsignmentExportDocumentStatusAdmin') ?></h6>
            <p><?= h($cunsignment->cunsignmentExportDocumentStatusAdmin) ?></p>
            <h6 class="subheader"><?= __('CunsignmentDocumentCorrierAdmin') ?></h6>
            <p><?= h($cunsignment->cunsignmentDocumentCorrierAdmin) ?></p>
            <h6 class="subheader"><?= __('CunsignmentdocumentTrackNumberAdmin') ?></h6>
            <p><?= h($cunsignment->cunsignmentdocumentTrackNumberAdmin) ?></p>
            <h6 class="subheader"><?= __('CunsignmentExportDocumentStatusSupplier') ?></h6>
            <p><?= h($cunsignment->cunsignmentExportDocumentStatusSupplier) ?></p>
            <h6 class="subheader"><?= __('CunsignmentDocumentCorrierSupplier') ?></h6>
            <p><?= h($cunsignment->cunsignmentDocumentCorrierSupplier) ?></p>
            <h6 class="subheader"><?= __('CunsignmentdocumentTrackNumberSupplier') ?></h6>
            <p><?= h($cunsignment->cunsignmentdocumentTrackNumberSupplier) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cunsignment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DateCreated') ?></h6>
            <p><?= h($cunsignment->dateCreated) ?></p>
            <h6 class="subheader"><?= __('DateModified') ?></h6>
            <p><?= h($cunsignment->dateModified) ?></p>
        </div>
    </div>
</div>
