$(document).ready(function () {
    function loadGoster() {
        $("#sakliLoad>img").remove();
        $("#sakliLoad>input").show();
    }
    function loadGizle() {
        $("#sakliLoad>input").hide();
        $("#sakliLoad").append('<img id="theImg" style="display: block;margin-left: 50%" src="' + SITE_URL + '/assets/back/img/ajax-loader.gif" />');
    }
    myTable = $("#table").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": false,
        "pageLength": 100
    });
    //buton toggle
    $(document).on('click', 'button#formToggleSayfa', function (e) {
        var kapaliacik = $("input[name=kapaliacik]").val();
        var duzenleme = $("input[name=duzenleme]").val();
        if (kapaliacik == 0) {
            $("input[name=kapaliacik]").val(1);
            if (duzenleme == 0) {
                $("input[name=duzenleme]").val(0);
                $("input[name=duzenlemeID]").val(-1);
                $("#adsoyad").val("");
                $("#mail").val("");
                $("#state").val("");
                $("#ustbaslik").text();
            }
        } else {
            $("input[name=duzenleme]").val(0);
            $("input[name=kapaliacik]").val(0);
            $("input[name=duzenlemeID]").val(-1);
            $("#adsoyad").val("");
            $("#mail").val("");
            $("#state").val("");
            $("#ustbaslik").text();
        }
    });
    //silme butonu
    $(document).on('click', 'a#sil', function (e) {
        var ID = $(this).parent().parent().attr('id');
        reset();
        alertify.confirm("Silmek İstiyormusunuz", function (e) {
            if (e) {
                $.ajax({
                    type: "post",
                    url: SITE_URL + "/Admin_Ajax/ajaxCall",
                    cache: false,
                    dataType: "json",
                    data: {"ID": ID, "tip": "designformSil"},
                    success: function (cevap) {
                        if (cevap.hata) {
                            reset();
                            alertify.alert(cevap.hata);
                            return false;
                        } else {
                            if (cevap.result) {
                                var length = $('tbody#tbody tr').length;
                                for (var t = 0; t < length; t++) {
                                    var attrValueId = $("tbody#tbody > tr").eq(t).attr('id');
                                    if (attrValueId == ID) {
                                        var deleteRow = $('tbody#tbody > tr:eq(' + t + ')');
                                        myTable.rows($(deleteRow)).remove().draw();
                                    }
                                }
                                reset();
                                alertify.success(cevap.result);
                            }
                        }
                    }
                });
            } else {
                alertify.error("Silme İşlemi iptal edildi");
            }
        });
    });
    //table düzenle butonları
    $(document).on('click', 'a#duzenle', function (e) {
        var ID = $(this).parent().parent().attr('id');
        $.ajax({
            type: "post",
            url: SITE_URL + "/Admin_Ajax/ajaxCall",
            dataType: "json",
            cache: false,
            data: {"ID": ID, "tip": "designformDuzenle"},
            success: function (cevap) {
                if (cevap.hata) {
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    if (cevap.result) {
                        $("#sayfaustbaslik").text("Banner");
                        $("#adsoyad").val(cevap.result[0].AdSoyad);
                        $("#mail").val(cevap.result[0].Email);
                        $("#state").val(cevap.result[0].State);
                        $("input[name=duzenleme]").val(1);
                        $("input[name=duzenlemeID]").val(ID);
                        var kapaliacik = $("input[name=kapaliacik]").val();
                        if (kapaliacik == 0) {
                            $("#formToggleSayfa").click();
                        }
                    }
                }
            }
        });
    });
});
$(function () {
    $("#vazgec").on("click", function () {
        $("#formToggleSayfa").click();
        $(".hidden-first").fadeOut();
    });
});
