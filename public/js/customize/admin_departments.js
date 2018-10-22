var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#addNew").click(function () {
    var parent_name = $(".department_name").attr('id');
    var id = "";
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'get_parent',
        data: {'name': parent_name},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {         
            id = e;
            window.location = redirect_path + "/admin/department_detail?id=0"+"&parent_id="+id
        }
    });    
});

$(".edit").click(function () {
    var id = $(this).data('id');    
    window.location = redirect_path + "/admin/department_detail?id="+id+"&parent_id=0"
});

$(".delete").click(function () {
    var id = $(this).data('id');    
    alert("Do you really want to remove this career?");
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'delete_department',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
            location.reload(true);
        }
    });
});