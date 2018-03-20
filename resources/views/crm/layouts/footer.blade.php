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
<!-- notify -->
<script src="{{ asset('isolation-crm/plugins/notifyjs/js/notify.js')}}"></script>
<script src="{{ asset('isolation-crm/plugins/notifications/notify-metro.js')}}"></script>
<!-- Sweet alert -->
<script src="{{ asset('isolation-crm/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
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
    var changeCheckbox = document.querySelectorAll('.switch-caves');
    var input = document.querySelectorAll('.isolation_voutee_surface');
    for(var i=0; i<changeCheckbox.length; i++){
        changeCheckbox[i].onchange = function() {
            alert(this.checked);
            if(this.checked){
                input.removeAttribute('hidden');
            }else{
                input.setAttribute('hidden');
            }
        };
    }

</script>
@yield('javascript')
</body>
</html>