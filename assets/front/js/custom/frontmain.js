$(document).ready(function () {
    function loadGoster() {
        $("#sakliLoad>img").remove();
        $("#sakliLoad>input").show();
    }
    function loadGizle() {
        $("#sakliLoad>input").hide();
        $("#sakliLoad").append('<img id="theImg" style="display: block;margin-left: 50%" src="' + SITE_URL + 'assets/front/images/ajax-loader.gif" />');
    }
    $(document).on("click", "#iletsubmit", function (e) {
        loadGizle();
        var adsoyad = $("#formname").val();
        var email = $("#formemail").val();
        var telefon = $("#formphone").val();
        var mesaj = $("#formmessage").val();
        $.ajax({
            type: "post",
            url: SITE_URL + "FrontGenel/ajaxCall",
            cache: false,
            dataType: "json",
            data: {"adsoyad": adsoyad, "email": email,
                "telefon": telefon, "mesaj": mesaj, "tip": "iletisim"},
            success: function (cevap) {
                if (cevap.hata) {
                    loadGoster();
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    $("#formname").val("");
                    $("#formemail").val("");
                    $("#formphone").val("");
                    $("#formmessage").val("");
                    loadGoster();
                    reset();
                    alertify.alert(cevap.result);
                    return false;
                }
            }
        });
    });
    $(document).on("click", "#designsubmit", function (e) {
        loadGizle();
        var adsoyad = $("#designname").val();
        var email = $("#designemail").val();
        var state = $("#designstate").val();
        $.ajax({
            type: "post",
            url: SITE_URL + "FrontGenel/ajaxCall",
            cache: false,
            dataType: "json",
            data: {"adsoyad": adsoyad, "email": email,
                "state": state, "tip": "designform"},
            success: function (cevap) {
                if (cevap.hata) {
                    loadGoster();
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    $("#designname").val("");
                    $("#designemail").val("");
                    $("#designstate").val("");
                    loadGoster();
                    $('#myModal').modal('toggle');
                    reset();
                    alertify.alert(cevap.result);
                    return false;
                }
            }
        });
    });
    //selectbox language
    $("select#kullaniciLanguage").change(function () {
        var lang = $(this).val();
        $.ajax({
            type: "post",
            url: SITE_URL + "Language",
            cache: false,
            dataType: "json",
            data: {"lang": lang},
            success: function (cevap) {
                if (cevap.hata) {
                    //alert(cevap.hata);
                } else {
                    window.location.reload();
                }
            }
        });
    });
});