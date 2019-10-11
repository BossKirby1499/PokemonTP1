<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pokemon'), ['action' => 'edit', $pokemon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pokemon'), ['action' => 'delete', $pokemon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pokemon'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pokemon view large-9 medium-8 columns content">
    <h3><?= h($pokemon->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pokemon->has('user') ? $this->Html->link($pokemon->user->id, ['controller' => 'Users', 'action' => 'view', $pokemon->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pokemon->name) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $this->Number->format($pokemon->published) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pokemon->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pokemon->modified) ?></td>
        </tr>
    </table>
    <h3>Description</h3>
    <h5><?= h($pokemon->body) ?></h5>
    <div class="related">
        <h4><?= __('Related Types') ?></h4>
        <?php if (!empty($pokemon->types)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pokemon->types as $types): ?>
            <tr>
                <td><?= h($types->id) ?></td>
                <td><?= h($types->name) ?></td>
                <td><?= h($types->created) ?></td>
                <td><?= h($types->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Types', 'action' => 'view', $types->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Types', 'action' => 'edit', $types->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Types', 'action' => 'delete', $types->id], ['confirm' => __('Are you sure you want to delete # {0}?', $types->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <?php endif; ?>
        <div class="related">
            <h4><?= __('Related Files') ?></h4>
            <?php if (!empty($pokemon->files)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <th scope="col"><?= __('Image') ?></th>
                    </tr>
                    <?php foreach ($pokemon->files as $files): ?>
                        <tr>
                            <td>
                                <?php
                                echo $this->Html->image($files->path . $files->name, [
                                    "alt" => $files->name,
                                    "width" => "520px",
                                    "height" => "350px"
                                ]);
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <h4><?= __('Related Attacks') ?></h4>
        <?php if (!empty($pokemon->attacks)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($pokemon->attacks as $attack): ?>
                    <tr>
                        <td><?= h($attack->id) ?></td>
                        <td><?= h($attack->title) ?></td>
                        <td><?= h($attack->description) ?></td>
                        <td><?= h($attack->created) ?></td>
                        <td><?= h($attack->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Attacks', 'action' => 'view', $attack->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Attacks', 'action' => 'edit', $attack->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attacks', 'action' => 'delete', $attack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attack->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
