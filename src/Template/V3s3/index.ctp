<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\V3s3[]|\Cake\Collection\CollectionInterface $v3s3
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New V3s3'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="v3s3 index large-9 medium-8 columns content">
    <h3><?= __('V3s3') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timestamp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hash_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mime_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timestamp_deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_time_deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_deleted_from') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($v3s3 as $v3s3): ?>
            <tr>
                <td><?= $this->Number->format($v3s3->id) ?></td>
                <td><?= $this->Number->format($v3s3->timestamp) ?></td>
                <td><?= h($v3s3->date_time) ?></td>
                <td><?= h($v3s3->ip) ?></td>
                <td><?= h($v3s3->hash_name) ?></td>
                <td><?= h($v3s3->mime_type) ?></td>
                <td><?= $this->Number->format($v3s3->status) ?></td>
                <td><?= $this->Number->format($v3s3->timestamp_deleted) ?></td>
                <td><?= h($v3s3->date_time_deleted) ?></td>
                <td><?= h($v3s3->ip_deleted_from) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $v3s3->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $v3s3->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $v3s3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $v3s3->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
