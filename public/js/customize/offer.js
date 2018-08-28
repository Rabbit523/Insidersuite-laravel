var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(".body-item").click(function () {
    var offer_id = $(this).attr('id');
    var suffix = offer_id.match(/\d+/);
    
    window.location = redirect_path + "/offer_detail?id=" + suffix
});
