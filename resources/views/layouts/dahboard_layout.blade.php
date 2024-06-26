<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
</head>

<body class="">

    <div class="">
        @yield('content')
    </div>


    <script src="{{ asset('assets/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/assets/js/pcoded.min.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('assets/assets/js/plugins/apexcharts.min.js') }}"></script>
    <!-- custom-chart js -->
    <script src="{{ asset('assets/assets/js/pages/dashboard-main.js') }}"></script>
</body>

</html>
