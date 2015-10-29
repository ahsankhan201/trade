<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Member Roles'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="memberRoles form large-10 medium-9 columns">
    <?= $this->Form->create($memberRole) ?>
    <fieldset>
        <legend><?= __('Add Member Role') ?></legend>
        <?php
            echo $this->Form->input('memberId');
            echo $this->Form->input('roleId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
