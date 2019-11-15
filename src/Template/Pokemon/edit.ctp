<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
?>
<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Subcategories",
    "action" => "getByCategory",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Pokemon/add', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pokemon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pokemon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pokemon form large-9 medium-8 columns content">
    <?= $this->Form->create($pokemon) ?>
    <fieldset>
        <legend><?= __('Edit Pokemon') ?></legend>
        <?php

            echo $this->Form->control('name');
            echo $this->Form->control('body');
            echo $this->Form->control('published');
            echo $this->Form->control('types._ids', ['options' => $types]);
            echo $this->Form->control('files._ids', ['options' => $files]);
              echo $this->Form->control('Category_id', ['options' => $categories]);
              echo $this->Form->control('subcategory_id', ['options' => $subcategories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
