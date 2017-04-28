<script src="<?php echo SITE_BACK_CJS; ?>/slider.js" type="text/javascript"></script>
<style type="text/css">
    .hidden-first {
        display: none;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Slider
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
                                    <input name="normalSira" type="hidden" value="" >
                                        <h3 class="box-title"><span id=ustbaslik>Yeni</span> Resim</h3>
                                        <div class="box-tools pull-right">
                                            <button id="formToggleSayfa" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="box-body">
                                            <form class="row urunForm">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="resim">Slider Resmi</label>
                                                        <input id="resim" name="resim" class="form-control" type="file" />
                                                        <div id="image-holder" style="height:290px; width:100%; margin-top:10px;"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="aktiflik">Aktiflik</label>
                                                        <select class="form-control select2" id="aktiflik" name="aktiflik" style="width: 100%;">
                                                            <option value="-1">Seçiniz</option>
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Pasif</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group" id="sakliLoad" style="margin-top:15px;">
                                                        <input id="kaydet" type="button" value="Kaydet" class="btn btn-primary pull-right" />
                                                        <input id="vazgec" type="button" value="Vazgeç" class="btn btn-default pull-right" style="margin-right:10px;" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </div>
                                        <div class="box box-info">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">Resimler</h3>
                                            </div>
                                            <div class="box-body">
                                                <table id="table" class="table table-bordered table-hover TreeGrid">
                                                    <thead style="background:#e6e6e6;">
                                                        <tr>
                                                            <th>Resim</th>
                                                            <th>Durum</th>
                                                            <th>Tarih</th>
                                                            <th class="text-right">İşlemler</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="" id="tbody">
                                                        <?php foreach ($model[0] as $gModel) { ?>
                                                            <tr id="<?php echo $gModel['ID']; ?>">
                                                                <td><img style="height:200px;" src="<?php echo SITE_URL . "/upload/slider/" . $gModel['Resim']; ?>"></img></td>    
                                                        <td class="hidden-xs"><?php echo $gModel['Durum']; ?></td>
                                                        <td class="hidden-xs"><?php echo $gModel['Tarih']; ?></td>
                                                        <td class="text-right">
                                                            <a id="sduzenle" href="#" class="btn btn-info btn-sm" title="Düzenle"><i class="fa fa-edit"></i></a>
                                                            <a id="sSil" class="btn btn-danger btn-sm" title="Sil"><i class="fa fa-trash"></i></a>
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
