var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(".is_enable").click(function () {
    $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'blog_favourite',
    data: {
        'id': id
    },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        $(".is_enable").addClass("disabled");
        $(".blog_count").html(e);
    }
  });
});