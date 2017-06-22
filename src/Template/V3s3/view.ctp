<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\V3s3 $v3s3
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit V3s3'), ['action' => 'edit', $v3s3->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete V3s3'), ['action' => 'delete', $v3s3->id], ['confirm' => __('Are you sure you want to delete # {0}?', $v3s3->id)]) ?> </li>
        <li><?= $this->Html->link(__('List V3s3'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New V3s3'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="v3s3 view large-9 medium-8 columns content">
    <h3><?= h($v3s3->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Date Time') ?></th>
            <td><?= h($v3s3->date_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($v3s3->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hash Name') ?></th>
            <td><?= h($v3s3->hash_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mime Type') ?></th>
            <td><?= h($v3s3->mime_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time Deleted') ?></th>
            <td><?= h($v3s3->date_time_deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Deleted From') ?></th>
            <td><?= h($v3s3->ip_deleted_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($v3s3->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp') ?></th>
            <td><?= $this->Number->format($v3s3->timestamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($v3s3->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timestamp Deleted') ?></th>
            <td><?= $this->Number->format($v3s3->timestamp_deleted) ?></td>
        </tr>
    </table>
</div>
