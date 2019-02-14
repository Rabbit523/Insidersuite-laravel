$("#mobile_number").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});

$("#phone_number").intlTelInput({
  allowDropdown: true,
  autoHideDialCode: false,
  autoPlaceholder: "polite",
  dropdownContainer: "body",
  preferredCountries: ['au', 'nz', 'fr', 'gb', 'us'],
  utilsScript: "/js/utils.js"
});

$('input[name=confirm_password]').on('keyup',function(){
  if($(this).val() != $('input[name=password]').val()){
    $('#login_update_button').prop('disabled',true);
    $('#password_check').attr('style','display:block;');
  }else{
    $('#login_update_button').prop('disabled',false);
    $('#password_check').attr('style','display:none;');
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
      $(".header_logo").attr('src', e);
      if (old_path != e) {
        $(".old_img").attr('src', e);
      }
    }
  });
});