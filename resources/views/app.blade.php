<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootflat.min.css') }}" rel="stylesheet">

    <!-- Page-Specific Stylesheets -->
    @yield('stylesheet')

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>{{ $title or 'Dukcapil' }}</title>
</head>

<body style="background-color: whitesmoke;">
<div class="wrapper">
    @include('app.navbar')

    <div class="container-fluid documents">
        <div class="row">

            <div class="col-md-2">
                @include('app.left_sidebar')
            </div>

            <div class="col-md-8">
                @yield('content')
            </div>

            <div class="col-md-2">
                @include('app.right_sidebar')
            </div>

        </div>
    </div>

    <div class="footer_push"></div>
</div>

@include('app.footer')

<!-- Scripts -->
<!-- Bootstrap -->
<script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Bootflat's JS files.-->
<script src="{{ asset('assets/js/icheck.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fs.selecter.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fs.stepper.min.js') }}"></script>

<!-- Page-Specific Scripts -->
@yield('script')
</body>

</html>
