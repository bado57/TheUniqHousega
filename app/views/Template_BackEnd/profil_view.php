<script src="<?php echo SITE_BACK_CJS; ?>/profil.js" type="text/javascript"></script>
<script src="<?php echo SITE_BACK_PLUGINS; ?>/input-mask/jquery.maskedinput.min.js"></script>
<!-- İÇ SAYFA -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profil
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-xs-12">
                <!-- SABİT İÇERİK FORMU -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Profil Bilgileri &nbsp;&nbsp;<i id="yenisifre" style="cursor: pointer;" class="fa fa-key" title="Şifre İşlemleri"></i></h3>
                    </div>
                    <div class="box-body">
                        <form class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="ad">Adınız</label>
                                    <input type="text" class="form-control" id="ad" name="ad" placeholder="Adınız" value="<?php echo $model[0]["Ad"]; ?>"/>
                                    <input type="hidden" name="hidad" value="<?php echo $model[0]["Ad"]; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $model[0]["Email"]; ?>"/>
                                    <input type="hidden" name="hidemail" value="<?php echo $model[0]["Email"]; ?>"/>
                                </div>
                            </div><!-- /.col -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tel">Telefon</label>
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefon" value="<?php echo $model[0]["Tel"]; ?>"/>
                                    <input type="hidden" name="hidtel" value="<?php echo $model[0]["Tel"]; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="logoresim">Profil Resmi</label>
                                    <input id="logoresim" name="logoresim" class="form-control" type="file" />
                                    <div id="image-holder" style="height:200px; width:100%; margin-top:10px;"/>
                                    <img src="<?php echo SITE_BACK_UPLOAD . "/" . $model[0]["Image"]; ?>" class="thumb-image img-responsive" style="width:auto;max-width:100%;height:auto;max-height:100%;"/>
                                </div>
                            </div><!-- /.col -->
                    </div>
                    <div class="col-md-12">
                        <div class="form-group" id="sakliLoad">
                            <input id="pkaydet" type="button" value="Kaydet" class="btn btn-primary pull-right" />
                            <input id="pvazgec" type="button" value="Vazgeç" class="btn btn-default pull-right" style="margin-right:10px;" />
                        </div>
                    </div>
                    </form>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="sifreModal" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" style="width:30%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Şifre Değiştir</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="box-body form-horizontal">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="eskiSifre">Eski Şifre</label>
                                                <input type="text" class="form-control" id="eskiSifre" name="eskiSifre" placeholder="Eski Şifre"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="yeniSifre">Yeni Şifre</label>
                                                <input type="text" class="form-control" id="yeniSifre" name="yeniSifre" placeholder="Yeni Şifre"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="yeniSifreTkrr">Yeni Şifre Tekrar</label>
                                                <input type="text" class="form-control" id="yeniSifreTkrr" name="yeniSifreTkrr" placeholder="Yeni Şifre Tekrar"/>
                                            </div>
                                        </div><!-- /.col -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                        <button type="button" id="skayitbutton" class="btn btn-primary">Kaydet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</div><!-- /İÇ SAYFA -->