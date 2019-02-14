var redirect_path = window.location.protocol + "//" + window.location.hostname;

$(".offer").click(function () {	
    var id = $(this).data('source');
    var status = $(this).data('status');
    if (status != false) {
        window.location = redirect_path + "/create_experience?id="+id
    }
});