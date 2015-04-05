<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootflat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <!-- Page-Specific Stylesheets -->
    @yield('stylesheet')

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>{{ $title or 'Dukcapil' }}</title>
</head>

<body style="background-color: whitesmoke;">
@include('app.navbar')
<div id="wrapper">
<!-- Sidebar -->
@include('app.left_sidebar')
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scripts -->
<!-- Bootstrap -->
<script src="{{ asset('assets/js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Bootflat's JS files.-->
<script src="{{ asset('assets/js/icheck.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fs.selecter.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fs.stepper.min.js') }}"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<!-- Page-Specific Scripts -->
@yield('script')
</body>

</html>
