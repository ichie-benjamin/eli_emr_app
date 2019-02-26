<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('partials.admin.head')
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        @include('partials.admin.nav')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                @include('partials.admin.menu')

                @yield('content')


                <div id="styleSelector">
                </div>

            </div>
        </div>
    </div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/files/assets/pages/waves/js/waves.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('admin/files/assets/pages/chart/float/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/chart/float/curvedLines.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>

<script src="{{ asset('admin/files/bower_components/chartist/js/chartist.js') }}"></script>

<script src="{{ asset('admin/files/assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/widget/amchart/light.js') }}"></script>

<script src="{{ asset('admin/files/bower_components/jquery.steps/js/jquery.steps.js') }}"></script>
<script src="{{ asset('admin/files/bower_components/jquery-validation/js/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('admin/files/assets/pages/forms-wizard-validation/form-wizard.js') }}"></script>
<script src="{{ asset('admin/files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/files/assets/js/script.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<style>
    .wizard>.content {
        min-height: 32em;
    }
    .table td {
        padding: 0 .75rem;
    }
    .card .card-block .help-block {
        line-height: 1.4;
        color: red;
    }
    .form-group .has-error input {
        border-color: red;
    }
    .form-group .has-error select {
        border-color: red;
    }
    #home .page-wrapper .card-body {
        padding-left: 30%;
    }

    .pcoded-main-container {
        background:  #0077be;
    }

</style>

{{--<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>--}}
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script type="text/javascript">
    $('#lfm').filemanager('image');
    tinymce.init({
        selector: '#textarea'
    });
    $(document).ready(function() {
        $('#datatable').DataTable();
    } );
</script>



<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
