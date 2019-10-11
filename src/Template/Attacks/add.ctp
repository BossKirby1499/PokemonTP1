<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attack $attack
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attacks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pokemon'), ['controller' => 'Pokemon', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pokemon'), ['controller' => 'Pokemon', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attacks form large-9 medium-8 columns content">
    <?= $this->Form->create($attack) ?>
    <fieldset>
        <legend><?= __('Add Attack') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('pokemon_id', ['options' => $pokemon]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
