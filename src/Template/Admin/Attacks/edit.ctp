<?php
echo $this->Html->css([
    'base.css',
    'style.css',
    // 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
    'bootstrap.min.css',
    //'Cocktails/basic.css',
    'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
]);

/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
        $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $attack->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]
        )
        ?>
    </li>
    <li><?= $this->Html->link(__('List Attacks'), ['action' => 'index']) ?></li>
<?php
$this->fetch('css') ;
$this->end();

$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attack->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]
            )
            ?>
        </li>
        <li><?= $this->Html->link(__('List Attacks'), ['action' => 'index']) ?></li>
    </ul>
<?php
$this->end();
?>
<?= $this->Form->create($attack); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Attack']) ?></legend>
        <?php
        echo $this->Form->control('title');
        echo $this->Form->control('description');
        echo $this->Form->control('pokemon_id', ['options' => $pokemon]);
        ?>
    </fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
