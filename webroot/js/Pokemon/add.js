var app = angular.module('linkedlists', []);

app.controller('categoriesController', function ($scope, $http) {
    // l'url vient de add.ctp
    $http.get(urlToLinkedListFilter).then(function (response) {
        $scope.categories = response.data;
    });
});


