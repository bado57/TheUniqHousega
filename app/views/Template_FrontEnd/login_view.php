<html>
    <head>
    <title>Login | <?php echo SITE_TITLE; ?></title>
    <meta name="author" content="Andromeda LLC - www.andromeda.network">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="The Uniq House" />
</head>
<body>
<link rel="stylesheet" href="<?php echo SITE_F_CSS; ?>/alertify.css" type="text/css" media="all"/>
<link href="<?php echo SITE_F_CSS; ?>/customlogin.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo SITE_F_JS; ?>/jquery-1.11.3.min.js"></script>
<script src="<?php echo SITE_F_JS; ?>/customlogin.js" type="text/javascript"></script>
<script src="<?php echo SITE_F_JS; ?>/TweenLite.js" type="text/javascript"></script>
<script src="<?php echo SITE_F_JS; ?>/alertify.js"></script>
<script src="<?php echo SITE_F_JS; ?>/userslogin.js"></script>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Giriş Yap</h3>
                    <input type="hidden" id="sonucDeger" value="<?php echo $model[0]["Result"]; ?>" />
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" action="<?php echo SITE_URL; ?>/Login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-Posta" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Şifre" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş Yap">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
