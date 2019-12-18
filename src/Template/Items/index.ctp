<?php
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'Items'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Items/index', ['block' => 'scriptBottom']);
?>

<div  ng-app="app" ng-controller="ItemCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="item.id" /></td>
        </tr>
        <tr>
            <td width="100">Name:</td>
            <td><input type="text" id="name" ng-model="item.name" /></td>
        </tr>
        <tr>
            <td width="100">Description:</td>
            <td><input type="text" id="description" ng-model="item.description" /></td>
        </tr>
    </table>
    <br /> <br />
    <a ng-click="getItem(item.id)">Get Item</a>
    <a ng-click="updateItem(item.id, item.name, item.description)">Update Item</a>
    <a ng-click="addItem(item.name, item.description)">Add Item</a>
    <a ng-click="deleteItem(item.id)">Delete Item</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br />
    <a ng-click="getAllItems()">Get all Items</a><br />
    <br /> <br />
    <table>
        <tr><th>Id</th><th>Name</th><th>Description</th></tr>
    </table>
    <div ng-repeat="item in items">
        <table>


            <tr>
                <td>{{item.id}} </td>
                <td>{{item.name}} </td>
                <td>{{item.description}}</td>
            </tr>
        </table>
    </div>
    <!-- pre ng-show='cocktails'>{{cocktails | json }}</pre-->
</div>
