var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#addNew").click(function () {
    window.location = redirect_path + "/admin/career_detail?id=0"
});

$(".edit").click(function () {
    var id = $(this).data('id');
    window.location = redirect_path + "/admin/career_detail?id="+id
});

$(".delete").click(function () {
    var id = $(this).data('id');
    alert("Do you really want to remove this career?");
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'delete_career',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
            location.reload(true);
        }
    });
});