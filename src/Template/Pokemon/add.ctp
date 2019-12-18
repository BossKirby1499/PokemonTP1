<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
?>
<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Categories",
    "action" => "getCategories",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Pokemon/add', ['block' => 'scriptBottom']);
?>

<?php



/*$urlToPokemonAutocompletesdemoJson = $this->Url->build([
    "controller" => "PokemonAutocompletes",
    "action" => "findPokemon",
    "_ext" => "json"
]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToPokemonAutocompletesdemoJson . '";', ['block' => true]);
echo $this->Html->script('pokemon_autocompletes/autocompletedemo', ['block' => 'scriptBottom']);*/
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.2/angular.js"></script>
<script>
    function categoriesController($scope, $http) {
        var url = "http://localhost/montmo/a18-5b7/CakeAngularJs/Cakephp_AngularJS_v0_0_3/categories/getCategories.json";

        $http.get(url).then(function (response) {
            $scope.categories = response.data;
        });
    }
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pokemon'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>

    </ul>
</nav>
<div class="pokemon form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="categoriesController">
    <?= $this->Form->create($pokemon) ?>
    <fieldset>
        <legend><?= __('Add Pokemon') ?></legend>


            <?php
            echo $this->Form->input('name', ['id' => 'autocomplete']);
            ?>


        <?php
            echo $this->Form->control('body');
            echo $this->Form->control('published');
            echo $this->Form->control('types._ids', ['options' => $types]);
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>

        <div>
            Region:
            <select name="Category_id"
                    id="category-id"
                    ng-model="category"
                    ng-options="category.name for category in categories track by category.id"
                >
                <option value=''>Select</option>
            </select>
        </div>

            Subregion:
            <select name="subcategory_id"
                    id="subcategory-id"
                    ng-disabled="!category"
                    ng-model="subcategory"
                    ng-options="subcategory.name for subcategory in category.subcategories track by subcategory.id"
            >
                <option value=''>Select</option>
            </select>
        <?= $this->Form->button(__('Submit')) ?>
        </div>

        </div>

    </fieldset>

    <?= $this->Form->end() ?>

</div>
