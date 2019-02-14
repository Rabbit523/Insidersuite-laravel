$("#ContactFormEmail").focusout(function () {  
  if ($(this).val() != '') {
    $(this).removeClass('mod-error');
    $(this).addClass('mod-normal');
    $(".email").addClass('label-error');
  } else {
    $(this).removeClass('mod-normal');
    $(this).addClass('mod-error');
    $(".email").removeClass('label-error');
  }
});
$("#ContactFormName").focusout(function () {  
  if ($(this).val() != '') {
    $(this).removeClass('mod-error');
    $(this).addClass('mod-normal');
    $(".name").addClass('label-error');
  } else {    
    $(this).removeClass('mod-normal');
    $(this).addClass('mod-error');
    $(".name").removeClass('label-error');
  }
});
$("#ContactFormSubject").focusout(function () {  
  if ($(this).val() != '') {
    $(this).removeClass('mod-error');
    $(this).addClass('mod-normal');
    $(".subject").addClass('label-error');
  } else {    
    $(this).removeClass('mod-normal');
    $(this).addClass('mod-error');
    $(".subject").removeClass('label-error');
  }
});
$("#ContactFormMessage").focusout(function () {  
  if ($(this).val() != '') {
    $(this).removeClass('mod-error');
    $(this).addClass('mod-normal');
    $(".message").addClass('label-error');
  } else {    
    $(this).removeClass('mod-normal');    
    $(this).addClass('mod-error');
    $(".message").removeClass('label-error');
  }
});
$('.hm-contact--submit').click(function () {
  if ($("#ContactFormEmail").val() == ' ') {
    $("#ContactFormEmail").addClass('mod-error');
  } else if ($("#ContactFormName").val() == ' ') {
    $("#ContactFormName").addClass('mod-error');
  } else if ($("#ContactFormMessage").val() == ' ') {
    $("#ContactFormMessage").addClass('mod-error');
  } else if ($("#ContactFormSubject").val() == ' ') {
    $("#ContactFormSubject").addClass('mod-error');
  }
});