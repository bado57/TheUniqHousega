<section style="padding:160px 0 22px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main id="main" class="site-main" >
                    <div class="blog-detail">
                        <h1 class="linksiz" style="margin-bottom: 65px;font-family:Arial, Helvetica, sans-serif;"><?php echo $model[0]['Baslik']; ?></h1>
                        <div class="latest-blog-post-date-2  text-cap">
                            <span class="month"><?php echo $model[0]['Tarih']; ?></span>
                        </div>
                        <div class="lastest-news-detail">
                            <?php echo $model[0]['Icerik']; ?>
                            <ul class="pagination" style="width: 100%;margin-top:130px;">
                                <li><a href="" style="cursor: pointer;background-color:#FAB702;color:#fff;float:left;"><</a></li>
                                <li><a href="" style="cursor: pointer;background-color:#FAB702;color:#fff;float:right;">></a></li>
                            </ul>
                        </div>
                    </div>
                </main> 
            </div>
        </div>
    </div>
</section>