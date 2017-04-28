<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="author" content="Andromeda LLC - www.andromeda.network">
    <link rel="shortcut icon" href="<?php echo SITE_FRONT_IMG; ?>/ruyiportal/favicon.png"/>
    <title>Admin Panel | <?php echo SITE_TITLE; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_F_IMG; ?>/favicons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo SITE_F_IMG; ?>/favicons/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="<?php echo SITE_F_IMG; ?>/favicons/favicon-16x16.png" sizes="16x16"/>
    <link rel="manifest" href="<?php echo SITE_F_IMG; ?>/favicons/manifest.json"/>
    <link rel="mask-icon" href="<?php echo SITE_F_IMG; ?>/favicons/safari-pinned-tab.svg"/>
    <meta name="theme-color" content="#f8b617"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_CSS; ?>/bootstrap-multiselect.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_CSS; ?>/bootstrap.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_PLUGINS; ?>/datatables/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_PLUGINS; ?>/select2/select2.min.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_CSS; ?>/AdminLTE.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_CSS; ?>/skins/_all-skins.min.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_PLUGINS; ?>/iCheck/all.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_CSS; ?>/alertify.css"/>
    <link rel="stylesheet" href="<?php echo SITE_BACK_PLUGINS; ?>/treegrid/jquery.treegrid.css"/>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo SITE_BACK_JS; ?>/bootstrap.min.js"></script>
    <script src="<?php echo SITE_BACK_JS ?>/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo SITE_BACK_JS; ?>/alertify.js" type="text/javascript"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/select2/select2.full.min.js"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo SITE_BACK_JS; ?>/bootstrap-multiselect.js"></script>
    <script src="<?php echo SITE_BACK_CJS; ?>/panel.js" type="text/javascript"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/fastclick/fastclick.min.js"></script>
    <script src="<?php echo SITE_BACK_JS ?>/app.js"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/iCheck/icheck.min.js"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/ckeditor/ckeditor.js"></script>
    <script src="<?php echo SITE_BACK_PLUGINS; ?>/ckfinder/ckfinder.js"></script>
    <script type="text/javascript" src="<?php echo SITE_BACK_PLUGINS; ?>/treegrid/jquery.treegrid.js"></script>
    <script type="text/javascript" src="<?php echo SITE_BACK_PLUGINS; ?>/treegrid/jquery.treegrid.bootstrap3.js"></script>
    <script src="<?php echo SITE_BACK_JS ?>/jquery.maskMoney.js"></script>
    <script>
        var SITE_URL = "http://localhost/theuniqhouse";
        function reset() {
            alertify.set({
                labels: {
                    ok: "OK",
                    cancel: "Cancel"
                },
                delay: 3000,
                buttonReverse: false,
                buttonFocus: "ok"
            });
        }
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="<?php echo SITE_URLA; ?>" class="logo">
            <span class="logo-mini"><b><?php echo SITE_MTITLE; ?></b></span>
            <span class="logo-lg"><b><?php echo SITE_TITLE; ?></b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <?php echo SITE_TITLE; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo SITE_BACK_UPLOAD . '/' . Session::get("ProfilResim"); ?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo Session::get("KAdSoyad"); ?>
                                        <small><?php echo Session::get("TipText"); ?></small>
                                    </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo SITE_URL; ?>/Admin/profil" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo SITE_URL; ?>/Cikis" class="btn btn-default btn-flat">Exit</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>