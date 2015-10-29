<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id_countries]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id_countries], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id_countries)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="countries view large-10 medium-9 columns">
    <h2><?= h($country->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($country->name) ?></p>
            <h6 class="subheader"><?= __('Iso Alpha2') ?></h6>
            <p><?= h($country->iso_alpha2) ?></p>
            <h6 class="subheader"><?= __('Iso Alpha3') ?></h6>
            <p><?= h($country->iso_alpha3) ?></p>
            <h6 class="subheader"><?= __('Currency Code') ?></h6>
            <p><?= h($country->currency_code) ?></p>
            <h6 class="subheader"><?= __('Currency Name') ?></h6>
            <p><?= h($country->currency_name) ?></p>
            <h6 class="subheader"><?= __('Currrency Symbol') ?></h6>
            <p><?= h($country->currrency_symbol) ?></p>
            <h6 class="subheader"><?= __('Flag') ?></h6>
            <p><?= h($country->flag) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id Countries') ?></h6>
            <p><?= $this->Number->format($country->id_countries) ?></p>
            <h6 class="subheader"><?= __('Iso Numeric') ?></h6>
            <p><?= $this->Number->format($country->iso_numeric) ?></p>
        </div>
    </div>
</div>
