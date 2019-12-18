<?php
$urlToRestApi = $this->Url->build('/api/items', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Items/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default items-content">
            <div class="panel-heading">Items <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Item</h2>
                <form class="form" id="itemAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="itemAction('add')">Add Item</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Cocktail" -->
                </form>
            </div>
            <!-- <div class="panel-body none formData" id="editForm">
                 <h2 id="actionLabel">Edit Cocktail</h2>
                 <form class="form" id="cocktailEditForm" enctype='application/json'>
                     <div class="form-group">
                         <label>Name</label>
                         <input type="text" class="form-control" name="name" id="nameEdit"/>
                     </div>
                     <div class="form-group">
                         <label>Description</label>
                         <input type="text" class="form-control" name="description" id="descriptionEdit"/>
                     </div>
                     <input type="hidden" class="form-control" name="id" id="idEdit"/>
                     <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                     <a href="javascript:void(0);" class="btn btn-success" onclick="cocktailAction('edit')">Update Cocktail</a>
                      input type="submit" class="btn btn-success" id="editButton" value="Update Cocktail"
                </form>-->
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="itemData">
                    <?php
                    $count = 0;
                    foreach ($items as $item): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['description']; ?></td>
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editItem('<?php echo $item['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? itemAction('delete', '<?php echo $item['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <tr><td colspan="5">No item(s) found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

