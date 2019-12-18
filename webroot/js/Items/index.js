var app = angular.module('app', []);

app.controller('ItemCRUDCtrl', ['$scope', 'ItemCRUDService', function ($scope, ItemCRUDService) {

        $scope.updateItem = function () {
            ItemCRUDService.updateItem($scope.item.id, $scope.item.name, $scope.item.description)
                    .then(function success(response) {
                        $scope.message = 'Item data updated!';
                        $scope.errorMessage = '';
                        $scope.getAllItems();

                    },
                            function error(response) {
                                $scope.errorMessage = 'Error updating item!';
                                $scope.message = '';
                            });
        }

        $scope.getItem = function () {
            var id = $scope.item.id;
            ItemCRUDService.getItem($scope.item.id)
                    .then(function success(response) {
                        $scope.item = response.data.data;
                        $scope.item.id = id;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                if (response.status === 404) {
                                    $scope.errorMessage = 'item not found!';
                                } else {
                                    $scope.errorMessage = "Error getting item!";
                                }
                            });
        }

        $scope.addItem = function () {
            if ($scope.item != null && $scope.item.name) {
                ItemCRUDService.addItem($scope.item.name, $scope.item.description)
                        .then(function success(response) {
                            $scope.message = 'Item added!';
                            $scope.errorMessage = '';
                                $scope.getAllItems();
                        },
                                function error(response) {
                                    $scope.errorMessage = 'Error adding item!';
                                    $scope.message = '';
                                });
            } else {
                $scope.errorMessage = 'Please enter a name!';
                $scope.message = '';
            }
        }

        $scope.deleteItem = function () {
            ItemCRUDService.deleteItem($scope.item.id)
                    .then(function success(response) {
                        $scope.message = 'Item deleted!';
                        $scope.item = null;
                        $scope.errorMessage = '';
                            $scope.getAllItems();

                    },
                            function error(response) {
                                $scope.errorMessage = 'Error deleting item!';
                                $scope.message = '';
                            })

        }

        $scope.getAllItems = function () {
            ItemCRUDService.getAllItems()
                    .then(function success(response) {
                        $scope.items = response.data.data;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                $scope.errorMessage = 'Error getting item!';
                            });
        }

    }]);

app.service('ItemCRUDService', ['$http', function ($http) {

        this.getItem = function getItem(itemId) {
            return $http({
                method: 'GET',
                url: urlToRestApi + '/' + itemId,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.addItem = function addItem(name, description) {
            return $http({
                method: 'POST',
                url: urlToRestApi,
                data: {name: name, description: description},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.deleteItem = function deleteItem(id) {
            return $http({
                method: 'DELETE',
                url: urlToRestApi + '/' + id,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })

        }

        this.updateItem = function updateItem(id, name, description) {
            return $http({
                method: 'PATCH',
                url: urlToRestApi + '/' + id,
                data: {name: name, description: description},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}

            })
        }

        this.getAllItems = function getAllItems() {
            return $http({
                method: 'GET',
                url: urlToRestApi,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

    }]);


