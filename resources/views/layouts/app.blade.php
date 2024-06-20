<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ jcms()->name ?? 'JCMS' }}</title>
    <meta name="description" content="{{ jcms()->description ?? 'JCMS' }}">
    <meta name="keyword" content="{{ jcms()->keyword ?? 'JCMS' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/dist/css/custom.css" rel="stylesheet" type="text/css">
    @livewireStyles
    @stack('styles')
</head>

<body class="font-sans antialiased">
    {{-- <x-banner /> --}}

    {{-- <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals') --}}
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <x-z-navbar />

        <x-z-vnav-menu />

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="container-xxl">
                <!-- Page Body -->
                {{ $slot }}
                <!-- /Page Body -->
            </div>

            <x-z-footer />

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

    @stack('scripts')

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <script>
        // $(window).on('load', function() {
        //     if (feather) {
        //         feather.replace({
        //             width: 14,
        //             height: 14
        //         });
        //     }
        // })
    </script>

    <!-- Init JS -->
    <script src="{{ asset('assets') }}/dist/js/init.js"></script>
    <script src="{{ asset('assets') }}/dist/js/chips-init.js"></script>
    <script>
        window.onload = function() {
            const marqueeContainer = document.getElementById('marqueeContainer');
            const marqueeText = document.getElementById('marqueeText');
            const marqueeWidth = marqueeText.offsetWidth;
            marqueeContainer.style.width = marqueeWidth + 'px';
        };
    </script>
    @livewireScripts
</body>

</html>
