<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attack $attack
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attack'), ['action' => 'edit', $attack->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attack'), ['action' => 'delete', $attack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attacks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attack'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pokemon'), ['controller' => 'Pokemon', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon'), ['controller' => 'Pokemon', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attacks view large-9 medium-8 columns content">
    <h3><?= h($attack->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($attack->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($attack->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pokemon') ?></th>
            <td><?= $attack->has('pokemon') ? $this->Html->link($attack->pokemon->name, ['controller' => 'Pokemon', 'action' => 'view', $attack->pokemon->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attack->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($attack->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($attack->modified) ?></td>
        </tr>
    </table>
</div>
