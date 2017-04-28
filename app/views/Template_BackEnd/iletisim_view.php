<script src="<?php echo SITE_BACK_CJS; ?>/iletisim.js" type="text/javascript"></script>
<style type="text/css">
    .hidden-first {
        display: none;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            İletişim
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
                                    <h3 class="box-title"><span id=ustbaslik></span></h3>
                                    <div class="box-tools pull-right">
                                        <button id="formToggleSayfa" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                    </div>
                                    </div>
                                    <div class="box-body">
                                        <form class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adsoyad">Ad Soyad</label>
                                                    <input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tel">Telefon</label>
                                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefon">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail">E-Mail</label>
                                                    <input type="text" class="form-control" id="mail" name="mail" placeholder="E-Mail">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="mesaj">Mesaj</label>
                                                        <textarea class="form-control nock" id="mesaj" name="mesaj" rows="8" style="resize:none"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="padding-top:30px;" id="sakliLoad">
                                                    <input id="vazgec" type="button" value="Kapat" class="btn btn-default pull-right" style="margin-right:10px;" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="box box-info">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Mesajlar</h3>
                                        </div>
                                        <div class="box-body">
                                            <table id="table" class="table table-bordered table-hover TreeGrid">
                                                <thead style="background:#e6e6e6;">
                                                    <tr>
                                                        <th>AdSoyad</th>
                                                        <th>Telefon</th>
                                                        <th>Mail</th>
                                                        <th>Tarih</th>
                                                        <th class="text-right">İşlemler</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="" id="tbody">
                                                    <?php foreach ($model[0] as $kModel) { ?>
                                                        <tr id="<?php echo $kModel['ID']; ?>">
                                                            <td><b><?php echo $kModel['AdSoyad']; ?></b></td>
                                                            <td class="hidden-xs"><?php echo $kModel['Tel']; ?></td>
                                                            <td class="hidden-xs"><?php echo $kModel['Email']; ?></td>
                                                            <td class="hidden-xs"><?php echo $kModel['Tarih']; ?></td>
                                                            <td class="text-right">
                                                                <a id="duzenle" class="btn btn-info btn-sm" title="Düzenle"><i class="fa fa-edit"></i></a>
                                                                <a id="sil" class="btn btn-danger btn-sm" title="Sil"><i class="fa fa-trash"></i></a>
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
