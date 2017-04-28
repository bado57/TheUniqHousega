<!--Custom Css-->
<link rel="stylesheet" href="<?php echo SITE_F_CSS; ?>/dropzone.css" type="text/css"/>
<section id="section-welcome-22">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style='float:left;margin-top: 75px;'>Bathroom Form</h1>
            </div>
        </div>
    </div>
</section>
<div id="content" class="no-top no-bottom">
    <div class="container">
        <br><br>
        <form class="form-horizontal form">
            <div class="col-md-8 col-md-offset-2" style='margin-bottom: 110px;'>   	
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="box row-fluid stepanadiv">	
                    <br>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What kind of work would you like done?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step1' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'>Simple repairs and replacements</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Major replacements and upgrades</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Renovation of entire room</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Addition of new room</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Why are you remodeling your bathroom?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step2' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Update the bathroom's look</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Replace bathroom furniture and fixtures</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Fix water damage</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Fix other damage (e.g. mold, termite)</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Make bathroom handicap accessible</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Expand the bathroom</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What kind of bathroom are you remodeling?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step3' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Master (attached to main bedroom)</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Family (full bathroom shared by everyone)</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Half (toilet and sink only)</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Guest (full bathroom used by guests)</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><input type='text' name='step3other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What type of property do you have?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step4' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Home</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step4'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Multi-unit building</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step4'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Office / business</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step4'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Commercial</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step4'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <input type='text' name='step4other' class="form-control stepinput" placeholder="Other (please describe)"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Approximately how old is your property?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step5' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Less than 10 years old</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step5'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 10 - 50 years old</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step5'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 51 - 100 years old</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step5'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 101 years or older</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step5'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> I'm not sure; need professional's help to estimate</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What is the approximate square footage of the bathroom?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step6' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 25 - 50 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step6'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 51 - 75 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step6'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 76 - 100 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step6'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <input type='text' name='step6other' class="form-control stepinput" placeholder="Other (please describe)"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What bathroom furniture and fixtures would you like replaced?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step7' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> I am not replacing any bathroom fixtures</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Bathtub / shower</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Sink</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Toilet</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Tiling</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Counter</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Vanity / medicine cabinet</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Lights</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Sink faucet / tub faucet / showerhead</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step7'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><input type='text' name='step7other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Will any of the plumbing fixtures be relocated?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step8' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> No plumbing fixtures will be relocated</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step8'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Bathtub / shower</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step8'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Sink</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step8'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Toilet</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step8'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> As recommended by professional</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step8'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><input type='text' name='step8other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What fixtures, if any, would you like the professional to purchase?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;text-align: center;'>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath1.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath2.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath3.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath4.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath5.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath6.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath7.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <label class="col-xs-12 col-md-3" style="float:initial !important;cursor:pointer;"><img src="<?php echo SITE_F_IMG; ?>/formimages/bath8.jpg" class="imgCheckbox2" style='width:100%;' alt=""/></label>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step9'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><input type='text' name='step9other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Do you have existing bathroom plans?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step10' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No existing plans, but have a good idea of what I want</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step10'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No existing plans - need design suggestions</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step10'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Already have plans - just need installation</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step10'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <input type='text' name='step10other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Is this project covered by an insurance claim?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step11' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Yes, insurance claim has already been approved</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step11'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Insurance claim is pending approval</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step11'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No, the project is not covered by an insurance claim</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Would you like to add photos of your current bathroom or inspirations for remodeling?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step12' checked value="No"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step12' id="step12photochechk" value="Yes"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Yes</span>
                                </label>
                                <div class="uploadform dropzone no-margin dz-clickable"  style="min-height:300px;">                      
                                    <div class="dz-default dz-message">
                                        <span>Drag and Drop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Anything else the bathroom remodel contractor should know?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step13' checked value="No"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step13' value="Yes"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Yes</span>
                                </label>
                                <div class="bathremodeltext" style="padding: 10px !important;">
                                    <textarea name='bathremodeltext' id='bathremodeltext' class="form-control textareaclass" placeholder="Tell us more." style="height: 200px !important;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Please confirm where you need the kitchen remodel contractor.
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn stepradiolabel">
                                    <input type='text' name='step14zipcode' class="form-control stepinput" placeholder="Zip Code"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Where would you like to receive quotes?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn stepradiolabel">
                                    <input type='text' name='step15email' class="form-control stepinput" placeholder="Email Adress"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Please enter your full name.
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn stepradiolabel">
                                    <input type='text' name='step16fullname' class="form-control stepinput" placeholder="First and last name"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pull-right" style="margin-right: 10px !important;">
                                <button type="button" class="action btn-stepline text-capitalize back btn-step"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button>
                                <button type="button" class="action btn-stepline text-capitalize next btn-step">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                <button type="button" class="action btn-stepline text-capitalize submit btn-step">Submit</button>
                            </div>
                        </div>
                    </div>			
                </div>
            </div> 
        </form> 
    </div>
</div>
<!--Custom-->
<script src="<?php echo SITE_F_JS; ?>/jquery.validate.js"></script>
<script src="<?php echo SITE_F_JS; ?>/jquery-ui.min.js"></script>
<script src="<?php echo SITE_F_JS; ?>/dropzone.js"></script>
<script src="<?php echo SITE_F_JS; ?>/jquery.imgcheckbox.js"></script>
<script type="text/javascript">
    /*İmage Chechk*/
    $(".imgCheckbox2").imgCheckbox();
    $(document).ready(function () {
        var current = 1;
        widget = $(".step");
        btnnext = $(".next");
        btnback = $(".back");
        btnsubmit = $(".submit");
        // Init buttons and UI
        widget.not(':eq(0)').hide();
        hideButtons(current);
        setProgress(current);
        // Next button click action
        btnnext.click(function () {
            if (current < widget.length) {
                // Check validation
                if ($(".form").valid()) {
                    widget.show();
                    widget.not(':eq(' + (current++) + ')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
        })

        // Back button click action
        btnback.click(function () {
            if (current > 1) {
                current = current - 2;
                if (current < widget.length) {
                    widget.show();
                    widget.not(':eq(' + (current++) + ')').hide();
                    setProgress(current);
                }
            }
            hideButtons(current);
        })

        // Submit button click action
        btnsubmit.click(function () {
            if ($(".form").valid()) {

            }
        });

        $('.form').validate({// initialize plugin
            ignore: ":not(:visible)",
            rules: {
                step14zipcode: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                step15email: {required: true, email: true},
                step16fullname: {
                    required: true,
                    minlength: 3
                },
                country: "required",
                username: "required",
                password: "required",
                rpassword: {required: true, equalTo: "#password"},
            },
        });

        //Radio button step6 chechked
        $(".uploadform").hide();
        $('input[type=radio][name=step12]').change(function () {
            if (this.value == 'Yes') {
                $(".uploadform").show();
            } else if (this.value == 'No') {
                $(".uploadform").hide();
            }
        });
        //Radio button step7 chechked
        $(".bathremodeltext").hide();
        $('input[type=radio][name=step13]').change(function () {
            if (this.value == 'Yes') {
                $(".bathremodeltext").show();
            } else if (this.value == 'No') {
                $(".bathremodeltext").hide();
            }
        });

        /*Dropzone*/
        Dropzone.autoDiscover = false;
        $(".uploadform").dropzone({
            acceptedFiles: "image/*,.psd,.odt,.stl",
            url: SITE_URL + "/Sip_Ajax",
            maxFiles: 10,
            maxFilesize: 20,
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    formData.append("tip", "imageadded");
                    formData.append("firmID", $("input[name=firmaID]").val());
                }),
                        this.on("success", function (response) {
                            var path = JSON.parse(response.xhr.responseText);
                            if (path.hata == undefined) {
                                var previewlenth = $(".dz-preview").length;
                                for (var l = 0; l < previewlenth; l++) {
                                    var textname = $(".dz-preview").eq(l).find(".dz-filename").find("span").text();
                                    if (textname == response.name) {
                                        $(".dz-preview:eq(" + l + ")").find(".dz-remove").attr('name', path.filepath);
                                        $(".dz-preview:eq(" + l + ")").find(".dz-remove").attr('ID', path.ID);
                                    }
                                }
                                return response.previewElement.classList.add("dz-success");
                            } else {
                                response.previewElement.classList.add("dz-error");
                                reset();
                                alertify.alert(path.hata);
                                var _ref;
                                return (_ref = response.previewElement) != null ? _ref.parentNode.removeChild(response.previewElement) : void 0;
                                return false;
                            }
                        })
            },
            maxfilesexceeded: function (file) {
                reset();
                alertify.alert("5'den fazla Dosya yüklediniz. Sadece ilk 5 dosya yüklenecek!");
                return false;
            },
            error: function (file, response) {
                if ($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                return _results;
            },
            addRemoveLinks: true,
            removedfile: function (file) {
                var name = $(file.previewTemplate).children('.dz-remove').attr("name");
                var ID = $(file.previewTemplate).children('.dz-remove').attr("ID");
                $.ajax({
                    type: "post",
                    url: SITE_URL + "/Sip_Ajax",
                    cache: false,
                    dataType: "json",
                    data: {"tip": "imagedelete", "name": name, "ID": ID},
                    success: function (cevap) {
                        if (cevap.hata) {
                            reset();
                            alertify.alert(cevap.hata);
                            return false;
                        } else {
                            alertify.success("Dosyanız silinmiştir.");
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                        }
                    }
                });
            }
        });
    });
    // Change progress bar action
    setProgress = function (currstep) {
        var percent = parseFloat(100 / widget.length) * currstep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%").html(percent + "%");
    }

    // Hide buttons according to the current step
    hideButtons = function (current) {
        var limit = parseInt(widget.length);
        $(".action").hide();
        if (current < limit)
            btnnext.show();
        if (current > 1)
            btnback.show();
        if (current == limit) {
            // Show entered values
            $(".display label:not(.control-label)").each(function () {
                console.log($(this).find("label:not(.control-label)").html($("#" + $(this).data("id")).val()));
            });
            btnnext.hide();
            btnsubmit.show();
        }
    }
</script>