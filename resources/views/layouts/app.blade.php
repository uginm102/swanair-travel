<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <link rel="stylesheet" href="assets/css/bootstrap.css">--}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    {{--    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">--}}

    {{--    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">--}}
    {{--    <link rel="stylesheet" href="assets/css/app.css">--}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type='image/x-icon'>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    @include('layouts.partials.sidebar')
    <div id="main">
        @include('layouts.partials.navbar')
        <div class="main-content container-fluid">
            @yield('content')
        </div>
        @include('layouts.partials.footer')
    </div>
</div>
{{--    <script src="assets/js/feather-icons/feather.min.js"></script>--}}
{{--    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>--}}
<!-- <script src="assets/js/app.js"></script> -->

{{--    <script src="assets/vendors/chartjs/Chart.min.js"></script>--}}
{{--    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>--}}
{{--    <script src="assets/js/pages/dashboard.js"></script>--}}

{{--    <script src="assets/js/main.js"></script>--}}
</body>
</html>
