var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#addNew").click(function () {
    window.location = redirect_path + "/admin/blog_detail?id=0"
});

$(".edit").click(function () {
    var id = $(this).data('id');
    window.location = redirect_path + "/admin/blog_detail?id="+id
});

$(".delete").click(function () {
    var id = $(this).data('id');
    alert("Do you really want to remove this blog?");
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'delete_blog',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
          alert("Success to remove!");
          location.reload(true);
        }
    });
});
