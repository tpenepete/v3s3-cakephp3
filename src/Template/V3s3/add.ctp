<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List V3s3'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="v3s3 form large-9 medium-8 columns content">
    <?= $this->Form->create($v3s3) ?>
    <fieldset>
        <legend><?= __('Add V3s3') ?></legend>
        <?php
            echo $this->Form->control('timestamp');
            echo $this->Form->control('date_time');
            echo $this->Form->control('ip');
            echo $this->Form->control('hash_name');
            echo $this->Form->control('mime_type');
            echo $this->Form->control('status');
            echo $this->Form->control('timestamp_deleted');
            echo $this->Form->control('date_time_deleted');
            echo $this->Form->control('ip_deleted_from');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
