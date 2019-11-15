function getItems() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (items) {
                    var itemTable = $('#itemData');
                    itemTable.empty();
                    var count = 1;
                    $.each(items.data, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editItem(' + value.id + ')"></a>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\') ? itemAction(\'delete\', ' + value.id + ') : false;"></a>' +
                                '</td></tr>';
                        itemTable.append('<tr><td>' + count + '</td><td>' + value.name + '</td><td>' + value.description + editDeleteButtons);
                        count++;
                    });

                }
    });
}

/* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}

/*
 $('#cocktailAddForm').submit(function (e) {
 e.preventDefault();
 var data = convertFormToJSON($(this));
 alert(data);
 console.log(data);
 });
 */

function itemAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var itemData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        itemData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        itemData = convertFormToJSON($("#editForm").find('.form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(itemData),
        success: function (msg) {
            if (msg) {
                alert('Item data has been ' + statusArr[type] + ' successfully.');
                getCocktails();
                $('.form')[0].reset();
                $('.formData').slideUp();
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}

/*** à déboguer ... ***/
function editItem(id) {
    $.ajax({
        type: 'GET',
        dataType: 'JSON',
        url: urlToRestApi+ "/" + id,
        success: function (data) {
            $('#idEdit').val(data.data.id);
            $('#nameEdit').val(data.data.name);
            $('#descriptionEdit').val(data.data.description);
            $('#editForm').slideDown();
        }
    });
}
