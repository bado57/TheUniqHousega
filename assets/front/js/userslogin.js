var SITE_URL = "http://localhost/saltanatmobilya/";
$(document).ready(function () {
    var loginDeger = $("#sonucDeger").val();
    if (loginDeger != "undefined") {//front
        if (loginDeger != "") {//front
            alertify.alert(loginDeger);
            return false;
        }
    }

    $(document).on("click", "#sifreUnutGonder", function (e) {
        var email = $("#sifreunutemail").val();
        $.ajax({
            type: "post",
            url: SITE_URL + "Front_Ajax",
            cache: false,
            dataType: "json",
            data: {"email": email, "tip": "sifreUnuttum"},
            success: function (cevap) {
                if (cevap.hata) {
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    $("#sifreunutemail").val("");
                    $('#myModal').modal('hide');
                    alertify.alert(cevap.result);
                    return false;
                }
            }
        });
    });
});
 