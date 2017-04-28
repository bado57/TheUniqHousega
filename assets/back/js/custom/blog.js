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
                $("#baslik").val("");
                CKEDITOR.instances['icerik'].setData("");
                $("#aktiflik").select2("val", -1);
                $("#resim").val("");
                $("#image-holder").empty();
                $("#image-holder").prepend('<img id="theImg" src="' + SITE_URL + '/upload/blog/noimage.png' + '" class="thumb-image img-responsive" style="width:auto;max-width:100%;height:auto;max-height:100%;"/>');
                $("#ustbaslik").text("Yeni");
            }
        } else {
            $("input[name=duzenleme]").val(0);
            $("input[name=kapaliacik]").val(0);
            $("input[name=duzenlemeID]").val(-1);
            $("#baslik").val("");
            CKEDITOR.instances['icerik'].setData("");
            $("#aktiflik").select2("val", -1);
            $("#resim").val("");
            $("#image-holder").empty();
            $("#ustbaslik").text("Yeni");
        }
    });
    //silme butonu
    $(document).on('click', 'a#blogsil', function (e) {
        var ID = $(this).parent().parent().attr('id');
        reset();
        alertify.confirm("Silmek İstiyormusunuz", function (e) {
            if (e) {
                $.ajax({
                    type: "post",
                    url: SITE_URL + "/Admin_Ajax/ajaxCall",
                    cache: false,
                    dataType: "json",
                    data: {"ID": ID, "tip": "blogSil"},
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
    //buton kaydet
    $(document).on('click', 'input#kaydet', function (e) {
        loadGizle();
        var duzenleme = $("input[name=duzenleme]").val();
        if (duzenleme == 0) {//ekleme
            var formData = new FormData();
            var baslik = $("#baslik").val();
            var icerik = CKEDITOR.instances['icerik'].getData();
            var aktiflik = $("#aktiflik").val();
            var newimage = 0;
            if ($("#resim")[0].files[0] == undefined) {
                newimage = 0;
            } else {
                newimage = 1;
            }
            formData.append('baslik', baslik);
            formData.append('icerik', icerik);
            formData.append('aktiflik', aktiflik);
            formData.append('file', $("#resim")[0].files[0]);
            formData.append('newimage', newimage);
            formData.append('tip', "blogEkle");
            $.ajax({
                type: "post",
                url: SITE_URL + "/Admin_Ajax/ajaxCall",
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
                            if (aktiflik != 0) {
                                aktiflik = "Aktif";
                            } else {
                                aktiflik = "Pasif";
                            }
                            $("#formToggleSayfa").click();
                            var addRow = ("<tr id='" + cevap.data + "'>"
                                    + "<td><b>" + baslik + "</b></td>"
                                    + "<td class='hidden-xs'>" + aktiflik + "</td>"
                                    + "<td class='hidden-xs'>" + cevap.tarih + "</td>"
                                    + "<td class='text-right'>"
                                    + " <a id='blogduzenle' class='btn btn-info btn-sm' title='Düzenle'><i class='fa fa-edit'></i></a>"
                                    + " <a id='blogsil' class='btn btn-danger btn-sm' title='Sil'><i class='fa fa-trash'></i></a>"
                                    + "</td></tr>");
                            myTable.rows.add($(addRow)).draw();
                            loadGoster();
                            reset();
                            alertify.success(cevap.result);
                        }
                    }
                }
            });
        }
        else {//düzenleme
            var formData = new FormData();
            var ID = $("input[name=duzenlemeID]").val();
            var baslik = $("#baslik").val();
            var icerik = CKEDITOR.instances['icerik'].getData();
            var aktiflik = $("#aktiflik").val();
            var newimage = 0;
            if ($("#resim")[0].files[0] == undefined) {
                newimage = 0;
            } else {
                newimage = 1;
            }
            formData.append('ID', ID);
            formData.append('baslik', baslik);
            formData.append('icerik', icerik);
            formData.append('aktiflik', aktiflik);
            formData.append('file', $("#resim")[0].files[0]);
            formData.append('newimage', newimage);
            formData.append('tip', "blogDuzenleme");
            $.ajax({
                type: "post",
                url: SITE_URL + "/Admin_Ajax/ajaxCall",
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
                            if (aktiflik != 0) {
                                aktiflik = "Aktif";
                            } else {
                                aktiflik = "Pasif";
                            }
                            $("#formToggleSayfa").click();
                            var length = $('tbody#tbody tr').length;
                            for (var t = 0; t < length; t++) {
                                var attrValueId = $("tbody#tbody > tr").eq(t).attr('id');
                                if (attrValueId == ID) {
                                    $("tbody#tbody > tr:eq(" + t + ")").css({"background-color": "#F2F2F2"});
                                    $("tbody#tbody > tr:eq(" + t + ")> td").eq(0).text(baslik);
                                    $("tbody#tbody > tr:eq(" + t + ")> td").eq(1).text(aktiflik);
                                }
                            }
                            loadGoster();
                            reset();
                            alertify.success(cevap.result);
                        }
                    }
                }
            });
        }
    });
    //table düzenle butonları
    $(document).on('click', 'a#blogduzenle', function (e) {
        var ID = $(this).parent().parent().attr('id');
        $.ajax({
            type: "post",
            url: SITE_URL + "/Admin_Ajax/ajaxCall",
            dataType: "json",
            cache: false,
            data: {"ID": ID, "tip": "blogDuzenle"},
            success: function (cevap) {
                if (cevap.hata) {
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    if (cevap.result) {
                        $("#baslik").val(cevap.result[0][0].Baslik);
                        CKEDITOR.instances['icerik'].setData(cevap.result[0][0].Icerik);
                        $("#aktiflik").select2("val", cevap.result[0][0].Durum);
                        $("#sayfaustbaslik").text(cevap.result[0][0].Baslik);
                        $("#image-holder").empty();
                        $("#image-holder").prepend('<img id="theImg" src="' + SITE_URL + '/upload/blog/' + cevap.result[0][0].Resim + '" class="thumb-image img-responsive" style="width:auto;max-width:100%;height:auto;max-height:100%;"/>');
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
    var image_holder = $("#image-holder");
    $("#resim").on("change", function () {
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
    $("#vazgec").on("click", function () {
        $("#formToggleSayfa").click();
        $(".hidden-first").fadeOut();
    });
});
