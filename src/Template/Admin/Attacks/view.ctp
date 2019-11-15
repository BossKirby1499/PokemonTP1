<?php
echo $this->Html->css([
    'base.css',
    'style.css',
    // 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
    'bootstrap.min.css',
    //'Cocktails/basic.css',
    'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
]);
$this->extend('/Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Attack'), ['action' => 'edit', $attack->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Attack'), ['action' => 'delete', $attack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]) ?> </li>
<li><?= $this->Html->link(__('List Attacks'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Attack'), ['action' => 'add']) ?> </li>
<li><?=
    $this->Html->link('Section publique en JS', [
        'prefix' => false,
        'controller' => 'Attacks',
        'action' => 'index'
    ]);
    ?>
</li>
<?php
$this->fetch('css') ;
$this->end();

$this->start('tb_sidebar');
?>
<div class="dropdown hidden-xs">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= __("Actions") ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <?= $this->fetch('tb_actions') ?>

    </ul>
</div>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($attack->title) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Title') ?></td>
            <td><?= h($attack->title) ?></td>
        </tr>
        <tr>
            <td><?= __('Description') ?></td>
            <td><?= h($attack->description) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($attack->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Created') ?></td>
            <td><?= h($attack->created) ?></td>
        </tr>
        <tr>
            <td><?= __('Modified') ?></td>
            <td><?= h($attack->modified) ?></td>
        </tr>
    </table>
</div>
