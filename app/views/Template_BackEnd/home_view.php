<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Yönetim Paneli
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo SITE_URL; ?>/Admin"><i class="fa fa-home"></i> Anasayfa</a></li>
            <li class="active">Yönetim Paneli</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <a href="<?php echo SITE_URL; ?>/Admin/blog">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo $model[1]; ?></h3>
                            <p>Blog</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="small-box-footer">Detaylar <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <a href="<?php echo SITE_URL; ?>/Admin/designform">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo $model[2]; ?></h3>
                            <p>Design Form</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <div class="small-box-footer">Detaylar <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                </a>
            </div>
             <div class="col-lg-4 col-md-4 col-xs-12">
                <a href="<?php echo SITE_URL; ?>/Admin/iletisim">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo $model[3]; ?></h3>
                            <p>İletişim</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-paper-plane-o"></i>
                        </div>
                        <div class="small-box-footer">Detaylar <i class="fa fa-arrow-circle-right"></i></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-pencil-square-o"></i> Son Blog İçerikler <span class="hidden-xs"></span></h3>
                        <a href="<?php echo SITE_URL; ?>/Admin/blog" class="btn btn-sm btn-success pull-right"><i class="fa fa-angle-right"></i> Tümünü Gör</a>
                    </div>
                    <div class="box-body">
                        <table id="table2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Başlık</th>
                                    <th>İçerik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($model[4] as $tModel) { ?>
                                    <tr class="warning">
                                        <td class="text-left"><?php echo $tModel['Baslik']; ?></td>
                                        <td><?php echo $tModel['Icerik']; ?></td>
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