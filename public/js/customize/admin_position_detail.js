var redirect_path = window.location.protocol + "//" + window.location.hostname;
populateCountries("country", "state");
$("#position").summernote({height: 100});
$("#description").summernote({height: 300});

var position = $(".page-content").data("source");
var position_img = "";
if (position == "") {
   $("#position").summernote('code', "");
   $("#description").summernote('code', "");
} else {
    $("#position").summernote('code', position.position_name);
    $("#description").summernote('code', position.content);    
    var office = position.office.split(', ');
    $("#country").val(office[1]).trigger('change');
    $("#state").val(office[0]).trigger('change');    
}

$("#file_upload").on('change', function() {
  var formdata = new FormData();
  formdata.append('file', this.files[0]);  
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'position_img',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {		
        position_img = e;
        $("#banner_img").attr("style", "padding:50px 85px 50px 95px");
        $("#banner_img").html("Image uploaded!");
    }
  });
});

$("#save").click(function () {  
    var newPosition = {
        'position_name': $("#position").summernote('code'),
        'content': $("#description").summernote('code'),
        'office': $("#state").val()+", "+$("#country").val(),
        'banner_img': position_img,
        'parent_id': $(".page-content").data('parent'),
        'id': 0
    };
    if (type != "new") {
        newPosition.id = position.id;
    }
    if (newPosition.title != "" && newPosition.content != "" && newPosition.office) {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'save_position',
            data: {'data': newPosition},
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {                
                alert("success!");
                setTimeout(function(){window.location = redirect_path + "/admin/careers";}, 1000);                        
            }
        });
    } else {
        alert("Please fill all the fields!");
    }
});
