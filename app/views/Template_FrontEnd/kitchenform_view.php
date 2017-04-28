<!--Custom Css-->
<link rel="stylesheet" href="<?php echo SITE_F_CSS; ?>/dropzone.css" type="text/css"/>
<section id="section-welcome-22">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style='float:left;margin-top: 75px;'>Kitchen Form</h1>
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
                            Why are you remodeling your kitchen?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step2' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Update the kitchen's look</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Redesign the layout</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Replace appliances</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Fix water damage</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step2'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Fix other damage</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            What is the approximate square footage of the kitchen?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step3' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Less than 50 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 51 - 75 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> 76 - 100 sq ft</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step3'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> More than 100 sq ft</span>
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
                            What items will be renovated or replaced?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="checkbox" name='step5' checked><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Cabinets</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Counters</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Windows</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Appliances</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Sink</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Backsplash</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Range hood</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span class='stepradiolabelspan'> Floor</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="checkbox" name='step5'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><input type='text' name='step5other' class="form-control stepinput" placeholder="Other"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="col-xs-12 col-md-12 stepbaslik">
                            Would you like to add photos of your current kitchen or inspirations for remodeling?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step6' checked value="No"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step6' id="step6photochechk" value="Yes"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Yes</span>
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
                            Anything else the kitchen remodel contractor should know?
                        </div>
                        <div class="col-xs-12 col-md-12" style='padding:0px;'>
                            <div class="btn-group btn-group-vertical stepdiv" data-toggle="buttons">
                                <label class="btn active stepradiolabel">
                                    <input type="radio" name='step7' checked value="No"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> No</span>
                                </label>
                                <label class="btn stepradiolabel">
                                    <input type="radio" name='step7' value="Yes"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span class='stepradiolabelspan'> Yes</span>
                                </label>
                                <div class="kitchenremodeltext" style="padding: 10px !important;">
                                    <textarea name='kitchenremodeltext' id='kitchenremodeltext' class="form-control textareaclass" placeholder="Tell us more." style="height: 200px !important;"></textarea>
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
                                    <input type='text' name='step8zipcode' class="form-control stepinput" placeholder="Zip Code"/>
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
                                    <input type='text' name='step9email' class="form-control stepinput" placeholder="Email Adress"/>
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
                                    <input type='text' name='step10fullname' class="form-control stepinput" placeholder="First and last name"/>
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
<script type="text/javascript">
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
        })

        $('.form').validate({// initialize plugin
            ignore: ":not(:visible)",
            rules: {
                step8zipcode: {
                    required: true,
                    minlength: 5,
                    maxlength: 5
                },
                step9email: {required: true, email: true},
                step10fullname: {
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
        $('input[type=radio][name=step6]').change(function () {
            if (this.value == 'Yes') {
                $(".uploadform").show();
            } else if (this.value == 'No') {
                $(".uploadform").hide();
            }
        });
        //Radio button step7 chechked
        $(".kitchenremodeltext").hide();
        $('input[type=radio][name=step7]').change(function () {
            if (this.value == 'Yes') {
                $(".kitchenremodeltext").show();
            } else if (this.value == 'No') {
                $(".kitchenremodeltext").hide();
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