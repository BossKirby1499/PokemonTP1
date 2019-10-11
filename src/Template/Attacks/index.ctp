<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attack[]|\Cake\Collection\CollectionInterface $attacks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attack'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pokemon'), ['controller' => 'Pokemon', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pokemon'), ['controller' => 'Pokemon', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attacks index large-9 medium-8 columns content">
    <h3><?= __('Attacks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attacks as $attack): ?>
            <tr>
                <td><?= $this->Number->format($attack->id) ?></td>
                <td><?= h($attack->title) ?></td>
                <td><?= h($attack->description) ?></td>
                <td><?= $attack->has('pokemon') ? $this->Html->link($attack->pokemon->name, ['controller' => 'Pokemon', 'action' => 'view', $attack->pokemon->id]) : '' ?></td>
                <td><?= h($attack->created) ?></td>
                <td><?= h($attack->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attack->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attack->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
