var redirect_path = window.location.protocol + "//" + window.location.hostname;
var count = 0;

if (type) {
    count = 1;
    $(".disable").attr('style', 'display: block');
    $(".enable").attr('style', 'display: none');    
} else {
    count = 0;
    $(".disable").attr('style', 'display: none');
    $(".enable").attr('style', 'display: block');
}

$(".cb-like-count").click(function () {
    if (count == 0) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'blog_favourite',
            data: {
                'id': id,
                'type': "add"
            },
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {               
                $(".disable").attr('style', 'display: block');
                $(".enable").attr('style', 'display: none');  
                $(".blog_count").html(e);
                count  = 1;
            }
        });
    } else {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'blog_favourite',
            data: {
                'id': id,
                'type': "remove"
            },
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {               
                $(".disable").attr('style', 'display: none');
                $(".enable").attr('style', 'display: block');
                $(".blog_count").html(e);
                count  = 0;
            }
        });
    }    
});