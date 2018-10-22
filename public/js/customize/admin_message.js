var redirect_path = window.location.protocol + "//" + window.location.hostname;
var id = "";
$(".check").click(function () {
    id = $(this).data('id');
        
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'get_messages',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
           $("#sender_id").val(e.user_id);
           $("#sender_name").val(e.name);
           $("#sender_email").val(e.email);           
           $("#date").val(e.created_at);
           $("#content").val(e.content);
           $("#modal-message").modal('show');
        }
    });
});

$('#modal-message').on('hidden.bs.modal', function () {
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'set_messages_status',
        data: {'id': id},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (e) {
           location.reload(true);
        }
    });
})