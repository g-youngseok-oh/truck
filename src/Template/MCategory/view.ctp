<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MCategory $mCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit M Category'), ['action' => 'edit', $mCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete M Category'), ['action' => 'delete', $mCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List M Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New M Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mCategory view large-9 medium-8 columns content">
    <h3><?= h($mCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($mCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($mCategory->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($mCategory->updated_at) ?></td>
        </tr>
    </table>
</div>
