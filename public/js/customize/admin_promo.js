var redirect_path = window.location.protocol + "//" + window.location.hostname;
$("#datepicker").datepicker({
    showOtherMonths: true,selectOtherMonths: true,    
});
$("#e_datepicker").datepicker({
    showOtherMonths: true,selectOtherMonths: true,    
});
$(".end_date_form").attr('style', 'display: none');
$("#timepicker").wickedpicker({});

$("#check_end_date").click( function(){
    if( $(this).is(':checked') ) {
        $(".end_date_form").attr('style', 'display: block');
    } else {
        $(".end_date_form").attr('style', 'display: none');
    }
 });

 $("#generate").click(function () {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    for (var i = 0; i < 7; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    $("#promotional_code").val(text);
 });

 $("#save").click(function () {
    var data = {        
        "name": $("#promotional_code").val(),
        "type": $("#type_reduction").val(),
        "_value": $("#reduction").val(),
        "start_date": $("#datepicker").val(),
        "time": $("#timepicker").val(),
        "end_date": $("#e_datepicker").val()
    };       
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'save_promotion',
        data: data,
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {            
            window.location = redirect_path + "/admin/promos";
        }
    });
 });

 $("#update").click(function () {
    var data = {
        "id": id,
        "name": $("#promotional_code").val(),
        "type": $("#type_reduction").val(),
        "_value": $("#reduction").val(),
        "start_date": $("#datepicker").val(),
        "time": $("#timepicker").val(),
        "end_date": $("#e_datepicker").val()
    };
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'update_promotion',
        data: data,
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {            
            window.location = redirect_path + "/admin/promos";
        }
    });
 });

 $("#type_reduction").change(function() {
    if ($(this).val() == "percentage") {
        $(".percentage").html("%");
    } else if ($(this).val() == "dollar") {
        $(".percentage").html("$");
    }
 });