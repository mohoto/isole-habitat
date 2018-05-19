<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Bootstrap Wizard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('plugins/wizard/assets/img/apple-icon.png') }}') }}" />
    <link rel="icon" type="image/png" href="{{ asset('plugins/wizard/assets/img/favicon.png') }}') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}" />

    <!-- CSS Files -->
    {{--<link href="{{ asset('plugins/wizard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />--}}
<!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/wizard/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('plugins/wizard/assets/css/demo.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
        <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('plugins/wizard/assets/img/new_logo.png') }}') }}">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>

    <!--  Made With Material Kit  -->
    <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
        <div class="brand">MK</div>
        <div class="made-with">Made with <strong>Material Kit</strong></div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="purple" id="wizard">
                        <form action="" method="">
                            <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">
                                    List Your Place
                                </h3>
                                <h5>This information will let us know more about your place.</h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#location" data-toggle="tab">Location</a></li>
                                    <li><a href="#type" data-toggle="tab">Type</a></li>
                                    <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                                    <li><a href="#description" data-toggle="tab">Description</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="location">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Let's start with the basic details</h4>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">City</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Country</label>
                                                <select name="country" class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option value="Afghanistan"> Afghanistan </option>
                                                    <option value="Albania"> Albania </option>
                                                    <option value="Algeria"> Algeria </option>
                                                    <option value="American Samoa"> American Samoa </option>
                                                    <option value="Andorra"> Andorra </option>
                                                    <option value="Angola"> Angola </option>
                                                    <option value="Anguilla"> Anguilla </option>
                                                    <option value="Antarctica"> Antarctica </option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Accommodates</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>1 Person</option>
                                                    <option>2 Persons </option>
                                                    <option>3 Persons</option>
                                                    <option>4 Persons</option>
                                                    <option>5 Persons</option>
                                                    <option>6+ Persons</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Rent price</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-addon">$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="type">
                                    <h4 class="info-text">What type of location do you have? </h4>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                    <input type="radio" name="type" value="House">
                                                    <div class="icon">
                                                        <i class="material-icons">home</i>
                                                    </div>
                                                    <h6>House</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                    <input type="radio" name="type" value="Appartment">
                                                    <div class="icon">
                                                        <i class="material-icons">hotel</i>
                                                    </div>
                                                    <h6>Appartment</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="facilities">
                                    <h4 class="info-text">Tell us more about facilities. </h4>
                                    <div class="row">
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your place is good for</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Business</option>
                                                    <option>Vacation </option>
                                                    <option>Work</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Is air conditioning included ?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Does your place have wi-fi?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Is breakfast included?</label>
                                                <select class="form-control">
                                                    <option disabled="" selected=""></option>
                                                    <option>Yes</option>
                                                    <option>No </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="description">
                                    <div class="row">
                                        <h4 class="info-text"> Drop us a small description. </h4>
                                        <div class="col-sm-6 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Place description</label>
                                                <textarea class="form-control" placeholder="" rows="9"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Example</label>
                                                <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container text-center">
            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
        </div>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/wizard/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('plugins/wizard/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="{{ asset('plugins/wizard/assets/js/jquery.validate.min.js') }}"></script>

</html>
