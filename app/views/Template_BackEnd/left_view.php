<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo SITE_BACK_UPLOAD . '/' . Session::get("ProfilResim"); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo Session::get("KAdSoyad"); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?php echo Session::get("TipText"); ?></a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">İŞLEMLER</li>
            <li class="active">
                <a href="<?php echo SITE_URLA; ?>">
                    <i class="fa fa-home"></i> <span>Anasayfa</span>
                </a>
            </li>
            <li>
                <a href="<?php echo SITE_URLA; ?>/blog">
                    <i class="fa fa-pencil-square-o"></i> <span>Blog</span>
                </a>
            </li>
            <li>
                <a href="<?php echo SITE_URLA; ?>/designform">
                    <i class="fa fa-newspaper-o"></i> <span>Design Form</span>
                </a>
            </li>
            <li>
                <a href="<?php echo SITE_URLA; ?>/iletisim">
                    <i class="fa fa-paper-plane-o"></i> <span>İletişim</span>
                </a>
            </li>
            <li>
                <a href="<?php echo SITE_URL; ?>" target="_blank">
                    <i class="fa fa-arrow-circle-right"></i> <span>Siteyi Görüntüle</span></i>
                </a>
            </li>
        </ul>
    </section>
    <script type="text/javascript">
        $(document).ready(function () {
            var url = window.location.href;
            $(".sidebar-menu").find("li.active").removeClass("active");
            var link = $(".sidebar-menu").find('[href="' + url + '"]');
            if (link.parent().parent().hasClass("treeview-menu")) {
                link.parent().parent().parent().addClass("active");
            }
            link.parent().addClass("active");
        });
    </script>
</aside>
