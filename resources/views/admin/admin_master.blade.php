<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('tittle') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/admin/theme/images/favicon.png") }}">
    <link rel="stylesheet" href="{{ asset("/admin/theme/vendor/owl-carousel/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/admin/theme/vendor/owl-carousel/css/owl.theme.default.min.css") }}">
    <link href="{{ asset("/admin/theme/vendor/jqvmap/css/jqvmap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/admin/theme/css/style.css") }}" rel="stylesheet">


    <!-- Datatable -->
    <link href="{{ asset("/admin/theme/vendor/datatables/css/jquery.dataTables.min.css") }}" rel="stylesheet">


        <!-- Daterange picker -->
        <link href="{{ asset("/admin/theme/vendor/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
        <!-- Clockpicker -->
        <link href="{{ asset("/admin/theme/vendor/clockpicker/css/bootstrap-clockpicker.min.css") }}" rel="stylesheet">
        <!-- asColorpicker -->
        <link href="{{ asset("/admin/theme/vendor/jquery-asColorPicker/css/asColorPicker.min.css") }}" rel="stylesheet">
        <!-- Material color picker -->
        <link href="{{ asset("/admin/theme/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css") }}" rel="stylesheet">
        <!-- Pick date -->
        <link rel="stylesheet" href="{{ asset("/admin/theme/vendor/pickadate/themes/default.css") }}">
        <link rel="stylesheet" href="{{ asset("/admin/theme/vendor/pickadate/themes/default.date.css") }}">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route("dashboard") }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset("/admin/theme/images/logo.png") }}" alt="">
                <img class="logo-compact" src="{{ asset("/admin/theme/images/logo-text.png") }}" alt="">
                <img class="brand-title" src="{{ asset("/admin/theme/images/logo-text.png") }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

@include('admin.header')

@include('admin.footer')


@include('admin.sidebar')


@yield('admin.index')


@include('admin.footer')

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!-- Required vendors -->
    <script src="{{ asset("/admin/theme/vendor/global/global.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/js/quixnav-init.js") }}"></script>
    <script src="{{ asset("/admin/theme/js/custom.min.js") }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset("/admin/theme/vendor/raphael/raphael.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/morris/morris.min.js") }}"></script>


    <script src="{{ asset("/admin/theme/vendor/circle-progress/circle-progress.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/chart.js/Chart.bundle.min.js") }}"></script>

    <script src="{{ asset("/admin/theme/vendor/gaugeJS/dist/gauge.min.js") }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset("/admin/theme/vendor/flot/jquery.flot.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/flot/jquery.flot.resize.js") }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset("/admin/theme/vendor/owl-carousel/js/owl.carousel.min.js") }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset("/admin/theme/vendor/jqvmap/js/jquery.vmap.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/jqvmap/js/jquery.vmap.usa.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/jquery.counterup/jquery.counterup.min.js") }}"></script>


    <script src="{{ asset("/admin/theme/js/dashboard/dashboard-1.js") }}"></script>

    <script src="{{ asset("/admin/theme/vendor/datatables/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/js/plugins-init/datatables.init.js") }}"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset("/admin/theme/vendor/moment/moment.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset("/admin/theme/vendor/clockpicker/js/bootstrap-clockpicker.min.js") }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset("/admin/theme/vendor/jquery-asColor/jquery-asColor.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/jquery-asGradient/jquery-asGradient.min.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js") }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset("/admin/theme/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js") }}"></script>
    <!-- pickdate -->
    <script src="{{ asset("/admin/theme/vendor/pickadate/picker.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/pickadate/picker.time.js") }}"></script>
    <script src="{{ asset("/admin/theme/vendor/pickadate/picker.date.js") }}"></script>



    <!-- Daterangepicker -->
    <script src="{{ asset("/admin/theme/js/plugins-init/bs-daterange-picker-init.js") }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset("/admin/theme/js/plugins-init/clock-picker-init.js") }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset("/admin/theme/js/plugins-init/jquery-asColorPicker.init.js") }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset("/admin/theme/js/plugins-init/material-date-picker-init.js") }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset("/admin/theme/js/plugins-init/pickadate-init.js") }}"></script>

</body>

</html>
