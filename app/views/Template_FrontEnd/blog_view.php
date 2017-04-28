<section id="section-welcome-20" data-speed="8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="float:left;margin-top: 75px;">blog</h1>
            </div>
        </div>
    </div>
</section>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="blog-list">
                    <?php $count = count($model[0]); ?>
                    <?php if ($count > 0) { ?>
                        <?php foreach ($model[0] as $hModel) { ?>
                            <li>
                                <div class="post-content">
                                    <div class="post-image">
                                        <img style="height: 600px !important;" src="<?php echo SITE_BACK_UPBLOG; ?>/<?php echo $hModel["Path"] ?>" alt="The Uniq House <?php echo $hModel["Baslik"] ?>" />
                                    </div>
                                    <div class="date-box">
                                        <div class="day"><?php echo $hModel["Gun"] ?></div>
                                        <div class="month"><?php echo $hModel["Ay"] ?></div>
                                    </div>
                                    <div class="post-text">
                                        <h3 style="font-family:Arial, Helvetica, sans-serif;"><a href="<?php echo SITE_URL; ?>/blogdetail/<?php echo $hModel['ID']; ?>"><?php echo $hModel["Baslik"] ?></a></h3>
                                        <p><?php echo $hModel["Icerik"] ?></p>    
                                    </div>
                                    <a href="<?php echo SITE_URL; ?>/blogdetail/<?php echo $hModel['ID']; ?>" class="btn-more">Read More</a>
                                </div>
                            </li>
                        <?php } ?> 
                    <?php } ?> 
                </ul>
                <div class="text-center">
                    <ul class="pagination">
                        <?php if ($model[1] > 1) { ?>
                            <li><a href="<?php echo SITE_URL; ?>/blog/<?php echo $model[1] - 1; ?>" style="cursor: pointer;">Prev</a></li>
                        <?php } ?>
                        <?php for ($i = $model[1] - $model[3]; $i < $model[1] + $model[3] + 1; $i++) { ?>
                            <?php if ($i > 0 and $i <= $model[2]) { ?>
                                <?php if ($i == $model[1]) { ?>
                                    <li class="active"><a href="<?php echo SITE_URL; ?>/blog/<?php echo $i; ?>" style="cursor: pointer;"><?php echo $i; ?></a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo SITE_URL; ?>/blog/<?php echo $i; ?>" style="cursor: pointer;"><?php echo $i; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        <?php if ($model[1] != $model[2]) { ?>
                            <li><a href="<?php echo SITE_URL; ?>/blog/<?php echo $model[1] + 1; ?>" style="cursor: pointer;">Next</a></li>
                            <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>