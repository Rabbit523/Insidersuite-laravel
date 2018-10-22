var redirect_path = window.location.protocol + "//" + window.location.hostname;
$(".body-item").click(function () {
    window.location = redirect_path + "/create_experiences"
});
