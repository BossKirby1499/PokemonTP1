
<?php
echo $this->Html->css([
    'base.css',
    'style.css',
   // 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
    'bootstrap.min.css',
    //'Cocktails/basic.css',
   'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'
]);
/* @var $this \Cake\View\View */
$this->extend('/Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');



?>
<?= $this->fetch('css') ?>
<li><?= $this->Html->link(__('New Attack'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar"> ' . $this->fetch('tb_actions') .'</ul>'); ?>
<?= $this->Html->link(__(' New'), ['action' => 'add'], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-plus']); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('name'); ?></th>
        <th><?= $this->Paginator->sort('description'); ?></th>
        <th><?= $this->Paginator->sort('created'); ?></th>
        <th><?= $this->Paginator->sort('modified'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($attacks as $attack): ?>
        <tr>
            <td><?= $this->Number->format($attack->id) ?></td>
            <td><?= h($attack->title) ?></td>
            <td><?= h($attack->description) ?></td>
            <td><?= h($attack->created) ?></td>
            <td><?= h($attack->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $attack->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $attack->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $attack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
