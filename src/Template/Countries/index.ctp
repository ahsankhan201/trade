<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="countries index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_countries') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('iso_alpha2') ?></th>
            <th><?= $this->Paginator->sort('iso_alpha3') ?></th>
            <th><?= $this->Paginator->sort('iso_numeric') ?></th>
            <th><?= $this->Paginator->sort('currency_code') ?></th>
            <th><?= $this->Paginator->sort('currency_name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($countries as $country): ?>
        <tr>
            <td><?= $this->Number->format($country->id_countries) ?></td>
            <td><?= h($country->name) ?></td>
            <td><?= h($country->iso_alpha2) ?></td>
            <td><?= h($country->iso_alpha3) ?></td>
            <td><?= $this->Number->format($country->iso_numeric) ?></td>
            <td><?= h($country->currency_code) ?></td>
            <td><?= h($country->currency_name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $country->id_countries]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id_countries]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id_countries], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id_countries)]) ?>
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
