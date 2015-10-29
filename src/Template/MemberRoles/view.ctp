<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Member Role'), ['action' => 'edit', $memberRole->member_roleId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member Role'), ['action' => 'delete', $memberRole->member_roleId], ['confirm' => __('Are you sure you want to delete # {0}?', $memberRole->member_roleId)]) ?> </li>
        <li><?= $this->Html->link(__('List Member Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member Role'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="memberRoles view large-10 medium-9 columns">
    <h2><?= h($memberRole->member_roleId) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Member RoleId') ?></h6>
            <p><?= $this->Number->format($memberRole->member_roleId) ?></p>
            <h6 class="subheader"><?= __('MemberId') ?></h6>
            <p><?= $this->Number->format($memberRole->memberId) ?></p>
            <h6 class="subheader"><?= __('RoleId') ?></h6>
            <p><?= $this->Number->format($memberRole->roleId) ?></p>
        </div>
    </div>
</div>
