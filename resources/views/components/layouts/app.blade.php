<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} {{ jcms()->name }}</title>
    <meta name="description"
        content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap." />

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/dist/css/custom.css" rel="stylesheet" type="text/css">
    @stack('styles')
</head>

<body>
    <div class="hk-wrapper hk-pg-auth" data-layout="navbar" data-layout-style="default" data-menu="light"
        data-footer="simple">
        @include('frontend.layouts.navbar')

        <div class="hk-pg-wrapper">

            {{ $slot }}


            @include('frontend.layouts.footer')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets') }}/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('assets') }}/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets') }}/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets') }}/vendors/simplebar/dist/simplebar.min.js"></script>

    <!-- Init JS -->
    <script src="{{ asset('assets') }}/dist/js/init.js"></script>

    @stack('scripts')
</body>

</html>
