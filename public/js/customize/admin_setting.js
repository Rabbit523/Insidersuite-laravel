var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#phone").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});
$(".alert").attr('style', 'display:none;');
$("#full_name").val(user.username);
$("#phone").val(user.phone_number);
$("#email").val(user.email);

$("#save_profile").click(function () {
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'save_admin_profile',
        data: {
            'user_id': user.user_id,
            'username': $("#full_name").val(),
            'email': $("#email").val(),
            'phone_number': $("#phone").intlTelInput('getNumber')
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {            
            location.reload(true);
        }
    });
});

$("#save").click(function () {
    var old_pwd = $("#old_password").val();
    var new_pwd = $("#new_password").val();
    var confirm_pwd = $("#confirm_password").val();
    if (new_pwd != confirm_pwd) {
        $(".alert").attr('style', 'display:block;');
        $(".message").html("New password and confirm password unmatched!");
    } else {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: 'check_password',
            data: {'old_pwd': old_pwd},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {            
                if (e == "true") {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: 'save_admin_password',
                        data: {'password': new_pwd, 'user_id': user.user_id},
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (e) {
                            if (e == "success") {
                                location.reload(true);
                            } else {
                                $(".alert").attr('style', 'display:block;');
                                $(".message").html(e);
                            }
                        }
                    });
                } else {
                    $(".alert").attr('style', 'display:block;');
                    $(".message").html("Old password isn't matched!");
                }
            }
        });
    }    
});

$('#avatarInput').on('change',function(){
  var formdata = new FormData();
  formdata.append('file', this.files[0]);
  var old_path = $(".old_img").attr('src');
  $.ajax({
    type: 'post',
    dataType: 'json',
    url: 'profile_photo',
    data: formdata,
    processData: false,
    contentType: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (e) {
      $(".new_img").attr('src', e);      
      if (old_path != e) {
        $(".old_img").attr('src', e);
      }
    }
  });
});