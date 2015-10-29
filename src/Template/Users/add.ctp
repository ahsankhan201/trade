<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('roles_id', ['options' => $roles, 'empty' => true]);
            echo $this->Form->input('countries_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->input('userEmail');
            echo $this->Form->input('firstName');
            echo $this->Form->input('lastName');
            echo $this->Form->input('phone');
            echo $this->Form->input('companyName');
            echo $this->Form->input('companyAdress');
            echo $this->Form->input('companyWebAdress');
            echo $this->Form->input('userImg');
            echo $this->Form->input('password');
            echo $this->Form->input('userAuthUrl');
            echo $this->Form->input('userStatus');
            echo $this->Form->input('lastLoginOn');
            echo $this->Form->input('admin');
            echo $this->Form->input('dateCreated');
            echo $this->Form->input('dateModified');
            echo $this->Form->input('salt');
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
