$(document).ready(function () {
    function loadGoster() {
        $("#sakliLoad>img").remove();
        $("#sakliLoad>input").show();
    }
    function loadGizle() {
        $("#sakliLoad>input").hide();
        $("#sakliLoad").append('<img id="theImg" style="display: block;margin-left: 50%" src="' + SITE_URL + '/assets/back/img/ajax-loader.gif" />');
    }
    ///////////////////////PROFİL//////////////////////////////
    //buton kaydet
    $(document).on('click', 'input#pkaydet', function (e) {
        loadGizle();
        var formData = new FormData();
        var ad = $("input[name=ad]").val();
        var email = $("input[name=email]").val();
        var hidemail = $("input[name=hidemail]").val();
        var tel = $("input[name=tel]").val();
        var imageKontrol = $("#image-holder img").length;
        var newimage = 0;
        if ($("#logoresim")[0].files[0] == undefined) {
            newimage = 0;
        } else {
            newimage = 1;
        }
        formData.append('file', $("#logoresim")[0].files[0]);
        formData.append('newimage', newimage);
        formData.append('ad', ad);
        formData.append('email', email);
        formData.append('hidemail', hidemail);
        formData.append('tel', tel);
        formData.append('tip', "profilDuzen");
        $.ajax({
            type: "post",
            url: SITE_URL + "/Profil_Ajax/ajaxCall",
            cache: false,
            dataType: "json",
            data: formData,
            async: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (cevap) {
                if (cevap.hata) {
                    loadGoster();
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    if (cevap.result) {
                        $("input[name=hidad]").val(ad);
                        $("input[name=hidemail]").val(email);
                        $("input[name=hidtel]").val(tel);
                        loadGoster();
                        reset();
                        alertify.success(cevap.result);
                    }
                }
            }
        });
    });
    //buton vazgeç
    $(document).on('click', 'input#pvazgec', function (e) {
        $("input[name=ad]").val($("input[name=hidad]").val());
        $("input[name=email]").val($("input[name=hidemail]").val());
        $("input[name=tel]").val($("input[name=hidtel]").val());
    });
    $(document).on('click', 'i#yenisifre', function (e) {
        $('#sifreModal').modal('show');
    });
    $(document).on('click', '#skayitbutton', function (e) {
        var eskiSifre = $("#eskiSifre").val();
        var yeniSifre = $("#yeniSifre").val();
        var yeniSifreTkrr = $("#yeniSifreTkrr").val();
        $.ajax({
            type: "post",
            url: SITE_URL + "/Profil_Ajax/ajaxCall",
            cache: false,
            dataType: "json",
            data: {"eskiSifre": eskiSifre, "yeniSifre": yeniSifre,
                "yeniSifreTkrr": yeniSifreTkrr, "tip": "sifreKaydet"},
            success: function (cevap) {
                if (cevap.hata) {
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    $('#sifreModal').modal('hide');
                    reset();
                    alertify.success(cevap.update);
                }
            }
        });
    });
});
$(function () {
    $(function () {
        $("#tel").mask("(999) 999-9999");
    });
    var image_holder = $("#image-holder");
    $("#logoresim").on("change", function () {
        if (typeof (FileReader) != "undefined") {
            image_holder.empty();
            var reader = new FileReader();
            reader.onload = function (e) {
                $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image img-responsive",
                    "style": "width:auto;max-width:100%;heaight:auto;max-height:100%;"
                }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
        } else {
            //alert("This browser does not support FileReader.");
        }
    });
});
