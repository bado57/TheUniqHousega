<section id="section-welcome-22">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style='float:left;margin-top: 75px;'>Social</h1>
            </div>
        </div>
    </div>
</section>
<div id="content" class="no-top no-bottom">
    <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
        <div class="container">
            <div class="spacer-single"></div>
            <ul id = "myTab" class = "nav nav-tabs">
                <li class="active"><a href="#facebook" data-toggle="tab">facebook</a></li>
                <li><a href="#twitter" data-toggle="tab">twitter</a></li>
                <li><a href="#instagram" data-toggle="tab">instagram</a></li>
                <li><a href="#pinterest" data-toggle="tab">pinterest</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="col-md-12 tab-pane fade in active" id = "facebook" style="padding-top: 50px;padding-bottom: 50px;"> 
                    <div class="col-md-offset-4">
                        <div class="fb-page" data-href="https://www.facebook.com/Theuniqhousega/" data-tabs="timeline" data-width="1920px" data-height="1080px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/Theuniqhousega/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/Theuniqhousega/">Theuniqhousega</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 tab-pane fade" id="twitter" style="padding-top: 50px;padding-bottom: 50px;">
                    <a class="twitter-timeline" href="https://twitter.com/theuniqhousega">Tweets by theuniqhousega</a> 
                </div>
                <div class="col-md-12 tab-pane fade" id="instagram" style="padding-top: 50px;padding-bottom: 50px;">
                    <ul class="list-unstyled blog-photos margin-bottom-35" id="instafeed2">

                    </ul>
                </div>
                <div class="col-md-10 col-md-offset-2 tab-pane fade" id = "pinterest" style="padding-top: 50px;padding-bottom: 50px;">
                    <a data-pin-do="embedUser" data-pin-board-width="100" data-pin-scale-height="500" data-pin-scale-width="100" href="https://www.pinterest.com/theuniqhousega/"></a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Social Js-->
<script src="<?php echo SITE_F_JS; ?>/instafeed.min.js"></script>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>