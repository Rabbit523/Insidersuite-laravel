var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#content").summernote({height: 400});
if (type == "old") {
  var newsletter = $(".page-content").data("source");
  newsletter_id = newsletter.id;
  $.ajax({
    type: 'get',
    dataType: 'json',
    url: 'get_newsletter_imgs',
    data: {'id': newsletter_id},
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        var i = 0;
        while(i < e.length) {
          var html = '<img ' + 'id="' + i+ '" class="attached_image"' + 'src="' + e[i].path  + '"></img>';
          $(".images").append( html );
          i ++;
        }
    }
  });
}

$("#file_upload").on('change', function() {
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  if (type == "old") {
    formdata.append('id', newsletter_id);
  } else {
    formdata.append('id', $("#new_id").data('source'));
  }
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'newsletter_imgs',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
        var html = '<img class="attached_image"' + 'src="' + e  + '"></img>';
        $(".images").append( html );
    }
  });
});
