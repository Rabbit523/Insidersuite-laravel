var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#title").summernote({height: 100});
$("#description").summernote({height: 300});

var blog = $(".page-content").data("source");
var blog_img = "";
if (blog == "") {
   $("#title").summernote('code', "");
   $("#description").summernote('code', "");
} else {
    $("#title").summernote('code', blog.title);
    $("#description").summernote('code', blog.content);
}

$("#file_upload").on('change', function() {
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'blog_img',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        blog_img = e;
        $("#banner_img").attr("style", "padding:50px 85px 50px 95px");
        $("#banner_img").html("Image uploaded!");
    }
  });
});

$("#save").click(function () {
    var newBlog = {
        'title': $("#title").summernote('code'),
        'content': $("#description").summernote('code'),
        'banner_img': blog_img,
        'status': "saved"
    };
    if (type == "new") {
      if (newBlog.title != "" && newBlog.content != "" && blog_img) {
          $.ajax({
              type: 'post',
              dataType: 'json',
              url: 'save_blog',
              data: {'data': newBlog},
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (e) {
                  alert("success!");
                  setTimeout(function(){window.location = redirect_path + "/admin/blogs";}, 1000);
              }
          });
      } else {
          alert("Please fill all the fields!");
      }
    } else {
      var Blog = {
          'title': $("#title").summernote('code'),
          'content': $("#description").summernote('code'),
          'banner_img': blog_img,
          'status': "saved",
          'blog_id': blog.id
      };      
      $.ajax({
          type: 'post',
          dataType: 'json',
          url: 'update_blog',
          data: {'data': Blog},
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (e) {
            console.log(e);
            alert("success!");
            setTimeout(function(){window.location = redirect_path + "/admin/blogs";}, 1000);
          }
      });
    }

});

$("#publish").click(function () {
    var newBlog = {
        'title': $("#title").summernote('code'),
        'content': $("#description").summernote('code'),
        'banner_img': blog_img,
        'status': "published"
    };
    if (newBlog.title != "" && newBlog.content != "" && blog_img) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'save_blog',
            data: {'data': newBlog},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
                alert("success!");
                setTimeout(function(){window.location = redirect_path + "/admin/blogs";}, 1000);
            }
        });
    } else {
        alert("Please fill all the fields!");
    }
});
