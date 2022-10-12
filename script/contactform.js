jQuery(document).ready(function ($) {

    $("#offer-form").submit(function () {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: str,
            success: function (msg) {
                if (msg == 'OK') {
                    result = '<div class="notification_ok">Ваше повідомлення відправлено</div>';
                    $(".innerErrorName").remove();
                    $('#okSubmit').html(result);
                } else {
                    result = msg;
                }
                $('#note').html(result);
            }
        });
        return false;
    });
});