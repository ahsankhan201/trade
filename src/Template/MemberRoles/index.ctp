<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Member Role'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="memberRoles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('member_roleId') ?></th>
            <th><?= $this->Paginator->sort('memberId') ?></th>
            <th><?= $this->Paginator->sort('roleId') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($memberRoles as $memberRole): ?>
        <tr>
            <td><?= $this->Number->format($memberRole->member_roleId) ?></td>
            <td><?= $this->Number->format($memberRole->memberId) ?></td>
            <td><?= $this->Number->format($memberRole->roleId) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $memberRole->member_roleId]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $memberRole->member_roleId]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $memberRole->member_roleId], ['confirm' => __('Are you sure you want to delete # {0}?', $memberRole->member_roleId)]) ?>
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
