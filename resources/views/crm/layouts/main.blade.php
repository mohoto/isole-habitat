<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">

    <link href="{{ asset('css/custombox.css')}}" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('isolation-crm/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/toastr/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/plugins/notifications/notification.css')}}" rel="stylesheet" type="text/css" />
    <!-- SweetAlert2 CSS -->
    <link href="{{ asset('isolation-crm/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    <!-- DatePicker et TimePicker -->
    <link href="{{ asset('isolation-crm/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('isolation-crm/plugins/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Full Calendar -->
    <link href="{{ asset('isolation-crm/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('isolation-crm/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('isolation-crm/css/style.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('isolation-crm/js/modernizr.min.js')}}"></script>

</head>
<body class="@yield('pageClass')">
@yield('navigation')

@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                © 2018 - Presta Habitat
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- jQuery  -->
<script src="{{ asset('isolation-crm/js/jquery.min.js')}}"></script>
<script src="{{ asset('isolation-crm/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{ asset('isolation-crm/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('isolation-crm/js/waves.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.scrollTo.min.js')}}"></script>
<!-- Modal-Effect -->
<script src="{{ asset('isolation-crm/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/custombox/js/legacy.min.js')}}"></script>
<!-- switchery radio custom -->
<script src="{{ asset('isolation-crm/plugins/switchery/js/switchery.min.js')}}"></script>
<!-- toastr -->
<script src="{{ asset('isolation-crm/plugins/toastr/toastr.js')}}"></script>
<!-- Select input-->
<script src="{{ asset('isolation-crm/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- notify -->
<script src="{{ asset('isolation-crm/plugins/notifyjs/js/notify.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/notifications/notify-metro.js')}}"></script>
<!-- Sweet alert -->
<script src="{{ asset('isolation-crm/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<!-- DatePiccker et TimePicker -->
<script src="{{ asset('isolation-crm/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/bootstrap-datepicker/js/locale/bootstrap-datepicker.fr.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>

<script src="{{ asset('isolation-crm/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Full-calendar -->
<script src="{{ asset('isolation-crm/plugins/moment/moment.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script src="{{ asset('isolation-crm//plugins/fullcalendar/js/jquery.fullcalendar.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/fullcalendar/js/locale-all.js')}}"></script>
<!-- App js -->
<script src="{{ asset('isolation-crm/js/jquery.core.js')}}"></script>
<script src="{{ asset('isolation-crm/js/jquery.app.js')}}"></script>
<script src="{{ asset('isolation-crm/js/custom-crm.js')}}"></script>
<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
    var changeCheckbox = document.querySelector('.js-check-change');

    changeCheckbox.onchange = function() {
        alert(changeCheckbox.checked);
    };

</script>
<script>
    //var elem = document.querySelector('.switch-caves');
    //var switchery = new Switchery(elem, { color: '#8ab326', jackColor: '#ffffff' });

    var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-caves'));
    elems.forEach(function(html) {
        var switchery = new Switchery(html, { color: '#8ab326', jackColor: '#ffffff' });
    });
    /*var changeCheckbox = document.querySelectorAll('.switch-caves');
    var input_voutee = document.querySelectorAll('.iso-caves-voutee');
    for(var i=0; i<changeCheckbox.length; i++){
        changeCheckbox[i].onchange = function() {
            alert(this.checked);
            if(this.checked == true){
                input_voutee.style.display = "block";
            }
            else {
                input_voutee.style.display = "none";
            }
        };
    }*/

</script>
@yield('javascript')
</body>
</html>

