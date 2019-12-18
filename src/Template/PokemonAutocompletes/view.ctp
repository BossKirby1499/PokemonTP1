<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PokemonAutocomplete $pokemonAutocomplete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pokemon Autocomplete'), ['action' => 'edit', $pokemonAutocomplete->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pokemon Autocomplete'), ['action' => 'delete', $pokemonAutocomplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemonAutocomplete->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pokemon Autocompletes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon Autocomplete'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pokemonAutocompletes view large-9 medium-8 columns content">
    <h3><?= h($pokemonAutocomplete->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pokemonAutocomplete->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pokemonAutocomplete->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pokemonAutocomplete->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pokemonAutocomplete->modified) ?></td>
        </tr>
    </table>
</div>
