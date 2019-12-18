<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PokemonAutocomplete $pokemonAutocomplete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pokemonAutocomplete->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pokemonAutocomplete->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pokemon Autocompletes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pokemonAutocompletes form large-9 medium-8 columns content">
    <?= $this->Form->create($pokemonAutocomplete) ?>
    <fieldset>
        <legend><?= __('Edit Pokemon Autocomplete') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
