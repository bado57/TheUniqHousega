<script src="<?php echo SITE_BACK_CJS; ?>/blog.js" type="text/javascript"></script>
<style type="text/css">
    .hidden-first {
        display: none;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Blog
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success collapsed-box">
                    <div class="box-header with-border">
                        <input name="kapaliacik" type="hidden" value="0" >
                            <input name="duzenleme" type="hidden" value="" >
                                <input name="duzenlemeID" type="hidden" value="" >
                                    <h3 class="box-title"><span id=ustbaslik>Yeni</span> İçerik</h3>
                                    <div class="box-tools pull-right">
                                        <button id="formToggleSayfa" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>
                                    <div class="box-body">
                                        <form class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="baslik">Başlık</label>
                                                        <textarea class="form-control nock" id="baslik" name="baslik" rows="3" style="resize:none"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="icerik">İçerik</label>
                                                        <textarea class="form-control" id="icerik" name="icerik" rows="5" style="resize:none"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="aktiflik">Aktiflik</label>
                                                    <select class="form-control select2" id="aktiflik" name="aktiflik" style="width: 100%;">
                                                        <option value="-1">Seçiniz</option>
                                                        <option value="0">Pasif</option>
                                                        <option value="1">Aktif</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="resim">Anasayfa Resmi</label>
                                                    <input id="resim" name="resim" class="form-control" type="file" />
                                                    <div id="image-holder" style="height:200px; width:100%; margin-top:10px;">
                                                        <img src="<?php echo SITE_BACK_UPBLOG . "/noimage.png"; ?>" class="thumb-image img-responsive" style="width:auto;max-width:100%;height:auto;max-height:100%;"/>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top:30px;" id="sakliLoad">
                                                    <input id="kaydet" type="button" value="Kaydet" class="btn btn-primary pull-right" />
                                                    <input id="vazgec" type="button" value="Vazgeç" class="btn btn-default pull-right" style="margin-right:10px;" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="box box-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">İçerikler</h3>
                                        </div>
                                        <div class="box-body">
                                            <table id="table" class="table table-bordered table-hover TreeGrid">
                                                <thead style="background:#e6e6e6;">
                                                    <tr>
                                                        <th>Başlık</th>
                                                        <th>Durum</th>
                                                        <th>Tarih</th>
                                                        <th class="text-right">İşlemler</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="" id="tbody">
                                                    <?php foreach ($model[0] as $kModel) { ?>
                                                        <tr id="<?php echo $kModel['ID']; ?>">
                                                            <td><b><?php echo $kModel['Baslik']; ?></b></td>
                                                            <td class="hidden-xs"><?php echo $kModel['Durum']; ?></td>
                                                            <td class="hidden-xs"><?php echo $kModel['Tarih']; ?></td>
                                                            <td class="text-right">
                                                                <a id="blogduzenle" class="btn btn-info btn-sm" title="Düzenle"><i class="fa fa-edit"></i></a>
                                                                <a id="blogsil" class="btn btn-danger btn-sm" title="Sil"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </section>
                                    </div>
