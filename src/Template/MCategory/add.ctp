<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MCategory $mCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List M Category'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mCategory form large-9 medium-8 columns content">
    <?= $this->Form->create($mCategory) ?>
    <fieldset>
        <legend><?= __('Add M Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
