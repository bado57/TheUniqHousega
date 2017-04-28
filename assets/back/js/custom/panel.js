$(document).ready(function () {
    $(document).on("click", "a#panelCikisYap", function (e) {
        $.ajax({
            type: "post",
            url: SITE_URL + "/Admin_Ajax/ajaxCall",
            cache: false,
            dataType: "json",
            data: {"tip": "cikisYap"},
            success: function (cevap) {
                if (cevap.hata) {
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    window.location.href = SITE_URL;
                }
            }
        });
    });
    $(document).on("click", "button#yardimbutton", function (e) {
        $('#yardimModal').modal('show');
    });
});